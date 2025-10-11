<?php

/**
 * Google OAuth 2.0 auth url 
 */

use Google\Client;

$base = dirname($_SERVER['SCRIPT_URI']);

$configJsonPath = realpath(getenv('GOOGLE_APPLICATION_CREDENTIALS'));
$client = new Client();
$client->setAuthConfig($configJsonPath);
$client->useApplicationDefaultCredentials();
$client->setRedirectUri($base . '/auth/cb');
$client->setScopes(['openid', 'email', 'profile']);

// with refresh_token
$client->setAccessType('offline');

$auth_url = $client->createAuthUrl();
header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
