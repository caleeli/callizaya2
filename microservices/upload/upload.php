<?php
$upload_dir = __DIR__ . '/../../storage/';

// Crear el directorio si no existe
if (!file_exists($upload_dir)) {
    throw new Exception("El directorio de almacenamiento no existe. $upload_dir");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['archivo'])) {
    $file = $_FILES['archivo'];
    $filename = basename($file['name']);
    $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    // ⚠️ Filtrar archivos .php
    if ($extension === 'php') {
        http_response_code(400);
        echo "Error: archivos .php no están permitidos por seguridad.";
        exit;
    }

    $target = $upload_dir . $filename;

    if (move_uploaded_file($file['tmp_name'], $target)) {
        $server = $_SERVER['HTTP_HOST'];
        $url = $server . '/storage/' . $filename;
        echo "✅ Archivo recibido y guardado como: $filename";
    } else {
        echo "❌ Error al mover el archivo";
    }
} else {
    echo "⚠️ No se recibió ningún archivo válido";
}
