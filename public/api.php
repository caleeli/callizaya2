<?php

if (!isset($_SERVER['PATH_INFO'])) {
    // abort 404
    http_response_code(404);
    exit;
}

$path = explode('/', $_SERVER['PATH_INFO']);
for ($i=0,$l=count($path);$i<$l;$i++) {
    if ($path[$i] === '...') {
        // abort 404
        http_response_code(404);
        exit;
    }
}
$path_params = array_slice($path, 2);
$base = '/'.$path[1].'/'.$path[2];

// IF IS POST GET BODY
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Allow-Methods: GET,POST,PUT,DELETE');
    header('Access-Control-Allow-Headers: Content-Type,Authorization,X-Requested-With');
    return;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'PUT') {
    $body = file_get_contents('php://input');
    $_POST = json_decode($body, true);
}

require __DIR__ . '/../vendor/autoload.php';
$microservice = __DIR__ . '/../microservices' . $base . '.php';
$config = __DIR__ . '/../microservices' . $base . '.json';

Auth::init($config);
Auth::run($microservice, $path_params);
