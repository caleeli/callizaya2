<?php

require_once __DIR__ . '/Project.php';

use App\AI\Agent;
// * ```
// * /src/layouts/Layout.astro Incluye el html heade y un body vacio con un slot para el contenido
// * ```
// * Se tiene instalado tailwind.
// * Las URL de las imagenes deben empezar con /images., ej. /images/logo.png


/**
 * Frontend experto en vuejs 2.0
 *
 * Utiliza componentes BOOTSTRAP-VUE para la creacion de paginas y otros componentes.
 *
 * Las pantallas debe estar en español.
 * Para las tablas no usar paginacion, usar scroll infinito.
 * Declarar todas las variables.
 * Incluir validaciones.
 * Para agrupar botones y alinearlos a la derecha en el pie de un formulario considera usar `b-form-buttons`
 * Usa fetch para las llamadas al endpoint. No usar axios.
 * Los datos de un {model} pueden ser obtenidos de endpoints con la forma
 *     GET /api/data/{model}?page=0&per_page=10&fields=column1,column2&sort=column1&include=relation1&filter[]=whereColumn1("value")
 *     POST /api/data/{model}
 *     PUT /api/data/{model}/{id}
 *     DELETE /api/data/{model}/{id}
 * Las respuestas del servidor son json con la forma
 * ```
 * {
 *     "data": [
 *         {
 *             "id": 1,
 *             "column1": "value1",
 *             "column2": "value2",
 *             "relation1": {
 *                 "id": 1,
 *                 "column1": "value1",
 *                 "column2": "value2",
 *             }
 *         }
 *     ],
 *     "meta": {
 *         "total": 1,
 *         "per_page": 10,
 *         "current_page": 1,
 *         "last_page": 1,
 *         "from": 1,
 *         "to": 1
 *     }
 * }
 * ```
 * Los filtros del metodo GET pueden ser multiples ANDs con la forma:
 *  &filter[]=whereColumnName("value")
 *  &filter[]=where("column_name","value")
 *  &filter[]=where("column_name","like","%value%")
 * Las URL de las imagenes deben empezar con /images., ej. /images/logo.png
 */
class Frontend extends Agent
{
    /**
     * Devuelve el contenido de un archivo del proyecto
     *
     * @param string $path Ruta del archivo, ej. routes/web.php
     * @return string
     */
    public function show_file_content($path): string
    {
        $fullPath = $this->project->path . '/' . trim($path, '/');
        if (!file_exists($fullPath)) {
            return "No existe el archivo {$path}";
        }
        return file_get_contents($fullPath);
    }

    /**
     * Crea o actualiza el contenido de un archivo del proyecto
     *
     * @param string $path Ruta del archivo, ej. routes/web.php, app/Models/User.php
     * @param string $content Contenido del archivo
     * @param string $comment Comentario del commit. ej. Agregando ruta para crear usuarios
     */
    public function save_file_content($path, $content, $comment): string
    {
        $fullPath = $this->project->path . '/' . trim($path, '/');
        file_put_contents($fullPath, $content);
        $this->project->add($fullPath);
        $result = $this->project->testAndCommit($comment);
        if (!$result[0]) {
            return $result[1];
        }
        return "Archivo {$path} guardado exitosamente.";
    }

    /**
     * Elimina un archivo del proyecto
     *
     * @param mixed $path Ruta del archivo, ej. routes/web.php
     * @param mixed $comment Comentario del commit
     */
    public function delete_file($path, $comment): string
    {
        $fullPath = $this->project->path . '/' . trim($path, '/');
        unlink($fullPath);
        $this->project->add($fullPath);
        $result = $this->project->testAndCommit("", $comment);
        if (!$result[0]) {
            return $result[1];
        }
        return "Archivo {$path} eliminado exitosamente.";
    }

    /**
     * Ejecuta comandos en la terminal
     * @param mixed $command Comando a ejecutar. ej. php artisan migrate
     */
    public function run_terminal_command($command): string
    {
        $result = $this->project->run($command);
        if (!$result[0]) {
            return $result[1];
        }
        return $result[1];
    }

    /**
     * Crea un archivo astro y se publica como page
     *
     * @param mixed $name Nombre de la pagina. ej. login
     * @param mixed $content Contenido astro de la página
     */
    public function create_astro_page($name, $content): string
    {
        // do the work
        $page_path = $this->project->path . '/src/pages/' . $name . '.astro';
        file_put_contents($page_path, $content);

        // test and commit the work
        $result = $this->project->testBuildAndCommit("Creando página $name");
        if (!$result[0]) {
            return $result[1];
        }

        return "Página {$name} creada exitosamente.";
    }

    /**
     * Create an PNG asset image in the public directory
     *
     * @param string $path Path inside public directory. ej. images/logo.png
     * @param string $prompt Prompt to generate the image
     * @param string $size Size of the image. ej. 256x256
     */
    public function create_png_image(string $path, string $prompt, string $size)
    {
        // if starts with public, remove it
        if (substr($path, 0, 7) === 'public/' || substr($path, 0, 8) === '/public/') {
            $path = substr(trim($path. '/'), 6);
            $pathFixed = true;
        } else {
            $pathFixed = false;
        }
        $url = $this->service->createImage($prompt);
        // save image into project
        $image_path = $this->project->path . '/publicDir/' . trim($path, '/');
        $dir = dirname($image_path);
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }
        file_put_contents($image_path, file_get_contents($url));

        // test and commit the work
        $result = $this->project->testBuildAndCommit("Creando imagen $path");
        if (!$result[0]) {
            return $result[1];
        }

        // if starts with public, remove it
        if ($pathFixed) {
            return "Image {$path} was created succesfully, but path must not start with `/public`.' .
                ' Change the image path to `$path` in your pages.";
        }
        return "Imagen {$path} creada exitosamente en el directorio public";
    }

    /**
     * Create a vue page component
     *
     * @param mixed $name Page component name. ej. Login
     * @param mixed $content Page component content
     */
    public function create_vue_page($name, $content): string
    {
        // do the work
        $page_path = $this->project->path . '/resources/js/pages/' . $name . '.vue';
        file_put_contents($page_path, $content);

        // test and commit the work
        $result = $this->project->testBuildAndCommit("Creando página $name");
        if (!$result[0]) {
            return $result[1];
        }

        return "Página {$name} creada exitosamente.";
    }

    /**
     * Create a vue component
     *
     * @param mixed $name Component name. ej. TableList
     * @param mixed $content Component content
     */
    public function create_vue_component($name, $content): string
    {
        // do the work
        $page_path = $this->project->path . '/resources/js/components/' . $name . '.vue';
        file_put_contents($page_path, $content);

        // test and commit the work
        $result = $this->project->testBuildAndCommit("Creando componente $name");
        if (!$result[0]) {
            return $result[1];
        }

        return "Componente {$name} creado exitosamente.";
    }
}
