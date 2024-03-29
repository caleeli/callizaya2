<?php

require_once __DIR__ . '/Project.php';

use App\AI\Agent;

/**
 * Analista de base de datos, experto en MySQL y Laravel 10
 *
 * Revisa paso a paso los requerimientos de base de datos y genera código
 * en Laravel para crear migraciones, modelos, factories, seeders y
 * tests que permitan cumplir con los requerimientos.
 * Usa las funciones registradas para crear los archivos, pero no
 * los envies al chat.
 *
 * Ejemplo de migración:
 * ```php
 * {{{ knowledge.migration }}}
 * ```
 * Para las clases Model utiliza como base la clase `App/Models/Model` o `Model`
 */
class DBAnalyst extends Agent
{
    /**
     * Listar las migraciones existentes
     */
    public function list_migrations(): array
    {
        $tables = glob($this->project->path . '/database/migrations/*.php');
        $migrations = [];
        foreach ($tables as $table) {
            $migrations[] = basename($table);
        }
        return $migrations;
    }

    /**
     * Obtiene el contenido del migration.
     *
     * @param string $migration_name Nombre del migration, ej. 2023_04_04_000021_create_usuarios_table
     */
    public function get_migration_content(string $migration_name)
    {
        $migration_path = $this->project->path . '/database/migrations/' . $migration_name . '.php';
        if (!file_exists($migration_path)) {
            return "No existe el archivo $migration_path";
        }
        return file_get_contents($migration_path);
    }

    /**
     * Crea un archivo de migración y verifica que funciona
     *
     * @param string $nameWithoutDate Nombre del migration, ej. create_usuarios_table
     * @param string $content Contenido del archivo php de migración
     */
    public function create_migration(string $nameWithoutDate, string $content): string
    {
        // validate input: replace spaces with underscores
        $nameWithoutDate = str_replace(' ', '_', $nameWithoutDate);
        // validate input: remove date from name if exists
        $nameWithoutDate = preg_replace('/^\d{4}_\d{2}_\d{2}_\d{6}_/', '', $nameWithoutDate);

        // do the work
        $migration_name = date('Y_m_d_His') . '_' . $nameWithoutDate;
        $migration_path = $this->project->path . '/database/migrations/' . $migration_name . '.php';
        if (substr($content, 0, 5) !== "<?php") {
            $content = "<?php\n\n" . $content;
        }
        file_put_contents($migration_path, $content);

        // test and commit the work
        $result = $this->project->testAndCommit("Creando migración $migration_name");
        if (!$result[0]) {
            return $result[1];
        }

        return "Migración {$migration_name} creada exitosamente. Crea un test para verificar que funciona.";
    }

    /**
     * Crea un archivo de migración y verifica que funciona
     *
     * @param string $name Nombre del modelo, ej. Usuario
     * @param string $content Contenido del archivo php del modelo
     */
    public function create_model(string $name, string $content): string
    {
        // do the work
        $model_path = $this->project->path . '/app/Models/' . $name . '.php';
        if (substr($content, 0, 5) !== "<?php") {
            $content = "<?php\n\n" . $content;
        }
        file_put_contents($model_path, $content);

        // test and commit the work
        $result = $this->project->testAndCommit("Creando modelo $name");
        if (!$result[0]) {
            return $result[1];
        }

        return "Modelo $name creado exitosamente. Crea un test para verificar que funciona.";
    }

    /**
     * Crea un archivo de factory y verifica que funciona
     *
     * @param mixed $name Nombre del factory, ej. UsuarioFactory
     * @param mixed $content Contenido del archivo php del factory
     */
    public function create_factory($name, $content): string
    {
        // do the work
        $factory_path = $this->project->path . '/database/factories/' . $name . '.php';
        if (substr($content, 0, 5) !== "<?php") {
            $content = "<?php\n\n" . $content;
        }
        file_put_contents($factory_path, $content);

        // test and commit the work
        $result = $this->project->testAndCommit("Creando factory $name");
        if (!$result[0]) {
            return $result[1];
        }

        return "Factory $name creado exitosamente.";
    }

    /**
     * Crea un controller
     *
     * @param string $name Nombre del controller, ej. UserController
     * @param string $content Code of the controller file
     */
    public function create_controller($name, $content): string
    {
        // do the work
        $controller_path = $this->project->path . '/app/Http/Controllers/' . $name . '.php';
        if (substr($content, 0, 5) !== "<?php") {
            $content = "<?php\n\n" . $content;
        }
        file_put_contents($controller_path, $content);

        // test and commit the work
        $result = $this->project->testAndCommit("Creando controlador $name");
        if (!$result[0]) {
            return $result[1];
        }

        return "Controlador $name creado exitosamente.";
    }

    /**
     * Agrega una ruta web
     *
     * @param string $route Route of the page. ej. /route/to/page
     * @param string $code Code to add to the routes/web.php file ej. Route::get('/route/to/page', [Controller::class, 'method']);
     */
    public function add_web_route($route, $code)
    {
        $routes_path = $this->project->path . '/routes/web.php';
        $routes = file_get_contents($routes_path);
        $routes .= "\n\n" . $code;
        file_put_contents($routes_path, $routes);
        $this->project->add($routes_path);
        $result = $this->project->testAndCommit("Agregando ruta web {$route}");
        if (!$result[0]) {
            return $result[1];
        }
        return "Ruta web agregada exitosamente.";
    }

    /**
     * Agrega una ruta api
     *
     * @param string $route Route of the page. ej. /route/to/page
     * @param string $code Code to add to the routes/api.php file
     */
    public function add_api_route($route, $code)
    {
        $routes_path = $this->project->path . '/routes/api.php';
        $routes = file_get_contents($routes_path);
        $routes .= "\n\n" . $code;
        file_put_contents($routes_path, $routes);
        $this->project->add($routes_path);
        $result = $this->project->testAndCommit("Agregando ruta api {$route}");
        if (!$result[0]) {
            return $result[1];
        }
        return "Ruta api agregada exitosamente.";
    }

    /**
     * Crea un feature test
     *
     * @param mixed $name Nombre del test. ej. CrearUsuarioTest
     * @param mixed $code Código del test.
     */
    public function create_feature_test($name, $code): string
    {
        // do the work
        $test_path_dir = $this->project->path . '/tests/Feature';
        if (!file_exists($test_path_dir)) {
            mkdir($test_path_dir, 0777, true);
        }
        $test_path = $test_path_dir . '/' . $name . '.php';
        if (substr($code, 0, 5) !== "<?php") {
            $code = "<?php\n\n" . $code;
        }
        file_put_contents($test_path, $code);

        // test and commit the work
        $result = $this->project->testAndCommit("Creando test $name");
        if (!$result[0]) {
            return $result[1];
        }

        return "Test $name creado exitosamente.";
    }

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
}
