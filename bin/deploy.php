#!/usr/bin/env php
<?php

if (empty($argv[1]) || empty($argv[2]) || empty($argv[3]) || empty($argv[4])) {
    echo "Usage: php deploy.php <path to microservices folder> <microservice name> <server_base> <token>\n";
    exit;
}

$folder = realpath($argv[1]);
if (!$folder) {
    echo "Folder not found\n";
    exit;
}
$zip_file = $argv[2] . '.zip';

$server = $argv[3];
$token = $argv[4];

// zip path content
$zip = new ZipArchive;
$zip->open($zip_file, ZipArchive::CREATE | ZipArchive::OVERWRITE);
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($folder),
    RecursiveIteratorIterator::LEAVES_ONLY
);

foreach ($files as $name => $file) {
    // Skip directories (they would be added automatically)
    if (!$file->isDir()) {
        // Get real and relative path for current file
        $filePath = $file->getRealPath();
        $relativePath = substr($filePath, strlen($folder));
        // Add current file to archive
        if (substr(basename($filePath), 0, 1) !== '.') {
            $zip->addFile($filePath, $relativePath);
        }
    }
}

// Zip archive will be created only after closing object
$zip->close();

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => $server . '/api.php/deploy/package',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => ['file'=> new CURLFILE($zip_file)],
    CURLOPT_HTTPHEADER => [
        'Authorization: Bearer ' . $token,
    ],
]);

$response = curl_exec($curl);

curl_close($curl);
echo $response;

unlink($zip_file);
