<?php

namespace App\Expressions;

use Exception;

final class QueryExpression implements QueryExpressionInterface
{
    private $expression;
    /**
     * @var Expression[]
     **/
    private $expressions = [];
    private $db_variables = [];

    public function __construct(string $expression, $request)
    {
        $expressions = [];
        $tag = self::OPEN_TAG;
        $tagLength = strlen($tag);
        $tagEnd = self::CLOSE_TAG;
        $tagEndLength = strlen($tagEnd);
        $tagPos = strpos($expression, $tag);
        while ($tagPos !== false) {
            $tagEndPos = strpos($expression, $tagEnd, $tagPos + $tagLength);
            if ($tagEndPos === false) {
                throw new Exception('Tag not closed: ' . $expression);
            }
            $tagContent = substr($expression, $tagPos + $tagLength, $tagEndPos - $tagPos - $tagLength);
            $newVariable = uniqid('var_');
            $expressions[$newVariable] = new Expression($tagContent, $request);
            $expression = substr_replace($expression, ':' . $newVariable, $tagPos, $tagEndPos + $tagEndLength - $tagPos);
            $tagPos = strpos($expression, $tag);
        }
        $this->expressions = $expressions;
        $this->expression = $expression;
        // get :db_variables from $expression
        preg_match_all('/:([a-zA-Z_][a-zA-Z0-9_]*)/', $expression, $matches);
        $this->db_variables = $matches[1];
    }

    public function evaluate(array $variables = [])
    {
        $newVariables = [];
        foreach ($this->expressions as $name => $expression) {
            $newVariables[$name] = $expression->evaluate($variables);
        }
        return $newVariables;
    }

    public function preparedExpression():string
    {
        return $this->expression;
    }

    public function hasRequiredParams(array $params):bool
    {
        // check expressions variables ${$variable}
        foreach ($this->expressions as $name => $expression) {
            if (!$expression->hasRequiredParams($params)) {
                return false;
            }
        }
        // check db_variables :variable
        foreach ($this->db_variables as $variable) {
            if (!isset($params[$variable]) && !isset($this->expressions[$variable])) {
                return false;
            }
        }
        return true;
    }
}
