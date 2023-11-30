<?php

$upload = upload([
    'field' => 'file',
    'allowed' => ['jpg', 'jpeg', 'png', 'webp', 'zip', 'gz', 'tar', 'tar.gz'],
    'max_file_size' => 100 * 1024 * 1024,
]);

return [
    'data' => [
        'attributes' => [
            'url' => $upload['url'],
            'filename' => $upload['filename'],
        ],
    ],
];
