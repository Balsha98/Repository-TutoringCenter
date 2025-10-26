<?php

namespace Source\Handlers\Core\Routing;

class Routes
{
    private static array $routes = [
        'invalid' => [
            'path' => 'invalid/404',
            'title' => 'Invalid Route'
        ],
        '/' => [
            'path' => 'auth/login',
            'title' => 'Login'
        ],
        'login' => [
            'path' => 'auth/login',
            'title' => 'Login'
        ],
        'signup' => [
            'path' => 'auth/signup',
            'title' => 'Signup'
        ],
        'dashboard' => [
            'path' => 'dashboard/',
            'title' => 'Dashboard'
        ]
    ];

    public static function fetchRouteData(string $route)
    {
        return self::$routes[!array_key_exists(
            $route, self::$routes
        ) ? 'invalid' : $route];
    }
}
