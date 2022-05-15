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
