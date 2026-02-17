<?php

namespace App\Core;

class Router
{
    private $routes = [];

    public function add($method, $path, $handler)
    {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'handler' => $handler
        ];
    }

    public function dispatch($method, $uri)
    {
        $uri = parse_url($uri, PHP_URL_PATH);
        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $route['path'] === $uri) {
                [$controllerName, $action] = explode('@', $route['handler']);
                $controllerName = "App\\Controllers\\$controllerName";
                $controller = new $controllerName();
                return $controller->$action();
            }
        }
        http_response_code(404);
        echo "404 Not Found";
    }
}
