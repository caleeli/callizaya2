<?php

use App\Resources\JsonApiResource;
use ReallySimpleJWT\Token;

final class Auth
{
    private static $secret;
    private static $config = [];

    public static function init($config_file)
    {
        self::$secret = getenv('SECRET');
        putenv('SECRET=');
        unset($_SERVER['SECRET']);
        if (file_exists($config_file)) {
            self::$config = json_decode(file_get_contents($config_file), true);
        }
    }

    /**
     * Create a JWT token
     * @param  array $data
     *
     * @return string
     */
    public static function create_token($data)
    {
        $token = Token::customPayload($data, self::$secret);
        return $token;
    }

    /**
     * Validate a JWT token
     *
     * @param  string $token
     * @param  array  $data
     * @return bool
     */
    public static function validate_token($token)
    {
        $token = Token::validate($token, self::$secret);
        return $token;
    }

    /**
     * Get payload from JWT token
     *
     * @param  string $token
     * @return array
     */
    public static function payload_token($token)
    {
        return Token::getPayload($token, self::$secret);
    }

    public static function run($microservice, array $path_params)
    {
        if (isset(self::$config['authorization']) && self::$config['authorization'] === 'bearer_token') {
            $token = substr($_SERVER['HTTP_AUTHORIZATION'], 7);
            $valid = self::validate_token($token);
            if (!$valid) {
                header('HTTP/1.0 401 Unauthorized');
                exit;
            }
            $_SESSION = self::payload_token($token);
        }
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
        chdir(dirname($microservice));
        $response = require $microservice;
        if (!empty(self::$config['transform_response'])) {
            $response = self::transform_response($response, $path_params);
        }
        echo json_encode($response);
    }

    private static function transform_response($response, array $path_params)
    {
        foreach (self::$config['transform_response'] as $params) {
            $action = $params['action'];
            $condition = $params['condition'] ?? false;
            if ($condition) {
                if (!self::evaluate_condition($response, $condition)) {
                    continue;
                }
            }
            if (method_exists(__CLASS__, $action)) {
                $response = call_user_func_array([__CLASS__, $action], [$response, $params, $path_params]);
            }
        }
        return $response;
    }

    private static function jwt_token($response, $params)
    {
        $payload = self::dot_notation_get($response, $params['target']);
        $token = self::create_token($payload);
        $response = self::dot_notation_set($response, $params['target'], $token);
        return $response;
    }

    private static function json_api($response, $params, array $path_params)
    {
        $resource = new JsonApiResource($response, $params);
        return $resource->run($path_params);
    }

    private static function evaluate_condition($response, $condition)
    {
        try {
            $value = self::dot_notation_get($response, $condition);
            return $value;
        } catch (Exception $e) {
            return false;
        }
    }

    private static function dot_notation_get($response, $target)
    {
        $targets = explode('.', $target);
        $value = $response;
        $valueRef = "response";
        foreach ($targets as $target) {
            if (is_array($value)) {
                if (isset($value[$target])) {
                    $value = $value[$target];
                } else {
                    throw new Exception("Cannot read property '$target' of '$valueRef'");
                }
            } else {
                $value = $value->{$target};
            }
            $valueRef .= '.' . $target;
        }
        return $value;
    }

    private static function dot_notation_set($response, $target, $new_value)
    {
        $targets = explode('.', $target);
        $value = &$response;
        foreach ($targets as $target) {
            if (is_array($value)) {
                $value = &$value[$target];
            } else {
                $value = &$value->$target;
            }
        }
        $value = $new_value;
        return $response;
    }
}
