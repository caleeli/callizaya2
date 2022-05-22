<?php

namespace App\Expressions;

use Exception;
use Throwable;

final class Expression implements ExpressionInterface
{
    private $expression;
    private $request;

    public function __construct(string $expression, $request)
    {
        $this->expression = $expression;
        $this->request = $request;
    }

    public function evaluate(array $variables = [])
    {
        set_error_handler(function ($errno, $errstr) {
            throw new Exception($errstr . ' in expression: ' . $this->expression, $errno);
        });
        try {
            extract($variables);
            $_request = $this->request;
            if (!empty($_SESSION['user_id'])) {
                $_user_id = $_SESSION['user_id'];
            }
            $result = eval('return ' . $this->expression . ';');
            restore_error_handler();
            return $result;
        } catch (Throwable $err) {
            restore_error_handler();
            throw new Exception($err->getMessage() .' in ' . $this->expression, $err->getCode(), $err);
        }
    }

    public function hasRequiredParams(array $params):bool
    {
        // parse php tokens of $this->expression
        $tokens = token_get_all('<?php ' . $this->expression);
        // check if all $variables are in $params
        foreach ($tokens as $token) {
            if (is_array($token) && $token[0] === T_VARIABLE) {
                $variable = substr($token[1], 1);
                if (!isset($params[$variable])) {
                    return false;
                }
            }
        }
        return true;
    }
}
