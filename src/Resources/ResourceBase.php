<?php

namespace App\Resources;

use App\Expressions\Expression;
use App\Expressions\QueryExpression;
use PDO;
use Workerman\Protocols\Http\Request;

abstract class ResourceBase
{
    /**
     * @var array
     */
    protected $definition = [];

    /**
     * @var Request
     */
    private $request;

    /**
     * @var JsonApiHandlerInterface
     */
    protected $handler;

    public function __construct($handler, $params)
    {
        if (is_string($handler)) {
            $GLOBALS['connection'] = $this->getConnection();
            $this->handler = new PDOResource($GLOBALS['connection'], new $handler($GLOBALS['connection']));
            $this->definition = $this->handler->getDefinition();
        } else {
            $this->handler = is_string($handler) ? new $handler($params) : $handler;
            $GLOBALS['connection'] = method_exists($handler, 'getConnection') ? $handler->getConnection() : $this->getConnection();
            if (isset($params['definition'])) {
                $this->definition = json_decode(file_get_contents($params['definition']), true);
                $this->definition['name'] = $this->definition['name'] ?? basename($params['definition'], '.json');
            }
        }
    }

    public function getConnection()
    {
        if (empty($_ENV['DB_CONNECTION'])) {
            return null;
        }
        if (isset($_ENV['DB_USER'])) {
            return new PDO($_ENV['DB_CONNECTION'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
        } else {
            return new PDO($_ENV['DB_CONNECTION']);
        }
    }

    /**
     * Evaluates the expression and returns the result.
     * 
     * @param string $expression e.g. $variable > 5
     * @param array $variables e.g. ['variable' => 10]
     * @return mixed
     */
    protected function evaluate($expression, array $variables = [])
    {
        $expression = new Expression($expression, $this->request);
        return $expression->evaluate($variables);
    }

    /**
     * Parse and replace the ${expressions} in the query
     *
     * @param string $query ex. where cost = ${$cost*100}
     * @param array $params ex. ['cost' => 100]
     *
     * @return string ex. where cost = :var_1234 and the value of $params['var_1234'] is 10000
     */
    protected function parseExpressionsInQuery($string, array &$params)
    {
        $expression = new QueryExpression($string, $this->request);
        $newVariables = $expression->evaluate($params);
        $params = array_merge($params, $newVariables);
        $sql = $expression->preparedExpression();
        // Convert array params to [name.0,name.1,...]
        foreach ($params as $key => $value) {
            if (is_array($value)) {
                $var = preg_quote(':' . $key);
                $sql = preg_replace_callback('/('.$var.')\b(.?)/', function ($matches) use (&$params, $value) {
                    if ($matches[2] === '.') {
                        return $matches[1] . '.';
                    } else {
                        $exp = [];
                        foreach ($value as $index => $val) {
                            $exp[] = $matches[1] . '.' . $index;
                        }
                        return '[' . implode(',', $exp) . ']' . $matches[2];
                    }
                }, $sql);
            }
        }
        return $sql;
    }

    protected function hasRequiredParams($string, array &$params)
    {
        $expression = new QueryExpression($string, $this->request);
        return $expression->hasRequiredParams($params);
    }

    protected function hasRequiredSQLParams($query, array $params)
    {
        preg_match_all('/:([a-zA-Z0-9_]+)/', $query, $matches);
        $variables = $matches[1];
        foreach ($variables as $variable) {
            if (!array_key_exists($variable, $params)) {
                return false;
            }
        }
        return true;
    }

    protected function model($model)
    {
        return model($model);
    }

    public function getDefinition()
    {
        return $this->definition;
    }

    private function log($msg)
    {
        $pid = getmypid();
        error_log("[$pid] $msg");
    }
}
