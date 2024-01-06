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
        file_put_contents($factory_path, $content);

        // test and commit the work
        $result = $this->project->testAndCommit("Creando factory $name");
        if (!$result[0]) {
            return $result[1];
        }

        return "Factory $name creado exitosamente.";
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
        $test_path = $this->project->path . '/tests/Feature/' . $name . '.php';
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
}
