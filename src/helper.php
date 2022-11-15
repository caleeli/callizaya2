<?php

use App\Resources\JsonApiHandler;
use App\Resources\JsonApiResource;

/**
 * Get session from request
 */
function session()
{
    return (object) $_SESSION;
}

/**
 * Get a resource model
 *
 * @param string $model
 * @param PDO $connection
 *
 * @return JsonApiResource|EndpointResource
 */
function model($model)
{
    global $connection;
    if (class_exists($model)) {
        return new JsonApiResource($model, [
            'action' => 'json_api',
        ]);
    }
    $handler = new JsonApiHandler($connection);
    $service_config = json_decode(file_get_contents('./' . $model . '.json'), true);
    // find json_api in transform_response
    $model_config = null;
    foreach ($service_config['transform_response'] as $model_config) {
        if ($model_config['action'] === 'json_api') {
            break;
        }
    }
    if (!$model_config) {
        throw new Exception('No json_api for ".$model." in transform_response');
    }
    return new JsonApiResource($handler, $model_config);
}

/**
 * Upload and process a file
 * @param string $options
 *
 * @return string
 */
function upload($options)
{
    $field = $options['field'] ?? 'file';
    $path = $options['path'] ?? '';
    $allowed = $options['allowed'] ?? ['jpg', 'jpeg', 'png'];
    $max_file_size = $options['max_file_size'] ?? 10485760;
    $convert = $options['convert'] ?? null;
    // trim path
    $path = trim($path, '/');
    $storage_path = __DIR__ . '/../public/storage/' . ($path ? $path . '/' : '');
    if ($_ENV['STORAGE_PATH']) {
        $storage_path = $_ENV['STORAGE_PATH'] . '/' . ($path ? $path . '/' : '');
    }
    if (!isset($_FILES[$field])) {
        throw new Exception('No file uploaded to field "' . $field . '"');
    }
    $file = $_FILES[$field];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));
    if (in_array($file_ext, $allowed)) {
        if ($file_error === 0) {
            if ($file_size <= $max_file_size) {
                if ($convert && $convert['to'] === 'jpg') {
                    convert_jpg($file_tmp, $convert['quality'] ?? 80, $convert['max_width'] ?? null, $convert['max_height'] ?? null);
                    $file_ext = 'jpg';
                }
                $file_name_new = uniqid('', true) . '.' . $file_ext;
                $file_destination = $storage_path . $file_name_new;
                if (move_uploaded_file($file_tmp, $file_destination)) {
                    $base_url = $_ENV['BASE_URL'] ?? explode('/api.php/', $_SERVER['SCRIPT_URI'], 2)[0];
                    return [
                        'path' => $file_name_new,
                        'filename' => $file_name,
                        'url' => $base_url . '/storage/' . ($path ? $path . '/' : '') . $file_name_new,
                        'filepath' => $file_destination,
                    ];
                }
            } else {
                throw new Exception('File is too big');
            }
        } else {
            throw new Exception('File upload error');
        }
    } else {
        throw new Exception('File extension not allowed');
    }
    return false;
}

function convert_jpg($path, $quality=100, $max_width = null, $max_height = null)
{
    $image_format = exif_imagetype($path);
    if ($image_format === IMAGETYPE_JPEG) {
        $image = imagecreatefromjpeg($path);
    } elseif ($image_format === IMAGETYPE_PNG) {
        $image = imagecreatefrompng($path);
    } elseif ($image_format === IMAGETYPE_GIF) {
        $image = imagecreatefromgif($path);
    } elseif ($image_format === IMAGETYPE_BMP) {
        $image = imagecreatefrombmp($path);
    } elseif ($image_format === IMAGETYPE_WEBP) {
        $image = imagecreatefromwebp($path);
    } else {
        throw new Exception('Unsupported image format');
    }
    $image_width = imagesx($image);
    $image_height = imagesy($image);
    $image_ratio = $image_width / $image_height;
    if ($max_width && $max_height) {
        $max_ratio = $max_width / $max_height;
        if ($image_ratio > $max_ratio) {
            $new_width = $max_width;
            $new_height = $max_width / $image_ratio;
        } else {
            $new_width = $max_height * $image_ratio;
            $new_height = $max_height;
        }
    } elseif ($max_width) {
        $new_width = $max_width;
        $new_height = $max_width / $image_ratio;
    } elseif ($max_height) {
        $new_width = $max_height * $image_ratio;
        $new_height = $max_height;
    } else {
        $new_width = $image_width;
        $new_height = $image_height;
    }
    $new_image = imagecreatetruecolor($new_width, $new_height);
    imagecopyresampled($new_image, $image, 0, 0, 0, 0, $new_width, $new_height, $image_width, $image_height);
    imagejpeg($new_image, $path, $quality);
    imagedestroy($image);
    imagedestroy($new_image);
}

function send_email($to, $subject, $body, $from = null)
{
    return Auth::send_mail($to, $subject, $body, $from);
}

function view(string $path, array $data): string
{
    ob_start();
    extract($data);
    include $path;
    return ob_get_clean();
}
