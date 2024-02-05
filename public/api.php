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
$_PATH = $path_params;

if (!isset($_SERVER['SCRIPT_URI'])) {
    $_SERVER['SCRIPT_URI'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https://' : 'http://').$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    $pos = strrpos($_SERVER['SCRIPT_URI'], '/');
    if ($pos!==false) {
        $_SERVER['SCRIPT_URI'] = substr($_SERVER['SCRIPT_URI'], 0, $pos+1);
    }
}

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
if (($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'PUT') && isset($_SERVER['CONTENT_TYPE']) && $_SERVER['CONTENT_TYPE'] === 'application/json') {
    $body = file_get_contents('php://input');
    $_POST = json_decode($body, true);
}

require __DIR__ . '/../vendor/autoload.php';
$microservice = __DIR__ . '/../microservices' . $base . '.php';
$config = __DIR__ . '/../microservices' . $base . '.json';

// set_error_handler to throw exceptions
set_error_handler(function ($errno, $errstr, $err_file, $err_line) {
    throw new ErrorException($errstr, $errno, 0, $err_file, $err_line);
});

try {
    Auth::init($config);
    Auth::run($microservice, $path_params);
} catch (Exception $e) {
    if ($e->getCode() >= 401 && $e->getCode() < 500) {
        http_response_code($e->getCode());
    } else {
        http_response_code(500);
    }
    error_log($e);
    if (!headers_sent()) {
        header('Content-Type: application/json');
    }
    $response = [
        'error' => $e->getMessage(),
        'trace' => $e->getTraceAsString(),
    ];
    if (isset($e->meta)) {
        $response['meta'] = $e->meta;
    }
    echo json_encode($response);
    exit;
}
