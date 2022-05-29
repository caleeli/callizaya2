<?php

namespace App\Resources;

use PDO;

interface JsonApiHandlerInterface
{
    public function getConnection() : PDO;

    public function indexing(array $options);

    public function showing(string $id, array $options);

    public function storing(array $data);

    public function updating(string $id, array $data);

    public function deleting(string $id);

    public function index(string $query, array $params);

    public function show(string $query, array $params);

    public function store(string $query, array $params);

    public function update(string $query, array $params);

    public function delete(string $query, array $params);
}
