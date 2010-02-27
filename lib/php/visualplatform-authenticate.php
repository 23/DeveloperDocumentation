#!/usr/bin/env php
<?

# Instructions:
#
# Register your application by following the instruction on 
#   http://community.23video.com/api/
#
# Call the script with your key and secret:
#  ./visualplatform-authenticate.php <consumer_key> <consumer_secret>
#
# Upon successful authentication, you'll get a visualplatform.config.php
# file with your OAuth credentials


// Get key/token from args
$args = $_SERVER['argv'];
$consumer_key = $args[1];
$consumer_secret = $args[2];
$domain = "api.visualplatform.net";


// Load dependencies
include_once 'HTTP/OAuth/Consumer.php';
require_once 'HTTP/OAuth.php';
require_once 'HTTP/OAuth/Consumer/Request.php';
require_once 'HTTP/Request2.php';

// Set up HTTP request
$httpRequest = new HTTP_Request2;
$httpRequest->setHeader('Accept-Encoding', '.*');
$request = new HTTP_OAuth_Consumer_Request;
$request->accept($httpRequest);

// Set up OAuth consumer
$consumer = new HTTP_OAuth_Consumer($consumer_key, $consumer_secret);
$consumer->accept($request);

// 1. Get request token
$consumer->getRequestToken("http://".$domain."/oauth/request_token", "oob", array(), "GET");

// 2. Build authorize url and redirect the user
$authorize_url = $consumer->getAuthorizeUrl("http://".$domain."/oauth/authorize");
echo("Please visit the following URL in your browser to authorize your application, then enter the 4 character security code when done:\n\n  " . $authorize_url . "\n\nVerification code: ");

// 3. Get an OAuth verifier (this step is only necessary when a callback url hasn't been specified)
$handle = @fopen("php://stdin", "r");
$oauth_verifier = trim(fgets($handle));
fclose($handle);

// 4. Exchange the request token for an access token
//    (He're we're reading extra data from the access token request to 
//    determine the domain and user_id of the authenticated user. 
//    Unfortunately this PHP OAuth library doesn't return the excess
//    data from the access token request, so we'll need to handle the
//    request manually.)

$response = $consumer->sendRequest("http://".$domain."/oauth/access_token", array("oauth_verifier" => $oauth_verifier), "GET");
$data     = $response->getDataFromBody();

if (empty($data['oauth_token']) || empty($data['oauth_token_secret'])) {
    throw new HTTP_OAuth_Consumer_Exception_InvalidResponse(
       'Failed getting token and token secret from response', $response
    );
}

$consumer->setToken($data['oauth_token']);
$consumer->setTokenSecret($data['oauth_token_secret']);


// 5. Save credentials to config file
$handle = @fopen("visualplatform.config.php", "w");
$_conf = array(
                'domain'       => $data['domain'],
                'user_id'      => $data['user_id'],
                'key'          => $consumer->getKey(),
                'secret'       => $consumer->getSecret(),
                'token'        => $consumer->getToken(),
                'token_secret' => $consumer->getTokenSecret()
        );
fwrite($handle, '<? $visualplatform_config = unserialize(\'' . serialize($_conf) . '\'); ?>');
fclose($handle);



?>
