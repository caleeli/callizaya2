<?php

$path = explode('/', $_SERVER['PATH_INFO']);
$base = '';
for ($i=1,$l=count($path);$i<$l;$i++) {
    if ($path[$i] === '...') {
        // abort 404
        header('HTTP/1.0 404 Not Found');
        exit;
    }
    $base .= '/'.$path[$i];
}

// IF IS POST GET BODY
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $body = file_get_contents('php://input');
    $body = json_decode($body, true);
}

$microservice = __DIR__ . '/../microservices' . $base . '.php';

if (!file_exists($microservice)) {
    header('HTTP/1.0 404 Not Found');
    exit;
}

header('HTTP/1.0 200 OK');
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET,POST,PUT,DELETE');
header('Access-Control-Allow-Headers: Content-Type,Authorization,X-Requested-With');

$response = require $microservice;

echo json_encode($response);
