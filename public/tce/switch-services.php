<?php

declare(strict_types=1);

/**
 * Move Octane services between the "warm" and "flush" arrays.
 *
 * Run from the application root or from any directory:
 *     php public/tce/switch-services.php
 *     php public/tce/switch-services.php --skip-commands
 */

$skipCommands = in_array('--skip-commands', $argv ?? [], true);
$scriptProjectRoot = dirname(__DIR__, 2);
$currentDirectory = getcwd() ?: '';

// The script can live outside the Laravel application. When it is invoked
// from the application root, use that root for config and Composer autoloading.
$applicationRoot = is_file($currentDirectory . '/config/octane.php')
    ? $currentDirectory
    : $scriptProjectRoot;
$configPath = $applicationRoot . '/config/octane.php';
$autoloadPath = $applicationRoot . '/vendor/autoload.php';

if (is_file($autoloadPath)) {
    require_once $autoloadPath;
}

// The base file normally gets this helper from Laravel's framework bootstrap.
// Defining a small fallback keeps this utility usable before the application boots.
if (!function_exists('env')) {
    function env(string $key, mixed $default = null): mixed
    {
        $value = getenv($key);

        return $value === false ? $default : $value;
    }
}
$baseConfig = [];


if (!is_file($configPath)) {
    fwrite(STDERR, "No se encontró la configuración actual: {$configPath}\n");
    exit(1);
}

try {
    $config = require $configPath;
} catch (Throwable $exception) {
    fwrite(STDERR, "No se pudo leer {$configPath}: {$exception->getMessage()}\n");
    exit(1);
}

$source = file_get_contents($configPath);
if ($source === false) {
    fwrite(STDERR, "No se pudo abrir {$configPath}.\n");
    exit(1);
}

if (!is_array($config)) {
    fwrite(STDERR, "La configuración de Octane debe devolver un array.\n");
    exit(1);
}

$warm = array_values($config['warm'] ?? []);
$flush = array_values($config['flush'] ?? []);
$defaultServicesGroup = '__OCTANE_DEFAULT_SERVICES_TO_WARM__';
$defaultServicesExpression = '...Octane::defaultServicesToWarm()';
$defaultServices = [
    'auth',
    'cache',
    'cache.store',
    'config',
    'cookie',
    'db',
    'db.factory',
    'db.transactions',
    'encrypter',
    'files',
    'hash',
    'log',
    'router',
    'routes',
    'session',
    'session.store',
    'translator',
    'url',
    'view',
];

// Keep Octane's default services as one configurable group instead of
// expanding every service returned by defaultServicesToWarm().
$warm = array_values(array_filter(
    $warm,
    static fn (mixed $service): bool => !in_array($service, $defaultServices, true)
));
$flush = array_values(array_filter(
    $flush,
    static fn (mixed $service): bool => !in_array($service, $defaultServices, true)
));

$flushPosition = strpos($source, "'flush'");
$defaultPosition = false;
if (preg_match(
    '/^\s*' . preg_quote($defaultServicesExpression, '/') . ',?\s*$/m',
    $source,
    $defaultMatch,
    PREG_OFFSET_CAPTURE
)) {
    $defaultPosition = $defaultMatch[0][1];
}
$defaultDestination = 'normal';
if ($defaultPosition !== false && ($flushPosition === false || $defaultPosition < $flushPosition)) {
    $defaultDestination = 'warm';
} elseif ($defaultPosition !== false) {
    $defaultDestination = 'flush';
}

$disabled = [];
if (preg_match('/\/\/ (?:Disabled|Normal) services \(not in warm or flush\)(.*?)(?=\n\s*\],)/s', $source, $section)) {
    if (preg_match_all(
        '/^\s*\/\/\s*((?:[A-Za-z_][A-Za-z0-9_\\\\]*::class|\'[^\']*\'|"[^"]*")),\s*$/m',
        $section[1],
        $matches
    )) {
        $disabled = array_values(array_unique(array_map(
            static function (string $value): string {
                if (str_ends_with($value, '::class')) {
                    return substr($value, 0, -7);
                }

                return trim($value, '\'"');
            },
            $matches[1]
        )));
    }
}

