<?php

namespace Source\Handlers\Core\Routing;

class Routes
{
    private static array $routes = [
        '/' => [
            'path' => 'auth/login',
            'title' => 'Login'
        ],
        '/dashboard' => [
            'path' => 'dashboard/',
            'title' => 'Dashboard'
        ],
        '/invalid' => [
            'path' => 'invalid/404',
            'title' => 'Invalid Route'
        ],
        '/login' => [
            'path' => 'auth/login',
            'title' => 'Login'
        ],
        '/logout' => [
            'path' => 'auth/logout',
            'title' => 'Logout'
        ],
        '/reports' => [
            'path' => 'reports/',
            'title' => 'Reports'
        ],
        '/reports/majors' => [
            'path' => 'reports/majors/',
            'title' => 'Majors Report'
        ],
        '/reports/ratings' => [
            'path' => 'reports/ratings/',
            'title' => 'Ratings Report'
        ],
        '/reports/years' => [
            'path' => 'reports/years/',
            'title' => 'Years Report'
        ],
        '/signup' => [
            'path' => 'auth/signup',
            'title' => 'Signup'
        ]
    ];

    public static function fetchRouteData(string $route)
    {
        return self::$routes[!array_key_exists(
            $route, self::$routes
        ) ? '/invalid' : $route];
    }
}
