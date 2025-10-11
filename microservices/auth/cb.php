<?php

/**
 * Google OAuth 2.0 callback
 */

use Google\Client;
use Google\Service\Oauth2;

header('Content-Type: text/html');

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

// Get a Google Client from the token and scopes
$client = Auth::googleClient($token, ['openid', 'email', 'profile']);

// Get user email and profile info
$oauth2 = new Oauth2($client);
$userInfo = $oauth2->userinfo->get();

$jwt = Auth::create_token([
    'email' => $userInfo->email,
    'name' => $userInfo->name,
    'picture' => $userInfo->picture,
    'token' => $token,
]);

?>
<script>
    // For debugging purposes display the token and JWT
    console.log('User Info:', <?php echo json_encode($userInfo); ?>);
    console.log('JWT:', <?php echo json_encode($jwt); ?>);
    // Sent message to opener window and close this popup
    if (window.opener) {
        window.opener.postMessage({ user: <?php echo json_encode($userInfo); ?>, jwt: <?php echo json_encode($jwt); ?> }, '*');
        window.close();
    }
</script>
<?php

return '';
