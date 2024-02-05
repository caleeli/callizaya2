<?php

namespace App\AI;

use OpenAI\Client;
use OpenAI\Factory;
use ReflectionClass;
use Throwable;

class AIService
{
    protected Client $client;
    private Encoder $encoder;
    private $functions = [];

    public function __construct(protected string $apiKey, protected string $knowledgePath)
    {
        $this->client = self::factory()
            ->withApiKey($apiKey)
            ->make();
        $this->encoder = new Encoder();
    }

    private static function factory(): Factory
    {
        return new Factory();
    }

    public function countTokens($prompt)
    {
        return count($this->encoder->encode($prompt));
    }

    public function chatWithFunctions(array $functions, $model, Task $task): array
    {

        // Make a call to the OpenAI client's chat completion endpoint
        if ($functions) {
            $tools = [];
            foreach ($functions as $function) {
                $tools[] = [
                    'type' => 'function',
                    'function' => $function,
                ];
            }
            $result = $this->client->chat()->create([
                'model' => $model,
                'messages' => $task->chat,
                'functions' => $functions,
                'function_call' => 'auto',
                //'tools' => $tools,
                //'tool_choice' => 'auto',
            ]);
        } else {
            $result = $this->client->chat()->create([
                'model' => $model,
                'messages' => $task->chat,
            ]);
        }

        // Return the model's response
        $response = $result['choices'][0]['message'];
        $task->addChatMessage($response);
        if (isset($response['function_call']) && isset($this->functions[$response['function_call']['name']])) {
            // fix \\u characters
            if (isset($response['function_call']['arguments'])) {
                $response['function_call']['arguments'] = str_replace(
                    '\\\\u', '\\u', $response['function_call']['arguments']
                );
            }
            $arguments = json_decode($response['function_call']['arguments'], true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                $task->addChatMessage([
                    'role' => 'function',
                    'name' => $response['function_call']['name'],
                    'content' => 'Invalid arguments: ' . json_last_error_msg(),
                ]);
                return $this->chatWithFunctions($functions, $model, $task);
            }
            $function = $this->functions[$response['function_call']['name']];
            try {
                $content = $function($arguments);
            } catch (Throwable $th) {
                $content = 'Error: ' . $th->getMessage();
            }
            $task->addChatMessage([
                'role' => 'function',
                'name' => $response['function_call']['name'],
                'content' => $content,
            ]);
            return $this->chatWithFunctions($functions, $model, $task);
        }
        return [$response, $task->chat];
    }

    public function registerFunction($name, callable $callback)
    {
        $this->functions[$name] = $callback;
    }

    public function prepareObjectDescription($object): array
    {
        $reflectedClass = new ReflectionClass($object);
        $methods = $reflectedClass->getMethods();
        $methodsDetails = [];

        foreach ($methods as $method) {
            $methodDetails = $this->getMethodDetails($method);
            if ($methodDetails) {
                $methodsDetails[] = $methodDetails;
            }
        }

        $docComment = explode("\n", $reflectedClass->getDocComment());
        $classDescription = '';
        foreach ($docComment as $i => $line) {
            if ($i === 0) {
                continue;
            }
            $classDescription .= substr(trim($line), 2) . "\n";
        }
        $classDescription = trim($classDescription);

        return [$classDescription, $methodsDetails];
    }

    private function getMethodDetails($method): array
    {
        $docComment = $method->getDocComment();

        if ($docComment === false) {
            return [];
        }

        $methodName = $method->getName();
        $methodDescription = trim(substr(trim(explode("\n", $docComment)[1]), 1));
        $parametersDetails = $this->getParametersDetails($method, $docComment);

        return [
            "name" => $methodName,
            "description" => $methodDescription,
            "parameters" => [
                'type' => 'object',
                'properties' => (object) $parametersDetails['details'],
                'required' => $parametersDetails['required'],
            ],
        ];
    }

    private function getParametersDetails($method, $docComment): array
    {
        $parametersDetails = [];
        $required = [];

        foreach ($method->getParameters() as $parameter) {
            $paramName = $parameter->getName();
            $paramType = $parameter->hasType() ? $parameter->getType()->getName() : "string";
            $paramDescription = "";
            $isRequired = !$parameter->isOptional();
            if ($isRequired) {
                $required[] = $paramName;
            }

            // Extracting parameter description from doc comment
            preg_match('/@param\s+(\S+)\s+\$' . $paramName . '\s+(.+)/', $docComment, $paramMatches);
            if (isset($paramMatches[2])) {
                $paramDescription = trim($paramMatches[2]);
            }

            $parametersDetails[$paramName] = [
                "type" => $paramType,
                "description" => $paramDescription
            ];
        }

        return ['details' => $parametersDetails, 'required' => $required];
    }

    public function audio2text(string $file): string
    {
        $response = $this->client->audio()->transcribe([
            'model' => 'whisper-1',
            'file' => fopen($file, 'r'),
            'response_format' => 'verbose_json',
        ]);
        return $response->text;
    }

    public function createImage(string $prompt)
    {
        $response = $this->client->images()->create([
            'model' => 'dall-e-3',
            'prompt' => $prompt,
            'n' => 1,
            'response_format' => 'url',
        ]);
        return $response->data[0]->url;
    }
}
