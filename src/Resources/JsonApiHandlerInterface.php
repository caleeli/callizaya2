<?php

namespace App\Resources;

use PDO;

interface JsonApiHandlerInterface
{
    public function getConnection() : PDO;

    public function index(string $query, array $params);

    public function show(string $query, array $params);

    public function store(string $query, array $params);

    public function update(string $query, array $params);

    public function delete(string $query, array $params);
}
