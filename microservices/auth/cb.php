<?php

/**
 * Google OAuth 2.0 callback
 */

use Google\Client;
use Google\Service\Oauth2;

$base = dirname($_SERVER['SCRIPT_URI']);

$configJsonPath = realpath(getenv('GOOGLE_APPLICATION_CREDENTIALS'));
$client = new Client();
$client->setAuthConfig($configJsonPath);
$client->useApplicationDefaultCredentials();
$client->setRedirectUri($base . '/auth/cb');

$response = $client->fetchAccessTokenWithAuthCode($_GET['code']);
$token = $client->getAccessToken();
if (!$token) {
    http_response_code(401);
    print_r($response);
    exit;
}

// Get user email and profile info
$oauth2 = new Oauth2($client);
$userInfo = $oauth2->userinfo->get();
$token['email'] = $userInfo->email;
$token['name'] = $userInfo->name;
$token['picture'] = $userInfo->picture;
$token['id'] = $userInfo->id;

$jwt = Auth::create_token($token);

return $token;
