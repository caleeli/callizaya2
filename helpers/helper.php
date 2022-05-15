<?php

function create_token()
{
    return bin2hex(openssl_random_pseudo_bytes(32));
}

function verify_token($token)
{
    static $tokens;
    if (!$tokens) {
        $tokens = getenv('TOKENS');
        putenv('TOKENS=');
    }
    if (!$tokens) {
        return false;
    }
    $valid= $token && (trim($token, '0..9A..Fa..f') == '');
    return $valid && file_exists("{$tokens}/{$token}");
}

/**
 * Verify Authorization header
 */
function verify_authentication()
{
    //$headers = get_headers($URL);
    $authorization = $_SERVER['HTTP_AUTHORIZATION'] ?? '';
    $bearer = explode(' ', $authorization);
    if (count($bearer) !== 2) {
        header('HTTP/1.0 401 Unauthorized');
        exit;
    }
    $token = $bearer[1];
    if (!verify_token($token)) {
        header('HTTP/1.0 401 Unauthorized');
        exit;
    }
}
