<?php

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
