<?php
class Router
{
    private $routes = [];

    public function addRoute($method, $path, $action)
    {
        $this->routes[] = ['method' => $method, 'path' => $path, 'action' => $action];
    }

    public function dispatch()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $requestUri = $_SERVER['REQUEST_URI'];

        foreach ($this->routes as $route) {
            $pattern = "#^" . $route['path'] . "$#";
            if ($route['method'] === $method && preg_match($pattern, $requestUri, $matches)) {
                array_shift($matches);
                $action = $route['action'];
                call_user_func_array($action, $matches);
                return;
            }
        }

        echo '404 - Página no encontrada';
    }
}
