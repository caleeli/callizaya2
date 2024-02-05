<?php

use App\AI\Task;

ini_set('display_errors', 1);

require_once __DIR__ . '/Agents/DBAnalyst.php';
require_once __DIR__ . '/Agents/Frontend.php';

if (ob_get_level()) {
    ob_end_clean();
}
header('Content-Type: text/plain; charset=utf-8');

$taskId = path()[1] ?? null;

$project = new Project(
    name: 'aa',
    // path: '/home/david/projects/ai_tests/aa',
    path: '/home/david/projects/tareas',
    mainBranch: 'main',
);
$analyst = new Frontend($project, __DIR__ . '/knowledge');
/*
passthru('cd /home/david/projects/ai_tests/aa && export PATH="$PATH:/home/david/.bun/bin:home/david/.nvm/versions/node/v20.10.0/bin"'.
    ' && export NVM_DIR="/home/david/.nvm" && [ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"' .
    ' && bun run build 2>&1');
die;*/
if ($taskId) {
    $message = $_REQUEST['message'] ?? null;
    if (!$message) {
        throw new Exception("No se ha enviado el mensaje");
    }
    $task = Task::find($taskId, $analyst);
    $task->execute($message);
} else {
    $task = new Task(
    /*
    Ejemplo de creacion de pagina vue:
        name: 'Pagina para listar las tareas registradas en la base de datos',
        description: '
        Crea un pagina vue2 usando  y componentes BOOTSTRAP-VUE para:

        Mostrar un boton para crear un nuevo proyecto. Cuando se crea uno ir a la ruta vue de edicion `/ProjectCreate`.
        Mostrar un listado de proyectos con las siguientes columnas:
        - Nombre del proyecto (nombre)
        - Propietario del proyecto (creado_por.nombres_apellidos)
        - Boton para editar que vaya a la ruta vue de edicion `/ProjectEdit/{id}`

        El componente debe llamarse Projects.vue

        La pantalla debe estar en español.
        No usar paginacion, usa scroll infinito.
        Declarar todas las variables.
        Incluir validaciones.
        Usa fetch para las llamadas al endpoint. No uses axios.
        Los datos pueden ser obtenidos de endpoints con la forma
            GET /api/data/project?page=0&per_page=10&fields=column1,column2&sort=column1&include=relation1
            POST /api/data/project
            PUT /api/data/project/{id}
            DELETE /api/data/project/{id}
        La respuesta del servidor debe ser un json con la forma
            {
                "data": [
                    {
                        "id": 1,
                        "column1": "value1",
                        "column2": "value2",
                        "relation1": {
                            "id": 1,
                            "column1": "value1",
                            "column2": "value2",
                        }
                    }
                ],
                "meta": {
                    "total": 1,
                    "per_page": 10,
                    "current_page": 1,
                    "last_page": 1,
                    "from": 1,
                    "to": 1
                }
            }
        ',*/
        // name: 'Agregar los cambios necesarios para registrar los logins de los usuarios',
        // description: '',
        /*
        name: 'Crea el model Projecto y su migracion',
        description: 'Debe contener los siguientes campos:
        - nombre: varchar(80)
        - descripcion: text
        - creado_por: integer
        - creado_en: datetime
        - actualizado_en: datetime
        - actualizado_por: integer
        ',
        */
        /*
        name: 'Crea la pagina para crear un Proyecto',
        description: '
        El componente debe llamarse ProyectoCrear.vue
        Debe contener los siguientes campos:
        - nombre: maxsize=80
        - descripcion: textarea

        Un boton para cancelar, que vaya a la ruta vue de listado `/Proyectos`
        Un boton para guardar, que haga un POST al endpoint `/api/data/proyecto`
        ',
        */
        /*
        name: 'Crea la pagina para editar un Proyecto',
        description: '
        El componente debe llamarse ProyectoEditar.vue
        Debe contener los siguientes campos:
        - nombre: maxsize=80
        - descripcion: textarea

        Un boton para cancelar, que vaya a la ruta vue de listado `/Proyectos`
        Un boton para guardar, que haga un PUT al endpoint `/api/data/proyecto`
        ',
        */
        /*
        name: 'Crea la pagina para listar las tareas de un Proyecto',
        description: '
        El componente debe llamarse ProyectoTareas.vue, obtiene el `proyecto_id = this.$route.query.id`

        Mostrar un boton para crear una nueva tarea. Cuando se crea una tarea ir a la ruta vue de creacion
            de tareas `/ProyectoTareaCrear?proyecto_id={proyecto_id}`.
        Mostrar un listado de las tareas del proyecto actual con las siguientes columnas:
        Debe listar las siguientes columnas:
        - Branch (branch)
        - Nombre (nombre)
        - Estado (estado)
        - Asignado a (asignado_a.nombres_apellidos)
        ',
        */
        /*
        name: 'Crea el model Tarea y su migracion',
        description: '
        Debe contener los siguientes campos:
        - proyecto_id: integer
        - nombre: varchar(80)
        - descripcion: text
        - branch: varchar(80)
        - estado: varchar(80)
        - chat: text (cast to array)
        - adjuntos: text (cast to array)
        - asignado_a_id: integer
        - creado_por: integer
        - creado_en: datetime
        - actualizado_en: datetime
        - actualizado_por: integer

        Agrega la relacion para asignadoA con el model Usuario
        ',
        */
        /*
        name: 'Crea la pagina para crear un Proyecto',
        description: '
        El componente debe llamarse ProyectoCrear.vue
        Debe contener los siguientes campos:
        - nombre: maxsize=80
        - descripcion: textarea

        Un boton para cancelar, que vaya a la ruta vue de listado `/Proyectos`
        Un boton para guardar, que haga un POST al endpoint `/api/data/proyecto`
        ',
        */
        name: 'Crea la pagina para crear una Tarea',
        description: '
        El componente debe llamarse ProyectoTareaCrear.vue, obtiene el `proyecto_id = this.$route.query.proyecto_id`
        Debe contener los siguientes campos:
        - nombre: maxsize=80
        - descripcion: textarea
        - branch: maxsize=80
        - asignado_a_id: dropdown filtrable de usuarios
        - estado: maxsize=80
        - adjuntos: multiple file upload

        Un boton para cancelar, que vaya a la ruta vue de listado `/ProyectoTareas?id={proyecto_id}`
        Un boton para guardar, que haga un POST al endpoint `/api/data/tarea` con proyecto_id={proyecto_id}
        ',
        branch: 'FOUR-0009',
        assignedTo: $analyst,
        status: 'pending',
    );
    $task->save();
    $task->initBranch();
    $task->execute($task->name . "\n" . $task->description);
}

return [
    'task_id' => $task->id,
];
