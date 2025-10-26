<?php

namespace Source\Handlers\Helpers\Classes;

class Template
{
    public static function importViewStyleSheet(string $path)
    {
        $relativePath = '/core/assets/css/views/' . $path . '.css';

        if (file_exists(LOCAL_PATH . $relativePath)) {
            return '<link rel="stylesheet" href="' . SERVER_PATH . $relativePath . '">';
        }

        return '';
    }

    public static function importViewModule(string $path)
    {
        $relativePath = '/core/assets/javascript/controllers/' . $path . 'Controller.js';

        if (file_exists(LOCAL_PATH . $relativePath)) {
            return '<script type="module" src="' . SERVER_PATH . $relativePath . '"></script>';
        }

        return '';
    }

    public static function importPartials(string $path, string $extension)
    {
        $dependencies = JSON::decode(file_get_contents(LOCAL_PATH . '/core/assets/dependencies/imports.json'));

        $return = '';
        foreach ($dependencies as $viewDependencies) {
            if (isset($viewDependencies[$path])) {
                foreach ($viewDependencies[$path][$extension] as $relativePath) {
                    if ($extension === 'css') {
                        $return .= '<link rel="stylesheet" href="' . SERVER_PATH . $relativePath . '.' . $extension . '">';

                        continue;
                    }

                    $return .= '<script type="module" src="' . SERVER_PATH . $relativePath . '.' . $extension . '"></script>';
                }
            }
        }

        return $return;
    }
}
