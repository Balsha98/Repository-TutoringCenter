<?php

namespace Source\Handlers\Helpers\Classes;

class Template
{
    public static function importViewStyleSheets(string $path)
    {
        $relativePath = '/core/assets/css/views/' . $path . '.css';

        if (file_exists(FOLDER_PATH . $relativePath)) {
            return '<link rel="stylesheet" href="' . SERVER_PATH . $relativePath . '">';
        }

        return '<!-- END - IMPORTED CSS STYLESHEETS -->';
    }

    public static function importViewModules(string $path) {}
}
