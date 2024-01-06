<?php

namespace App\AI;

use Exception;

class Knowledge
{
    public function __construct(protected string $path)
    {
    }

    public function __get($name)
    {
        $filename = glob($this->path . "/{$name}.*")[0] ?? null;
        if (!$filename) {
            throw new Exception("{$name} not found");
        }
        return file_get_contents($filename);
    }

    public function __isset($name)
    {
        $filename = glob($this->path . "/{$name}.*")[0] ?? null;
        return !!$filename;
    }
}