$services = [];

foreach (array_merge($warm, $flush) as $service) {
    $key = is_string($service) ? $service : serialize($service);
    if (!array_key_exists($key, $services)) {
        $services[$key] = [
            'value' => $service,
            'destination' => in_array($service, $warm, true) ? 'warm' : 'flush',
        ];
    }
}

if ($defaultPosition !== false || $defaultServices !== []) {
    $services[$defaultServicesGroup] = [
        'value' => $defaultServicesGroup,
        'destination' => $defaultDestination,
    ];
}

foreach ($disabled as $service) {
    if (!array_key_exists($service, $services)) {
        $services[$service] = [
            'value' => $service,
            'destination' => 'normal',
        ];
    }
}

if ($services === []) {
    fwrite(STDERR, "No hay servicios en los arrays warm/flush.\n");
    exit(1);
}

$services = array_values($services);
$destinations = array_column($services, 'destination');

function terminalWidth(): int
{
    $columns = getenv('COLUMNS');
    if ($columns === false) {
        $columns = shell_exec('tput cols 2>/dev/null');
    }

    return max(80, (int) $columns ?: 120);
}

function serviceColumns(int $terminalWidth): int
{
    if ($terminalWidth >= 180) {
        return 3;
    }

    if ($terminalWidth >= 120) {
        return 2;
    }

    return 1;
}

function shortenForColumn(string $value, int $width): string
{
    if (strlen($value) <= $width) {
        return $value;
    }

    return substr($value, 0, max(1, $width - 3)) . '...';
}

function displayService(mixed $service): string
{
    return $service === '__OCTANE_DEFAULT_SERVICES_TO_WARM__'
        ? 'defaultServicesToWarm'
        : (string) $service;
}

function stateBadge(string $destination): string
{
    $states = [
        'warm' => ['W', '94'],   // Bright blue
        'flush' => ['F', '91'],  // Bright red
        'normal' => ['N', '95'], // Bright magenta
    ];
    [$letter, $color] = $states[$destination] ?? ['?', '97'];

    if (getenv('NO_COLOR') !== false) {
        return "[{$letter}]";
    }

    return "\033[{$color}m[{$letter}]\033[0m";
}

function stateLetter(string $destination): string
{
    return match ($destination) {
        'warm' => 'W',
        'flush' => 'F',
        default => 'N',
    };
}

function renderServiceGrid(
    array $services,
    array $destinations,
    int $position,
    int $columns,
    int $terminalWidth
): void {
    $columnWidth = max(20, intdiv($terminalWidth - (($columns - 1) * 2), $columns));
    $rows = (int) ceil(count($services) / $columns);

    for ($row = 0; $row < $rows; $row++) {
        $line = [];
        for ($column = 0; $column < $columns; $column++) {
            $index = ($row * $columns) + $column;
            if (!isset($services[$index])) {
                $line[] = str_repeat(' ', $columnWidth);
                continue;
            }

            $marker = $index === $position ? '>' : ' ';
            $label = shortenForColumn(
                displayService($services[$index]['value']),
                $columnWidth - 6
            );
            $state = $destinations[$index];
            $visibleText = "{$marker} [" . stateLetter($state) . "] {$label}";
            $coloredText = "{$marker} " . stateBadge($state) . " {$label}";
            $line[] = $coloredText . str_repeat(
                ' ',
                max(0, $columnWidth - strlen($visibleText))
            );
        }

        echo implode('  ', $line) . "\n";
    }
}

/**
 * Draw a simple checkbox-style selector and return the selected destinations.
 */
