#!/usr/bin/env ruby
require 'rubygems'
gem 'oauth'
gem 'mime'
gem 'mime-types'

require 'oauth'
require 'oauth/consumer'
require 'mime'
require 'mime/types'
require 'yaml'

# Helper function to build multipart request body
CRLF = "\r\n"
def http_multipart_data(params)
  body    = ""
  headers = {}
  
  boundary = Time.now.to_i.to_s(16)
  
  headers["Content-Type"] = "multipart/form-data; boundary=#{boundary}"
  params.each do |key,value|
    esc_key = OAuth::Helper.escape(key.to_s)
    body <<  "--#{boundary}#{CRLF}"
    
    if value.respond_to?(:read)
      mime_type = MIME::Types.type_for(value.path)[0] || MIME::Types["application/octet-stream"][0]
      body << "Content-Disposition: form-data; name=\"#{esc_key}\"; filename=\"#{File.basename(value.path)}\"#{CRLF}"
      body << "Content-Type: #{mime_type.simplified}#{CRLF*2}"
      body << value.read
    else
      body << "Content-Disposition: form-data; name=\"#{esc_key}\"#{CRLF*2}#{value}"
    end
  end
  
  body << "--#{boundary}--#{CRLF*2}"
  headers["Content-Length"] = body.size.to_s
  
  return [ body, headers ]
end

# Load configuration and prepare the OAuth consumer
config = YAML.load(open('oauth.yml'))
consumer = OAuth::Consumer.new(config['consumer']['key'], config['consumer']['secret'], :site => config['api']['endpoint'])
@access_token = OAuth::AccessToken.new(consumer, config['access']['token'], config['access']['secret'])


# Parse command line
api_method = ARGV.shift
i = 0
params = {}
while i < ARGV.length do
  params[ARGV[i]] = ARGV[i+1]
  i += 2
end

# Communicate
if params.has_key? "file"
  params['file'] = File.open(params['file'])
  body, headers = http_multipart_data(params)
  oauth_response = @access_token.post(api_method, body, headers)
else
  consumer.http.set_debug_output($stderr)
  oauth_response = @access_token.post(api_method, params)
end

puts oauth_response.body
