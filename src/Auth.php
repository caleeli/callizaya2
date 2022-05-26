<?php

use App\Resources\JsonApiResource;
use PHPMailer\PHPMailer\PHPMailer;
use ReallySimpleJWT\Token;

final class Auth
{
    private static $secret;
    private static $config = [];
    private static $env = [];

    public static function init($config_file)
    {
        chdir(dirname($config_file));
        if (file_exists('.env')) {
            self::$env = parse_ini_file('.env');
            foreach (self::$env as $key => $value) {
                $_ENV[$key] = $value;
            }
        }
        self::$secret = getenv('SECRET');
        $_ENV['md5_secret'] = md5(self::$secret);
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
                http_response_code(401);
                exit;
            }
            $_SESSION = self::payload_token($token);
        }
        if (!file_exists($microservice)) {
            http_response_code(404);
            exit;
        }
        http_response_code(200);
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Allow-Methods: GET,POST,PUT,DELETE');
        header('Access-Control-Allow-Headers: Content-Type,Authorization,X-Requested-With');
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

    private static function fe_encrypt($response)
    {
        $plain_text = json_encode($response);
        $salt = openssl_random_pseudo_bytes(256);
        $iv = openssl_random_pseudo_bytes(16);
        $iterations = 999;
        $key = hash_pbkdf2("sha512", $_ENV['fe_secret'], $salt, $iterations, 64);
        $encrypted_data = openssl_encrypt($plain_text, 'aes-256-cbc', hex2bin($key), OPENSSL_RAW_DATA, $iv);
        $data = ["cipher" => base64_encode($encrypted_data), "iv" => bin2hex($iv), "salt" => bin2hex($salt)];

        return $data;
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

    public static function send_mail($to, $subject, $body, $from = null)
    {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = self::$env['SMTP_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = self::$env['SMTP_USER'];
        $mail->Password = self::$env['SMTP_PASS'];
        $mail->SMTPSecure = self::$env['SMTP_SECURE'];
        $mail->Port = self::$env['SMTP_PORT'];
        $mail->setFrom($from ?: self::$env['SMTP_FROM'], self::$env['SMTP_FROM_NAME']);
        $mail->addAddress($to);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->send();
    }
}
