#!/usr/bin/env php
<?php

if (empty($argv[1]) || empty($argv[2])) {
    echo "Usage: php deploy.php <path to microservices folder> <microservice name>\n";
    exit;
}

$folder = realpath($argv[1]);
if (!$folder) {
    echo "Folder not found\n";
    exit;
}
$zip_file = $argv[2] . '.zip';

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
        $zip->addFile($filePath, $relativePath);
    }
}

// Zip archive will be created only after closing object
$zip->close();

echo 'zipped folder: ' . $zip_file;
