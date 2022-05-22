<?php

namespace App\Resources;

use PDO;

class JsonApiHandler implements JsonApiHandlerInterface
{
    /**
     * @var PDO
     */
    protected $connection;

    public function __construct(PDO $connection)
    {
        $GLOBALS['connection'] = $connection;
        $this->connection = $connection;
    }

    public function getConnection() : PDO
    {
        return $this->connection;
    }

    public function index(string $query, array $params)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);
        $exams = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $exams;
    }

    public function show(string $query, array $params)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);
        $stmt->execute();
        $exam = $stmt->fetch();
        return $exam;
    }

    public function store(string $query, array $params)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);
        $stmt->execute();
        return [
            'id' => $this->connection->lastInsertId(),
        ];
    }

    public function update(string $query, array $params)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);
        $stmt->execute();
        return [
            'id' => $params['id'],
        ];
    }

    public function delete(string $query, array $params)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);
        $stmt->execute();
        return [
            'id' => $params['id'],
        ];
    }
}
