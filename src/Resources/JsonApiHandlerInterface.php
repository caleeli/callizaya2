<?php

namespace App\Resources;

interface JsonApiHandlerInterface
{
    public function index(string $query, array $params);

    public function show(string $query, array $params);

    public function store(string $query, array $params);

    public function update(string $query, array $params);

    public function delete(string $query, array $params);
}
