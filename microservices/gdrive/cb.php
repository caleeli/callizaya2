<?php

/**
 * Google OAuth 2.0 callback
 */

use Google\Client;
use Google\Service\Drive;

$base = dirname($_SERVER['SCRIPT_URI']);

$configJsonPath = realpath(getenv('GOOGLE_APPLICATION_CREDENTIALS'));
$client = new Client();
$client->setAuthConfig($configJsonPath);
$client->useApplicationDefaultCredentials();
$client->setRedirectUri($base . '/cb');
$client->addScope(Drive::DRIVE);

$response = $client->fetchAccessTokenWithAuthCode($_GET['code']);
$token = $client->getAccessToken();
if (!$token) {
    http_response_code(401);
    print_r($response);
    exit;
}
$token = json_encode($token);
file_put_contents('token.json', $token);
