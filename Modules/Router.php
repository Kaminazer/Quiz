<?php
namespace Modules;
class Router
{
    public static function route()
    {
        $controllerName = $actionName = 'Index';

        $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

        if ($path) {
            $segments = explode('/', $path);
            $controllerName = array_shift($segments);
        }
        $controllerClassName = ucfirst($controllerName) . 'Controller';
        $controllerFullClassName = "\Controller\\".ucfirst($controllerName) . 'Controller';
        $controllerFileName = __DIR__ . '/../Controller/' . $controllerClassName . '.php';

        if (file_exists($controllerFileName)) {
            include $controllerFileName;

            $controllerInstance = new $controllerFullClassName();

            if (!empty($segments)) {
                $actionName = array_shift($segments);
            }

            if (method_exists($controllerInstance, $actionName)) {
                $parameters = self::prepareParams($segments ?? []);
                call_user_func_array([$controllerInstance, $actionName], $parameters);
            } else {
                http_response_code(404);
                echo 'Not found';
            }
        } else {
            http_response_code(404);
            echo 'Not found';
        }
    }

    private static function prepareParams(array $segments)
    {
        $params = [];
        foreach ($segments as $key => $segment) {
            if ($key % 2 === 0) {
                $name = $segment;
            } else {
                $value = $segment;
                $params[$name] = $value;
            }
        }
        return $params;
    }
}