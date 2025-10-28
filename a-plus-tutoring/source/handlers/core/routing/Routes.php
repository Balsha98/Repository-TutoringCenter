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
        'logout' => [
            'path' => 'auth/logout',
            'title' => 'Logout'
        ],
        'signup' => [
            'path' => 'auth/signup',
            'title' => 'Signup'
        ],
        'dashboard' => [
            'path' => 'dashboard/',
            'title' => 'Dashboard'
        ],
        'reports' => [
            'path' => 'reports/',
            'title' => 'Reports'
        ]
    ];

    public static function fetchRouteData(string $route)
    {
        return self::$routes[!array_key_exists(
            $route, self::$routes
        ) ? 'invalid' : $route];
    }
}
