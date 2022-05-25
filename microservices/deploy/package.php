<?php

// verify auth
if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
    // do something
} else {
    header('HTTP/1.0 401 Unauthorized');
    echo 'Unauthorized';
    exit;
}

// copy uploaded file to public/uploads
$target_dir = realpath(__DIR__ . "/../") . '/';
$name = basename($_FILES["file"]["name"]);
$source_file = $target_dir . $name;

// Allow only zip files
if (pathinfo($source_file, PATHINFO_EXTENSION) != "zip") {
    echo "Sorry, only zip files are allowed.";
    exit;
}

if (move_uploaded_file($_FILES["file"]["tmp_name"], $source_file)) {
    // unpack zip file
    $zip = new ZipArchive;
    $res = $zip->open($source_file);
    if ($res === true) {
        $zip->extractTo($target_dir . basename($name, ".zip"));
        $zip->close();
        unlink($source_file);
    } else {
        echo "Sorry, there was an error unzipping the file.";
    }
} else {
    echo "Sorry, there was an error uploading your file.";
}

return [
    'status' => 'success',
];
