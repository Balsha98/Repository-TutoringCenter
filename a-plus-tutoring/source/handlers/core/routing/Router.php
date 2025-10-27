<?php

namespace Source\Handlers\Core\Routing;

use Source\Handlers\Helpers\Classes\Session;

class Router
{
    public static function renderView()
    {
        Session::start();

        $uri = $_SERVER['REQUEST_URI'];
        $baseUri = $uri === '/' ? $uri . 'login' : $uri;
        $uriParts = explode('/', $baseUri);
        $pathData = Routes::fetchRouteData($uriParts[1]);

        if ($pathData['path'] !== 'invalid/404') {
            if (Session::is('account-active')) {
                if ($uriParts[1] !== 'login' && $uriParts[1] !== 'signup') {
                    $pathData['path'] .= Session::get('account-type');
                } else if ($uriParts[1] === 'login' || $uriParts[1] === 'signup') {
                    header('Location: /dashboard');
                }
            }
        }

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
