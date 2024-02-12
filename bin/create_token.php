#!/usr/bin/env php
<?php

require __DIR__ . '/../vendor/autoload.php';

$data = [];
for ($i = 1; $i < $argc; $i++) {
    $parts = explode('=', $argv[$i]);
    $data[$parts[0]] = $parts[1];
}

Auth::init(__DIR__ . '/../.env');
$token = Auth::create_token($data);

echo $token . "\n";
