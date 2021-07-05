<?php

class Route
{
    static function start()
    {
        $controllerName = 'Main';
        $actionName = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($routes[1])) {
            $controllerName = $routes[1];
        }

        if (!empty($routes[2])) {
            $actionName = $routes[2];
        }

        $modelName = 'Model_' . $controllerName;
        $controllerName = 'Controller_' . $controllerName;
        $actionName = 'action_' . $actionName;
        
        spl_autoload_register(function ($modelName) {
            if (file_exists(strtolower($modelName) . '.php')) {
            include strtolower($modelName) . '.php';
            }
        });

        spl_autoload_register(function ($controllerName) {
            if (file_exists(strtolower($controllerName) . '.php')) {
                include strtolower($controllerName) . '.php';
            } else {
                Route::ErrorPage404();
            }
        });

        $controller = new $controllerName;
        $action = $actionName;

        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            Route::ErrorPage404();
        }

    }

    function ErrorPage404()
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . '404');
    }
}