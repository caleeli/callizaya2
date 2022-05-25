<?php

use ReallySimpleJWT\Token;

require __DIR__ . '/vendor/autoload.php';

// Prompt secret
echo 'Enter secret: ';
$secret = trim(fgets(STDIN));
echo 'Enter json data: ';
$data = trim(fgets(STDIN));

$token = Token::customPayload(json_decode($data, true), $secret);

echo "\n{$token}\n";