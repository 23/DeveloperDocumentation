#!/usr/bin/env php
<?

# Instructions:
#
# Requires preauthentication through visualplatform-authenticate.php
#
# Call the script:
#  ./visualplatform-command.php <endpoint> <param1> <value1> <param2> <value2>
#
# For example
#  ./visualplatform-command.php /api/echo iam here title "My title"
#
# This sample also shows how to build multipart requests and upload
# files to 23 Video through PHP.

require('visualplatform.config.php');

// Get key/token from args
$args = $_SERVER['argv'];
$endpoint = $args[1];

$i = 2;
$params = array();
while ($i<sizeof($args)) {
  $k = $args[$i];
  $v = $args[$i+1];
  $params[$k] = $v;
  $i += 2;
}

// Add in the option of outputting php
if (!isset($params['format'])) {
  $params['format'] = 'xml';
}
if ($params['format']=='php') {
   $output_php_p = true;
   $params['format'] = 'json';
   $params['raw'] = '1';
} else {
   $output_php_p = false;
}

// Load dependencies
include_once 'HTTP/OAuth/Consumer.php';
require_once 'HTTP/OAuth.php';
require_once 'HTTP/OAuth/Consumer/Request.php';
require_once 'HTTP/Request2.php';

// Set up HTTP request
$httpRequest = new HTTP_Request2;
//print_r($httpRequest->addUpload('file', '/tmp/x.png'));
$httpRequest->setHeader('Accept-Encoding', '.*');
//$httpRequest->setParameters($params); 
$request = new HTTP_OAuth_Consumer_Request;
$request->accept($httpRequest);

// Set up OAuth consumer
$consumer = new HTTP_OAuth_Consumer($visualplatform_config['key'], $visualplatform_config['secret'], $visualplatform_config['token'], $visualplatform_config['token_secret']);
$consumer->accept($request);

// Make request
$response = $consumer->sendRequest("http://" . $visualplatform_config['domain'] . $endpoint, $params, "POST");
$data = $response->getBody();

if ( !$output_php_p ) {
  print($data);
} else {
  print_r(json_decode($data));
}

?>
