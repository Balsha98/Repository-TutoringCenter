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
        $baseUriParts = explode('/', $baseUri);
        array_shift($baseUriParts);
        $route['self'] = $baseUri;

        // Check for route ID.
        $lastPartIndex = count($baseUriParts) - 1;
        if (is_numeric($baseUriParts[$lastPartIndex])) {
            $route['id'] = array_pop($baseUriParts);

            $baseUri = '';
            foreach ($baseUriParts as $part) {
                $baseUri .= '/' . $part;
            }
        }

        $route['data'] = Routes::fetchRouteData($baseUri);
        $pathParts = explode('/', $route['data']['path']);

        // Process dynamic routing.
        if ($route['data']['path'] !== 'auth/logout') {
            if ($route['data']['path'] !== 'invalid/404') {
                if (Session::is('account_active')) {
                    if ($pathParts[0] !== 'auth') {
                        $route['data']['path'] .= Session::get('account_role');
                    } else if ($pathParts[0] === 'auth') {
                        if ($pathParts[1] !== 'logout') {
                            self::redirectTo('/dashboard');
                        }
                    }
                } else if ($pathParts[0] !== 'auth') {
                    self::redirectTo('/login');
                }
            }
        }

        return self::requireView($route);
    }

    private static function requireView(array $route)
    {
        ob_start();

        extract($route);

        require_once __DIR__ . '/../../../../public/core/partials/header.php';
        require_once __DIR__ . '/../../../../public/core/views/' . $data['path'] . '.php';
        require_once __DIR__ . '/../../../../public/core/partials/footer.php';

        return ob_get_clean();
    }

    public static function redirectTo(string $route)
    {
        header('Location: ' . $route);
    }
}