function chooseDestinations(array $services, array $destinations): ?array
{
    $count = count($services);
    $position = 0;
    $originalStty = null;
    $interactive = function_exists('posix_isatty') && posix_isatty(STDIN);

    if ($interactive) {
        $originalStty = shell_exec('stty -g');
        shell_exec('stty -icanon -echo min 1 time 0');
    }

    $restoreTerminal = static function () use (&$originalStty): void {
        if ($originalStty !== null) {
            shell_exec('stty ' . escapeshellarg(trim($originalStty)));
            echo "\033[?25h";
        }
    };

    try {
        if (!$interactive) {
            echo "Elige W (warm), F (flush) o N (normal) para cada servicio.\n\n";
            foreach ($services as $index => $service) {
                do {
                    printf(
                        "%s %s (W/F/N): ",
                        stateBadge($destinations[$index]),
                        displayService($service['value'])
                    );
                    $answer = strtoupper(trim((string) fgets(STDIN)));
                } while (!in_array($answer, ['W', 'F', 'N', ''], true));

                if ($answer !== '') {
                    $destinations[$index] = match ($answer) {
                        'W' => 'warm',
                        'F' => 'flush',
                        default => 'normal',
                    };
                }
            }

            return $destinations;
        }

        echo "\033[?25l";
        $terminalWidth = terminalWidth();
        $columns = serviceColumns($terminalWidth);
        while (true) {
            echo "\033[H\033[J";
            echo "Mover servicios de Octane (flechas navegar, Espacio cambiar estado, Enter guardar, q cancelar)\n";
        echo "Estados: [W] warm  [F] flush  [N] normal\n\n";
            renderServiceGrid($services, $destinations, $position, $columns, $terminalWidth);

            $key = fread(STDIN, 1);
            if ($key === false || $key === '') {
                continue;
            }

            if ($key === "\033") {
                $sequence = fread(STDIN, 2);
                if ($sequence === '[A') {
                    if ($position - $columns >= 0) {
                        $position -= $columns;
                    }
                } elseif ($sequence === '[B') {
                    if ($position + $columns < $count) {
                        $position += $columns;
                    }
                } elseif ($sequence === '[C') {
                    if (($position % $columns) < $columns - 1 && $position + 1 < $count) {
                        $position++;
                    }
                } elseif ($sequence === '[D') {
                    if (($position % $columns) > 0) {
                        $position--;
                    }
                }
            } elseif ($key === ' ') {
                $destinations[$position] = match ($destinations[$position]) {
                    'warm' => 'flush',
                    'flush' => 'normal',
                    default => 'warm',
                };
            } elseif ($key === "\n" || $key === "\r") {
                return $destinations;
            } elseif (strtolower($key) === 'q') {
                return null;
            }
        }
    } finally {
        $restoreTerminal();
    }
}

$destinations = chooseDestinations($services, $destinations);

if ($destinations === null) {
    echo "Operación cancelada.\n";
    exit(0);
}

$newWarm = [];
$newFlush = [];
$newDisabled = [];
foreach ($services as $index => $service) {
    if ($destinations[$index] === 'warm') {
        $newWarm[] = $service['value'];
    } elseif ($destinations[$index] === 'flush') {
        $newFlush[] = $service['value'];
    } else {
        $newDisabled[] = $service['value'];
    }
}

/**
 * Format a config value while preserving class references as ::class.
 */
function formatConfigValue(mixed $value): string
{
    if ($value === '__OCTANE_DEFAULT_SERVICES_TO_WARM__') {
        return '...Octane::defaultServicesToWarm()';
    }

    if (is_string($value) && preg_match('/^[A-Za-z_][A-Za-z0-9_\\\\]*$/', $value) && str_contains($value, '\\')) {
        return ltrim($value, '\\') . '::class';
    }

    return var_export($value, true);
}

function formatServiceArray(
    array $services,
    string $indent = '        ',
    array $disabled = []
): string
{
    $lines = array_map(
        static fn (mixed $service): string => $indent . formatConfigValue($service) . ",",
        $services
    );

    if ($disabled !== []) {
        $lines[] = $indent . '// Normal services (not in warm or flush)';
        foreach ($disabled as $service) {
            $lines[] = $indent . '// ' . formatConfigValue($service) . ',';
        }
    }

    if ($lines === []) {
        return '';
    }

    return "\n" . implode("\n", $lines) . "\n    ";
}

/**
 * Replace only the contents of a named top-level config array.
 */
