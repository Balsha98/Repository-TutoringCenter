<?php

namespace Source\Handlers\Core\Routing;

use Source\Handlers\Helpers\Classes\Session;

class Router
{
    public static function renderView()
    {
        Session::start();

        $uri = $_SERVER['REQUEST_URI'];
        $uriParts = $uri !== '/' ? explode('/', $uri) : [];
        $pathData = Routes::fetchRouteData(empty($uriParts) ? $uri : $uriParts[1]);

        return self::requireView($uriParts, $pathData);
    }

    private static function requireView(array $uriParts, array $pathData)
    {
        $viewData = $pathData;
        $id = (int) ($uriParts[2] ?? 0);

        ob_start();

        require_once __DIR__ . '/../../../../public/core/partials/header.php';
        require_once __DIR__ . '/../../../../public/core/views/' . $viewData['path'] . '.php';
        require_once __DIR__ . '/../../../../public/core/partials/footer.php';

        return ob_get_clean();
    }
}
