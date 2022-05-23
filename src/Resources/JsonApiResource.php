<?php

namespace App\Resources;

use Exception;

class JsonApiResource extends ResourceBase implements JsonApiResourceInterface
{
    public $request;

    public function run(array $path_params)
    {
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                // if index
                if (count($path_params) === 1) {
                    $model = $path_params[0];
                    $options = $_GET;
                    $options['include'] = empty($options['include']) ? [] : explode(',', $options['include']);
                    $options['distinct'] = isset($options['distinct']) ? $options['distinct'] : false;
                    $fields = $options['fields'] ?? [];
                    if (!is_array($fields)) {
                        $fields = [$fields];
                    }
                    $options['fields'] = [];
                    foreach ($fields as $name => $field) {
                        if ($name === 0) {
                            $name = $model;
                        }
                        $options['fields'][$name] = explode(',', $field);
                    }
                    $options['sort'] = empty($options['sort']) ? [] : explode(',', $options['sort']);
                    $options['per_page'] = intval($options['per_page'] ?? 10);
                    $options['page'] = intval($options['page'] ?? 1);
                    return $this->index($options);
                } else {
                    $model = $path_params[0];
                    $id = $path_params[1];
                    $options = $_GET;
                    $options['include'] = !empty($options['include']) ? explode(',', $options['include']) : [];
                    return $this->show($id, $options);
                }
                break;
            case 'POST':
                return [
                    'data' => $this->store($_POST),
                ];
            case 'PUT':
                $id = $path_params[1];
                return [
                    'data' => $this->update($id, $_POST),
                ];
            case 'DELETE':
                $id = $path_params[1];
                return [
                    'data' => $this->delete($id),
                ];
        }
    }

    public function index(array $options = [])
    {
        list($query, $params) = $this->prepareQuery($options);
        return [
            'data' => $this->formatRows($this->handler->index($query, $params), $options),
        ];
    }

    public function show($id, array $options = [])
    {
        $options['params']['id'] = $id;
        list($query, $params) = $this->prepareQuery($options, true);
        $row = $this->handler->show($query, $params);
        if ($row === false) {
            throw new Exception('Not found', 404);
        }
        return [
            'data' => $this->formatRow($row, $options),
        ];
    }

    public function store(array $data)
    {
        $columns = [];
        $values = [];
        $params = $data['data']['attributes'];
        // get default values
        $defaults = $this->getDefaultValues();
        $params = array_merge($defaults, $params);
        foreach ($this->definition['create'] as $name => $value) {
            $columns[] = $name;
            $values[] = $this->parseExpressionsInQuery($value, $params);
        }
        $columns = implode(',', $columns);
        $values = implode(',', $values);
        if (isset($this->definition['events']) && isset($this->definition['events']['creating'])) {
            eval($this->definition['events']['creating']);
        }
        $table = $this->definition['table'] ?: $this->definition['name'];
        $sql = "INSERT INTO `{$table}` ({$columns}) VALUES ({$values})";
        return $this->handler->store($sql, $this->reduceParams($sql, $params));
    }

    private function getDefaultValues()
    {
        $defaults = [];
        foreach ($this->definition['ui'] as $name => $def) {
            if (isset($def['default'])) {
                $defaults[$name] = $def['default'];
            }
        }
        return $defaults;
    }

    public function update($id, array $data)
    {
        $set = [];
        if (!isset($data['data']) || !isset($data['data']['attributes'])) {
            throw new Exception('Invalid data, expected {data:{attributes:{...}}}', 400);
        }
        $params = $data['data']['attributes'];
        foreach ($this->definition['update'] as $name => $value) {
            if (!$this->hasRequiredParams($value, $params)) {
                continue;
            }
            if ($this->definition['ui'][$name]['type'] === 'json' && isset($params[$name])) {
                $params[$name] = json_encode($params[$name]);
            }
            $setAttribute = "$name = " . $this->parseExpressionsInQuery($value, $params);
            if ($this->hasRequiredSQLParams($setAttribute, $params)) {
                $set[] = $setAttribute;
            }
        }
        $set = implode(',', $set);
        $params['id'] = $id;
        $table = $this->definition['table'] ?: $this->definition['name'];
        $sql = "UPDATE `{$table}` SET {$set} WHERE {$this->definition['id']} = :id";
        return $this->handler->update($sql, $this->reduceParams($sql, $params));
    }

    public function delete($id)
    {
        $table = $this->definition['table'] ?: $this->definition['name'];
        $sql = "DELETE FROM `{$table}` WHERE {$this->definition['id']} = :id";
        return $this->handler->delete($sql, ['id' => $id]);
    }

    private function prepareQuery(array $options, $byId = false)
    {
        // params
        $params = $options['params'] ?? [];
        $fields = $options['fields'] ?? [];
        $fields = $fields[$this->definition['table']] ?? [];
        $distinct = empty($options['distinct']) ? '': 'DISTINCT';
        // Prepare the $from of the query
        $from = $this->definition['table'];
        if (isset($this->definition['join'])) {
            $from .= ' ' . $this->definition['join'];
        }
        // Prepare the $select of the query
        if (!$fields || in_array('id', $fields)) {
            $select = [
                $this->definition['id'] === 'id' ? 'id' : $this->definition['id'] . ' as id',
            ];
        }
        foreach ($this->definition['attributes'] as $name => $column) {
            if (!$fields || in_array($name, $fields)) {
                $select[] = $column === $name ? $name : $column . ' AS ' . $name;
            }
        }
        $select = implode(',', $select);
        // Prepare the $where of the query
        if ($byId) {
            $where = $this->definition['id'] . ' = :id';
            $order = '';
            $limit = '';
            $offset = '';
        } else {
            $where = [
                '1=1',
            ];
            foreach ($this->definition['where'] as $whereClause) {
                $where[] = $this->parseExpressionsInQuery($whereClause, $params);
            }
            if (isset($options['filter'])) {
                foreach ($options['filter'] as $filter) {
                    $where[] = $this->parseFilter($filter, $params);
                }
            }
            $where = implode(' ', $where);
            if (isset($options['sort']) && $options['sort']) {
                $order = 'ORDER BY ' . $this->parseSort($options['sort']);
            } else {
                $order = '';
            }
            if (isset($options['per_page'])) {
                $limit = 'LIMIT ' . $options['per_page'];
            } else {
                $limit = '';
            }
            if (isset($options['page'])) {
                $offset = 'OFFSET ' . ($options['page'] - 1) * $options['per_page'];
            } else {
                $offset = '';
            }
        }
        // Prepare the statement
        $query = "SELECT $distinct $select FROM $from WHERE $where $order $limit $offset";
        return [$query, $this->reduceParams($query, $params)];
    }

    /**
     * Reduce params to only the ones that are required by the query
     *
     * @param string $query
     * @param array $params
     *
     * @return array
     */
    private function reduceParams($query, array $params)
    {
        $matches = [];
        preg_match_all('/:([a-zA-Z0-9_]+)/', $query, $matches);
        $variables = $matches[1];
        // Filter params by $variables
        $params = array_filter($params, function ($key) use ($variables) {
            return in_array($key, $variables);
        }, ARRAY_FILTER_USE_KEY);
        return $params;
    }

    private function parseFilter(string $filter, array &$params)
    {
        list($filterName, $filterParamValues) = $this->explodeFilter($filter);
        foreach ($this->definition['filters'] as $defName => $expression) {
            list($name, $paramNames) = $this->explodeFilter($defName);
            if ($name === $filterName) {
                $paramValues = json_decode('[' . $filterParamValues . ']');
                if (!is_array($paramValues)) {
                    throw new Exception('Invalid filter parameters: ' . $filterParamValues);
                }
                $paramNames = $paramNames ? explode(',', $paramNames) : [];
                // prefix with filterName
                foreach ($paramNames as $i => $paramName) {
                    $paramNames[$i] = $filterName . '_' . $paramName;
                    $escapedVar = preg_quote($paramName, '/');
                    $expression = preg_replace('/\$' . $escapedVar . '\b/', '$' . $paramNames[$i], $expression);
                    $expression = preg_replace('/\:' . $escapedVar . '\b/', ':' . $paramNames[$i], $expression);
                }
                $filterParam = array_combine($paramNames, $paramValues);
                $params = array_merge($params, $filterParam);
                return $this->parseExpressionsInQuery($expression, $params);
            }
        }
        throw new Exception('Filter not found: ' . $filter);
    }

    /**
     * Parse JSON Api sort expressions into SQL
     *
     * sort=+field_1,-field_2
     * @param array $sort
     * @return string
     */
    private function parseSort(array $sort)
    {
        $sql = '';
        foreach ($sort as $sortItem) {
            // Parse (+/-)?field
            preg_match('/^([+-]?)(.*)$/', $sortItem, $matches);
            $direction = $matches[1] === '-' ? 'DESC' : 'ASC';
            $field = $matches[2];
            $sql .= $field . ' ' . $direction;
        }
        return $sql;
    }

    private function explodeFilter(string $filter)
    {
        $hasParams = substr($filter, -1) === ')';
        $firstParenthesis = strpos($filter, '(');
        if ($hasParams && !$firstParenthesis) {
            throw new Exception('Invalid filter: ' . $filter);
        }
        $filterName = $hasParams ? substr($filter, 0, $firstParenthesis) : $filter;
        $filterParams = '';
        if ($hasParams) {
            $filterParams = substr($filter, $firstParenthesis + 1, -1);
        }
        return [$filterName, $filterParams];
    }

    private function formatRow(array $row, array $options)
    {
        // convert json attributes to array
        foreach ($row as $name => $value) {
            if (isset($this->definition['ui'][$name]) && $this->definition['ui'][$name]['type'] === 'json' && is_string($value)) {
                $row[$name] = json_decode($value);
            }
        }
        $result = [
            'id' => $row['id'] ?? null,
            'type' => $this->definition['table'],
            'attributes' => $row,
            'relationships' => [],
        ];
        if (isset($options['include'])) {
            foreach ($options['include'] as $include) {
                $result['relationships'][$include] = $this->include($row, $include);
            }
        }
        return $result;
    }

    private function formatRows(array $rows, array $options)
    {
        $results = [];
        foreach ($rows as $row) {
            $results[] = $this->formatRow($row, $options);
        }
        return $results;
    }

    private function include(array $row, $include)
    {
        if (!isset($this->definition['relationships'][$include])) {
            throw new Exception('Relationship not found: ' . $include);
        }
        $relationship = $this->definition['relationships'][$include];
        if (isset($relationship['params'])) {
            // replace $column by $row[column] value
            foreach ($relationship['params'] as $column => $value) {
                if (substr($value, 0, 1) === '$') {
                    $relationship['params'][$column] = $row[substr($value, 1)];
                }
            }
        }
        $model = $this->model($relationship['model']);
        return $model->index($relationship);
    }
}