function replaceConfigArray(
    string $source,
    string $name,
    array $values,
    array $disabled = []
): string
{
    $pattern = '/([\'"]' . preg_quote($name, '/') . '[\'"]\s*=>\s*)\[/';
    if (preg_match($pattern, $source, $match, PREG_OFFSET_CAPTURE) !== 1) {
        throw new RuntimeException("No se encontró el array '{$name}' en la configuración.");
    }

    $openingBracket = $match[0][1] + strlen($match[0][0]) - 1;
    // Locate the matching bracket while ignoring strings and comments.
    $suffix = substr($source, $openingBracket);
    $length = strlen($suffix);
    $depth = 0;
    $quote = null;
    $inComment = false;
    $closingIndex = null;

    for ($index = 0; $index < $length; $index++) {
        $character = $suffix[$index];
        $next = $suffix[$index + 1] ?? '';

        if ($inComment) {
            if ($character === "\n" && $inComment === 'line') {
                $inComment = false;
            } elseif ($character === '*' && $next === '/' && $inComment === 'block') {
                $inComment = false;
                $index++;
            }
            continue;
        }
        if ($quote !== null) {
            if ($character === '\\') {
                $index++;
            } elseif ($character === $quote) {
                $quote = null;
            }
            continue;
        }
        if (($character === "'" || $character === '"')) {
            $quote = $character;
        } elseif ($character === '/' && $next === '/') {
            $inComment = 'line';
            $index++;
        } elseif ($character === '/' && $next === '*') {
            $inComment = 'block';
            $index++;
        } elseif ($character === '[') {
            $depth++;
        } elseif ($character === ']') {
            $depth--;
            if ($depth === 0) {
                $closingIndex = $index;
                break;
            }
        }
    }

    if ($closingIndex === null) {
        throw new RuntimeException("No se pudo localizar el cierre de '{$name}'.");
    }

    $replacement = '[' . formatServiceArray($values, '        ', $disabled) . ']';
    return substr($source, 0, $openingBracket)
        . $replacement
        . substr($source, $openingBracket + $closingIndex + 1);
}

try {
    $source = replaceConfigArray($source, 'warm', $newWarm);
    $source = replaceConfigArray($source, 'flush', $newFlush, $newDisabled);
} catch (Throwable $exception) {
    fwrite(STDERR, $exception->getMessage() . "\n");
    exit(1);
}

$temporaryPath = $configPath . '.tmp.' . getmypid();
if (file_put_contents($temporaryPath, $source, LOCK_EX) === false || !rename($temporaryPath, $configPath)) {
    @unlink($temporaryPath);
    fwrite(STDERR, "No se pudo actualizar {$configPath}.\n");
    exit(1);
}

function executeCommand(string $command, string $workingDirectory): int
{
    $process = proc_open(
        $command,
        [
            0 => STDIN,
            1 => STDOUT,
            2 => STDERR,
        ],
        $pipes,
        $workingDirectory
    );

    if (!is_resource($process)) {
        return 1;
    }

    return proc_close($process);
}

echo "\nConfiguración actualizada: {$configPath}\n";
echo "Warm: " . count($newWarm)
    . " | Flush: " . count($newFlush)
    . " | Normales: " . count($newDisabled) . "\n";

$configOwner = null;
if (function_exists('posix_getpwuid')) {
    $ownerId = fileowner($configPath);
    if ($ownerId !== false) {
        $owner = posix_getpwuid($ownerId);
        $configOwner = $owner['name'] ?? null;
    }
}

if ($configOwner !== 'nginx') {
    echo "Intentando asignar {$configPath} al usuario nginx...\n";
    $ownerStatus = executeCommand(
        'sudo chown nginx:nginx ' . escapeshellarg($configPath),
        $applicationRoot
    );
    if ($ownerStatus !== 0) {
        echo "Aviso: no se pudo asignar el propietario nginx (código {$ownerStatus}).\n";
    }
}

$commands = [
    'sudo -u nginx php artisan config:clear',
    'sudo -u nginx php artisan config:cache',
    'supervisorctl restart all',
];

if ($skipCommands) {
    echo "\nOpción --skip-commands activa: se omitieron config:clear, config:cache y supervisorctl.\n";
    exit(0);
}

foreach ($commands as $command) {
    echo "\nEjecutando: {$command}\n";
    $status = executeCommand($command, $applicationRoot);
    if ($status !== 0) {
        echo "Aviso: el comando terminó con código {$status}.\n";
    }
}
