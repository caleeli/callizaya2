<?php

use App\AI\Task;

ini_set('display_errors', 1);

require_once __DIR__ . '/Agents/DBAnalyst.php';

if (ob_get_level()) {
    ob_end_clean();
}
header('Content-Type: text/plain; charset=utf-8');

$taskId = path()[1] ?? null;

$project = new Project(
    name: 'aa',
    path: '/home/david/projects/ai_tests/aa',
    mainBranch: 'main',
);
$analyst = new DBAnalyst($project, __DIR__ . '/knowledge');

if ($taskId) {
    $message = $_REQUEST['message'] ?? null;
    if (!$message) {
        throw new Exception("No se ha enviado el mensaje");
    }
    $task = Task::find($taskId, $analyst);
    $task->execute($message);
} else {
    $task = new Task(
        name: 'Agregar los cambios necesarios para registrar los logins de los usuarios',
        description: '',
        branch: 'FOUR-0001',
        assignedTo: $analyst,
        status: 'pending',
    );
    $task->save();
    $task->initBranch();
    $task->execute($task->name . "\n" . $task->description);
}

return [];
