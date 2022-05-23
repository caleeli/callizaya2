<?php

namespace App\Resources;

use App\Expressions\Expression;
use App\Expressions\QueryExpression;
use Exception;
use PDOStatement;
use Workerman\Protocols\Http\Request;

abstract class ResourceBase
{
    /**
     * @var array
     */
    protected $definition;

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
        $this->handler = $handler;
        $GLOBALS['connection'] = $handler->getConnection();
        $this->definition = json_decode(file_get_contents($params['definition']), true);
    }

    /**
     * Execute a query, and return the statement
     *
     * Also removes the unused parameters from the $params array
     *
     * @param string $query
     * @param array $options
     *
     * @return PDOStatement
     */
    protected function query($query, array $params = [])
    {
        try {
            // Find :variable in $query
            $matches = [];
            preg_match_all('/:([a-zA-Z0-9_]+)/', $query, $matches);
            $variables = $matches[1];
            // Filter params by $variables
            $params = array_filter($params, function ($key) use ($variables) {
                return in_array($key, $variables);
            }, ARRAY_FILTER_USE_KEY);

            // $this->log($query . ': ' . json_encode($params));
            $statement = $this->connection->prepare($query);
            $success = $statement->execute($params);
            if (!$success) {
                $errorInfo = $statement->errorInfo();
                error_log(json_encode($errorInfo));
                throw new Exception($errorInfo[2], $errorInfo[0]);
            }
            return $statement;
        } catch (Exception $e) {
            $code = intval($e->getCode()) ?: 500;
            throw new Exception($e->getMessage() . ' in ' . $query, $code, $e);
        }
    }

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