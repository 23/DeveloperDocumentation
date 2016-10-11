#!/usr/bin/env ruby

# Instructions:
#
# Register your application by following the instruction on
#   http://community.23video.com/api/
#
# Upon successful registration, you'll get a yaml file with oauth credentials
# Pass these values on the command line as --key (-k) and --secret (-s) then
# follow the instructions.
#
# This script is a cheap copy of the oauth script in yammer4r.

require 'optparse'
require 'rubygems'
require 'oauth'

options = {
  :outfile  => 'oauth.yml'
}

VP_OAUTH = "http://api.visualplatform.net"

ARGV.options do |o|
  script_name = File.basename($0)

  o.set_summary_indent('  ')
  o.banner =    "Usage: #{script_name} [OPTIONS]"
  o.define_head "Create a yaml file for Visual Platform OAuth"
  o.separator   ""
  o.separator   "[-k] and [-s] options are mandatory"
  o.separator   ""

  o.on("-o", "--outfile=[val]", String,
       "Yaml output file",
       "Default: #{options[:outfile]}")     { |opts| options[:outfile] = opts }
  o.on("-k", "--key=val", String,
       "Consumer key for Visual Platform app")       { |key| options[:key] = key}
  o.on("-s", "--secret=val", String,
       "Consumer secret for Visual Platform app")    { |secret| options[:secret] = secret}

  o.separator ""

  o.on_tail("-h", "--help", "Show this help message.") { puts o; exit }
  o.parse!
end

unless options[:key] && options[:secret]
  raise ArgumentError, "Must supply consumer key and secret (use -h for help)"
end

consumer      = OAuth::Consumer.new options[:key], options[:secret], {:site => VP_OAUTH}
request_token = consumer.get_request_token

puts "Please visit the following URL in your browser to authorize your application, then enter the 4 character security code when done: #{request_token.authorize_url}"
oauth_verifier =  gets
response = consumer.token_request(consumer.http_method,
                                  (consumer.access_token_url? ? consumer.access_token_url : consumer.access_token_path),
                                  request_token,
                                  {},
                                  :oauth_verifier =>  oauth_verifier.chomp)
access_token = OAuth::AccessToken.new(consumer,response[:oauth_token],response[:oauth_token_secret])

oauth_yml = <<-EOT
consumer:
  key: #{options[:key]}
  secret: #{options[:secret]}
access:
  token: #{access_token.token}
  secret: #{access_token.secret}
api:
  debug: true
  endpoint: http://#{response['domain']}
  domain: #{response['domain']}
  user_id: #{response['user_id']}
  oauth: #{VP_OAUTH}
EOT

File.open(options[:outfile], "w") do |f|
  f.write oauth_yml
end
