<?php

namespace App\Resources;

use Exception;
use PDO;

class PDOResource
{
    /**
     * @var PDO
     */
    protected $connection;
    private $definition = [];
    private $handler;

    public function __construct(PDO $connection, $handler)
    {
        $this->connection = $connection;
        $this->definition = (array) $handler;
        $this->handler = $handler;
    }

    public function getConnection() : PDO
    {
        return $this->connection;
    }

    public function getDefinition() : array
    {
        return $this->definition;
    }

    public function indexing(array $options)
    {
        return $options;
    }

    public function showing(string $id, array $options)
    {
        return [$id, $options];
    }

    public function storing(array $data)
    {
        return $data;
    }

    public function updating(string $id, array $data)
    {
        return [$id, $data];
    }

    public function deleting(string $id)
    {
        return $id;
    }

    public function index(string $query, array $params)
    {
        $stmt = $this->connection->prepare($query);
        if (!$stmt) {
            throw new Exception('Failed to prepare statement: ' . $query);
        }
        $success = $stmt->execute($params);
        if (!$success) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception($errorInfo[2]);
        }
        $exams = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $exams;
    }

    public function show(string $query, array $params)
    {
        $stmt = $this->connection->prepare($query);
        if (!$stmt) {
            throw new Exception('Failed to prepare statement: ' . $query);
        }
        $success = $stmt->execute($params);
        if (!$success) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception($errorInfo[2]);
        }
        $exam = $stmt->fetch(PDO::FETCH_ASSOC);
        return $exam;
    }

    public function store(string $query, array $params)
    {
        $stmt = $this->connection->prepare($query);
        if (!$stmt) {
            throw new Exception('Failed to prepare statement: ' . $query);
        }
        $success = $stmt->execute($params);
        if (!$success) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception($errorInfo[2]);
        }
        return [
            'id' => $this->connection->lastInsertId(),
        ];
    }

    public function update(string $query, array $params)
    {
        $stmt = $this->connection->prepare($query);
        if (!$stmt) {
            throw new Exception('Failed to prepare statement: ' . $query);
        }
        $success = $stmt->execute($params);
        if (!$success) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception($errorInfo[2]);
        }
        return [
            'id' => $params['id'],
        ];
    }

    public function delete(string $query, array $params)
    {
        $stmt = $this->connection->prepare($query);
        if (!$stmt) {
            throw new Exception('Failed to prepare statement: ' . $query);
        }
        $success = $stmt->execute($params);
        if (!$success) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception($errorInfo[2]);
        }
        return [
            'id' => $params['id'],
        ];
    }
}
