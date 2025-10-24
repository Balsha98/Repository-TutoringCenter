<?php

namespace Source\Classes\Core\Routing;

class Routes
{
    public static array $routes = [
        '/invalid' => [
            'path' => 'invalid/404',
            'title' => 'Invalid Route'
        ],
        '/' => [
            'path' => 'auth/login',
            'title' => 'Login'
        ],
        '/login' => [
            'path' => 'auth/login',
            'title' => 'Login'
        ],
        '/signup' => [
            'path' => 'auth/signup',
            'title' => 'Signup'
        ],
    ];
}
