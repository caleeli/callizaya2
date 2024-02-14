<?php

use App\AI\Task;

if (ob_get_level()) {
    ob_end_clean();
}
// Request fields:
// - agent: string
// - project_name: string
// - project_path: string
// - project_main_branch: string
// - name: string
// - description: string
// - branch: string
// - status: string
// - message: string
// - callback_chat: string
// - callback_bearer_token: string

$agent = $_POST['agent'] ?? null;
if (!$agent) {
    throw new Exception("No se ha enviado el agente");
}
if (!file_exists(__DIR__ . '/Agents/' . $agent . '.php')) {
    throw new Exception("No existe el agente {$agent}");
}
require_once __DIR__ . '/Agents/' . $agent . '.php';

header('Content-Type: text/plain; charset=utf-8');

$taskId = path()[1] ?? null;
$projectName = $_POST['project_name'] ?? null;
if (!$projectName) {
    throw new Exception("No se ha enviado el proyecto");
}
$projectPath = $_POST['project_path'] ?? null;
if (!$projectPath) {
    throw new Exception("No se ha enviado la ruta del proyecto");
}
$mainBranch = $_POST['project_main_branch'] ?? null;
$callbackChat = $_POST['callback_chat'] ?? '';
$callbackModel = $_POST['callback_model'] ?? '';
$callbackBearerToken = $_POST['callback_bearer_token'] ?? '';

$project = new Project(
    name: $projectName,
    path: $projectPath,
    mainBranch: $mainBranch,
);
$analyst = new $agent($project, __DIR__ . '/knowledge');

if ($taskId) {
    $message = $_POST['message'] ?? null;
    if (!$message) {
        throw new Exception("No se ha enviado el mensaje");
    }
    $task = Task::find($taskId, $analyst);
    $task->callbackChat = $callbackChat;
    $task->callbackModel = $callbackModel;
    $task->callbackBearerToken = $callbackBearerToken;
    $task->execute($message);
} else {
    $name = $_POST['name'] ?? null;
    if (!$name) {
        throw new Exception("No se ha enviado el nombre de la tarea");
    }
    $description = $_POST['description'] ?? null;
    if (!$description) {
        throw new Exception("No se ha enviado la descripcion de la tarea");
    }
    $branch = $_POST['branch'] ?? null;
    if (!$branch) {
        throw new Exception("No se ha enviado la rama de la tarea");
    }
    $status = $_POST['status'] ?? null;
    if (!$status) {
        throw new Exception("No se ha enviado el estado de la tarea");
    }
    $task = new Task(
        name: $name,
        description: $description,
        branch: $branch,
        assignedTo: $analyst,
        status: $status,
    );
    $task->callbackChat = $callbackChat;
    $task->callbackBearerToken = $callbackBearerToken;
    $task->save();
    $task->initBranch();
    $task->execute($task->name . "\n" . $task->description);
}

return [
    'task_id' => $task->id,
];
