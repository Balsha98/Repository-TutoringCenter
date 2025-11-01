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
        $pathParts = explode('/', $pathData['path']);

        // Process dynamic routing.
        if ($pathData['path'] !== 'auth/logout') {
            if ($pathData['path'] !== 'invalid/404') {
                if (Session::is('account_active')) {
                    if ($pathParts[0] !== 'auth') {
                        $pathData['path'] .= Session::get('account_role');
                    } else if ($pathParts[0] === 'auth') {
                        if ($pathParts[1] !== 'logout') {
                            self::redirectTo('dashboard');
                        }
                    }
                } else if ($pathParts[0] !== 'auth') {
                    self::redirectTo('login');
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

    public static function redirectTo(string $route)
    {
        header('Location: /' . $route);
    }
}
