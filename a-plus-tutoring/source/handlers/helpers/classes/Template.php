<?php

namespace Source\Handlers\Helpers\Classes;

class Template
{
    public static function importViewStyleSheets(string $path)
    {
        $relativePath = '/core/assets/css/views/' . $path . '.css';

        if (file_exists(LOCAL_PATH . $relativePath)) {
            return '<link rel="stylesheet" href="' . SERVER_PATH . $relativePath . '">';
        }

        return '<!-- END - IMPORTED CSS STYLESHEETS -->';
    }

    public static function importViewModules(string $path)
    {
        $relativePath = '/core/assets/javascript/controllers/' . $path . 'Controller.js';

        if (file_exists(LOCAL_PATH . $relativePath)) {
            return '<script type="module" src="' . SERVER_PATH . $relativePath . '"></script>';
        }

        return '<!-- END - IMPORTED JS MODULES -->';
    }
}
