<?php

namespace App\AI;

trait MakeIntelligentTrait
{
    public $_chat = [];

    public function getChat()
    {
        $chat = $this->_chat;
        // remove first message
        array_shift($chat);
        return $chat;
    }

    public function ai($message, $model = 'gpt-4-1106-preview')
    {
        $service = new AIService(env('OPENAI_API_KEY'), $this->knowledgePath ?? '');
        [$rolDescription, $methods] = $service->prepareObjectDescription($this);
        $chat = [
            [
                'role' => 'system',
                'content' => "You are a: {$rolDescription}",
            ],
            [
                'role' => 'user',
                'content' => $message,
            ],
        ];
        foreach($methods as $method) {
            $service->registerFunction($method['name'], function ($arguments) use ($method) {
                $args = [];
                foreach($method['parameters']['properties'] as $name => $details) {
                    $args[] = $arguments[$name] ?? null;
                }
                $response = $this->{$method['name']}(...$args);
                return is_string($response) ? $response : json_encode($response);
            });
        }
        [$result, $chat] = $service->chatWithFunctions($chat, (array) $this, $methods, $model);
        $this->_chat = $chat;
        return $result;
    }

    public function __invoke($message)
    {
        $result = $this->ai($message);
        return $result['content'];
    }
}
