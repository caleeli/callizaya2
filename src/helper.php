<?php

use App\Resources\JsonApiHandler;
use App\Resources\JsonApiResource;

/**
 * Get session from request
 */
function session($request, $token = null)
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
