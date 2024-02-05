<?php

namespace App\AI;

use Exception;
use Mustache_Engine;
use Project;

abstract class Agent
{
    private Knowledge $knowledge;
    private string $model = 'gpt-4-1106-preview';
    protected Mustache_Engine $mustache;
    protected AIService $service;
    private string $rolDescription;
    private array $methods;

    public function __construct(public Project $project, public string $knowledgePath)
    {
        $this->mustache = new Mustache_Engine([
            'escape' => function ($value) {
                return json_encode($value);
            },
        ]);
        if ($this->knowledgePath) {
            $this->knowledge = new Knowledge($this->knowledgePath);
        }
        $this->service = new AIService(env('OPENAI_API_KEY'), $this->knowledgePath ?? '');
        [$this->rolDescription, $this->methods] = $this->service->prepareObjectDescription($this);
    }

    public function getId()
    {
        return get_class($this);
    }

    public function doTask(Task $task, string $message)
    {
        $model = $this->model;
        foreach($this->methods as $method) {
            $this->service->registerFunction($method['name'], function ($arguments) use ($method) {
                $args = [];
                foreach($method['parameters']['properties'] as $name => $details) {
                    $args[] = $arguments[$name] ?? null;
                }
                $response = $this->{$method['name']}(...$args);
                return is_string($response) ? $response : json_encode($response);
            });
        }

        if (empty($task->chat)) {
            $task->chat = [
                [
                    'role' => 'system',
                    'content' => $this->mustache->render("You are a: {$this->rolDescription}", (array) $this),
                ],
            ];
        }
        $task->addChatMessage([
            'role' => 'user',
            'content' => $message,
        ]);
        [$result] = $this->service->chatWithFunctions($this->methods, $model, $task);
        return $result;
    }

    public function getMethod(string $name): array
    {
        // find by name
        foreach ($this->methods as $method) {
            if ($method['name'] === $name) {
                return $method;
            }
        }
        return [];
    }
}
