<?php
//require  '../../autoloader.php';
namespace application\core;
use application\controllers\ControllerMain;

class Route
{
    static function start()
    {
        $ControllerName = 'Main';
        $ActionName = 'Index';
        if ((explode('/', $_SERVER['REQUEST_URI'])) == 'posts') {
            $ControllerName = 'Posts';
        }

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($routes[1])) {
            $ControllerName = $routes[1];
        }

        if (!empty($routes[2])) {
            $ActionName = $routes[2];
        }

        $ControllerName = 'Controller' . $ControllerName;
        $ActionName = 'Action' . $ActionName;

        var_dump($ControllerName);
        $controller = new ControllerMain();
        $action = $ActionName;

        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            Route::ErrorPage404();
        }

    }

    function ErrorPage404()
    {
        print_r('This page isnt exist');
    }
}