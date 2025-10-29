<?php

namespace Api\Assets\Routing;

use Api\Assets\Controllers\AbstractApiController;
use Source\Handlers\Helpers\Classes\{JSON, Session};
use Exception;

class Router
{
    private static int $id;
    private static string $method;
    private static array $data;
    private static AbstractApiController $controller;

    public static function processRequest()
    {
        Session::start();

        header('Content-Type: application/json');

        try {
            $uri = $_SERVER['REQUEST_URI'];
            $uriParts = explode('/', $uri);
            $requestView = $uriParts[2] . '/' . $uriParts[3];

            self::$id = (int) ($uriParts[4] ?? 0);
            self::$method = $_SERVER['REQUEST_METHOD'];
            self::$data = JSON::decode(file_get_contents('php://input')) ?? [];

            // Guard clause: route does not exist.
            if (!Routes::checkRouteData(self::$method, $requestView)) {
                throw new Exception('Error accessing missing API route.');
            }

            $namespace = 'Api\\Assets\\Controllers\\' . ucfirst($uriParts[2]) . '\\';
            $classPath = $namespace . ucfirst($uriParts[3]) . 'ApiController';
            self::$controller = new $classPath();

            $response = self::handleRequest();
        } catch (Exception $e) {
            return JSON::encode([
                'status' => 'error',
                'response' => [
                    'title' => 'Unexpected API Error',
                    'message' => $e->getMessage()
                ]
            ]);
        }

        return JSON::encode($response);
    }

    private static function handleRequest()
    {
        self::$controller->setDbInstance(Session::getDb());

        $response = match (self::$method) {
            'GET' => self::handleGET(),
            'POST' => self::handlePOST(),
            'PUT' => self::handlePUT(),
            'DELETE' => self::handleDELETE()
        };

        return $response;
    }

    private static function handleGET()
    {
        if (self::$id !== 0) {
            self::$controller->setID(self::$id);
        }

        return self::$controller->get();
    }

    private static function handlePOST()
    {
        if (empty(self::$data)) {
            throw new Exception('Error fetching POST data.');
        }

        self::$controller->setData(self::$data);

        return self::$controller->post();
    }

    private static function handlePUT()
    {
        if (self::$id === 0) {
            throw new Exception('Error fetching PUT id.');
        }

        self::$controller->setID(self::$id);

        if (empty(self::$data)) {
            throw new Exception('Error fetching PUT data.');
        }

        self::$controller->setData(self::$data);

        return self::$controller->put();
    }

    private static function handleDELETE()
    {
        if (self::$id === 0) {
            throw new Exception('Error fetching DELETE id.');
        }

        self::$controller->setID(self::$id);

        return self::$controller->delete();
    }
}
