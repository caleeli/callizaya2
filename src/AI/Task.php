<?php

namespace App\AI;

use PDO;

class Task
{
    public string $id = '';
    public array $attachments = [];
    public string $callbackChat = '';
    public string $callbackBearerToken = '';

    public function __construct(
        public string $name,
        public string $description,
        public string $branch,
        public Agent $assignedTo,
        public string $status,
        public array $chat = [],
        public array $meta = [],
    ) {
        $this->migrate();
    }

    public function execute(string $message)
    {
        $this->status = 'in_progress';
        $this->assignedTo->doTask($this, $message);
        $this->status = 'completed';
    }

    public function addChatMessage(array $message)
    {
        $this->chat[] = $message;
        $this->save();
        $name = $message['role'];
        if (!empty($message['name'])) {
            $name .= '(' . $message['name'] . ')';
        }
        $content = $message['content'];
        if (empty($content) && !empty($message['function_call'])) {
            $function = $message['function_call']['name'];
            $params = $message['function_call']['arguments'] ?? '';
            $params = is_string($params) ? $params : json_encode($params);
            $content = $this->assignedTo->getMethod($function)['description'] . "\n" .
                $function . '('.$params.') ';
            $message['content'] = $content;
        }
        echo "\n{$name}:\n", $content, "\n";
        if ($this->callbackChat) {
            // post message to chat callback
            $ch = curl_init($this->callbackChat);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            $headers = [
                'Content-Type: application/json',
                "Authorization: Bearer {$this->callbackBearerToken}",
            ];
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
                'message' => $message,
            ]));
            curl_exec($ch);
            curl_close($ch);
        }
        flush();
    }

    public function save(): string
    {
        // save to database
        $connection = $this->getConnection();
        if (!$connection) {
            return '';
        }
        if ($this->id) {
            $statement = $connection->prepare(
                'UPDATE tasks SET
                    name = :name,
                    description = :description,
                    branch = :branch,
                    attachments = :attachments,
                    assigned_to = :assigned_to,
                    status = :status,
                    chat = :chat,
                    meta = :meta
                WHERE id = :id'
            );
            $statement->execute([
                'id' => $this->id,
                'name' => $this->name,
                'description' => $this->description,
                'branch' => $this->branch,
                'attachments' => json_encode($this->attachments),
                'assigned_to' => $this->assignedTo->getId(),
                'status' => $this->status,
                'chat' => json_encode($this->chat),
                'meta' => json_encode((object) $this->meta),
            ]);
            return $this->id;
        }
        $statement = $connection->prepare(
            'INSERT INTO tasks
                (name, description, branch, attachments, assigned_to, status, chat, meta)
            VALUES
                (:name, :description, :branch, :attachments, :assigned_to, :status, :chat, :meta)'
        );
        $statement->execute([
            'name' => $this->name,
            'description' => $this->description,
            'branch' => $this->branch,
            'attachments' => json_encode($this->attachments),
            'assigned_to' => $this->assignedTo->getId(),
            'status' => $this->status,
            'chat' => json_encode($this->chat),
            'meta' => json_encode((object) $this->meta),
        ]);
        return $this->id = $connection->lastInsertId();
    }

    public static function find($id, Agent $agent): Task | null
    {
        $connection = self::getConnection();
        if (!$connection) {
            return null;
        }
        $statement = $connection->prepare(
            'SELECT * FROM tasks WHERE id = :id'
        );
        $statement->execute([
            'id' => $id,
        ]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        $task = new Task(
            $result['name'],
            $result['description'],
            $result['branch'],
            $agent,
            $result['status'],
            json_decode($result['chat'], true),
            json_decode($result['meta'], true),
        );
        $task->id = $result['id'];
        $task->attachments = json_decode($result['attachments'], true);

        return $task;
    }

    public static function findByName($name): Task | null
    {
        $connection = self::getConnection();
        if (!$connection) {
            return null;
        }
        $statement = $connection->prepare(
            'SELECT * FROM tasks WHERE name = :name'
        );
        $statement->execute([
            'name' => $name,
        ]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        $task = new Task(
            $result['name'],
            $result['description'],
            $result['branch'],
            new $result['assigned_to'](),
            $result['status'],
            json_decode($result['chat'], true),
            json_decode($result['meta'], true),
        );
        $task->id = $result['id'];
        $task->attachments = json_decode($result['attachments'], true);
        return $task;
    }

    private function migrate()
    {
        $connection = $this->getConnection();
        if (!$connection) {
            return;
        }
        $statement = $connection->prepare(
            'CREATE TABLE IF NOT EXISTS tasks (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT,
                description TEXT,
                branch varchar(80),
                attachments TEXT,
                assigned_to TEXT,
                status TEXT,
                chat TEXT,
                meta TEXT
            )'
        );
        $statement->execute();
    }

    public static function getConnection()
    {
        if (empty($_ENV['AI_DB_CONNECTION'])) {
            return null;
        }
        if (isset($_ENV['DB_USER'])) {
            return new PDO($_ENV['AI_DB_CONNECTION'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
        } else {
            return new PDO($_ENV['AI_DB_CONNECTION']);
        }
    }

    public function initBranch()
    {
        $this->assignedTo->project->createBranch($this->branch);
        // $this->assignedTo->project->run('php artisan migrate:fresh --seed');
        $this->assignedTo->project->run('php artisan migrate');
    }
}
