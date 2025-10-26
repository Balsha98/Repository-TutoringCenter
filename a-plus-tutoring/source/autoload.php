<?php

$directories = require_once __DIR__ . '/handlers/helpers/scripts/directories.php';

spl_autoload_register(function ($class) {
    global $directories;
    $classDirectory = '';

    // Check each folder;
    foreach ($directories as $directory) {
        if (str_contains($class, $directory)) {
            $classDirectory = str_replace('\\', '/', strtolower($directory));
        }
    }

    // Guard clause.
    if (!$classDirectory) {
        return;
    }

    // Filter out class name.
    $namespaceParts = explode('\\', $class);
    $className = $namespaceParts[count($namespaceParts) - 1];
    $isApiClass = str_contains($class, 'Api');

    // Filter out final class path.
    $classPath = __DIR__ . '/' . ($isApiClass ? '../public/' : '') . $classDirectory . '/' . $className . '.php';

    if (file_exists($classPath)) {
        require_once $classPath;
    }
});
