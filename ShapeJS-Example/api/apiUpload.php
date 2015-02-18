<?php
require_once '../demoSettings.php';

/**
 * Uploads the provided model file to the Shapeways API.
 */

$modelFilePath = isset($_POST['modelFilePath']) ? $_POST['modelFilePath'] : NULL;
$modelFileName = isset($_POST['modelFileName']) ? $_POST['modelFileName'] : NULL;
$api_url_base = "http://api.shapeways.com";

if(!$modelFilePath || !$modelFileName) {
  echo "ERROR: no model file provided";
  exit(1);
}

try {
  $oauth = new Oauth(DemoSettings::CONSUMER_KEY, DemoSettings::CONSUMER_SECRET, OAUTH_SIG_METHOD_HMACSHA1, OAUTH_AUTH_TYPE_AUTHORIZATION);
  $oauth->enableDebug();
  $info = $oauth->getRequestToken(
    "$api_url_base/oauth1/request_token/v1",
    "oob"
  );
  $oauth->setToken(
    $info['oauth_token'],
    $info['oauth_token_secret']
  );
  $pin = readline("Pin: ");
  $info = $oauth->getAccessToken(
    "$api_url_base/oauth1/access_token/v1",
    null,
    $pin
  );
  $oauth->setToken(
  $info['oauth_token'] ,
  $info['oauth_token_secret']
  );
  //$oauth->setToken(DemoSettings::ACCESS_TOKEN, DemoSettings::ACCESS_SECRET);
} catch(OAuthException $exception) {
  echo "ERROR: Failed to set up Oauth session: " . $exception->getMessage();
}

try {  
  $file = file_get_contents($modelFilePath);
  $data = array("fileName" => $modelFileName,
                "file" => rawurlencode(base64_encode($file)),
                "hasRightsToModel" => 1,
                "acceptTermsAndConditions" => 1,
                );
  $dataString = json_encode($data);
  
  $oauth->fetch(DemoSettings::API_URL ."/models/v1", $dataString, OAUTH_HTTP_METHOD_POST);
  
  $response = $oauth->getLastResponse();
  echo $response;
} catch(OAuthException $exception) {
  echo "ERROR: Call to API failed: " . $exception->getMessage();
}