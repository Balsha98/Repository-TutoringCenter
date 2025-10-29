<?php

namespace Api\Assets\Routing;

class Routes
{
    private static array $routes = [
        'GET' => [],
        'POST' => [
            'auth/login',
            'auth/signup'
        ],
        'PUT' => [],
        'DELETE' => []
    ];

    public static function checkRouteData(string $method, string $route)
    {
        return in_array($route, self::$routes[$method]);
    }
}
