<?php

namespace Source\Classes\Core\Routing;

class Router
{
    public static function renderView()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $pathData = Routes::$routes[$uri] ?? '/invalid';

        // Guard clause: reset.
        if (!is_array($pathData)) {
            $pathData = Routes::$routes[$pathData];
        }

        $path = $pathData['path'];
        $title = $pathData['title'];

        ob_start();

        require_once __DIR__ . '/../../../../public/core/partials/header.php';
        require_once __DIR__ . '/../../../../public/core/views/' . $path . '.php';
        require_once __DIR__ . '/../../../../public/core/partials/footer.php';

        return ob_get_clean();
    }
}
