<?php

namespace application\core;

use application\controllers\ControllerMain as ControllerMain;
//use application\controllers\ControllerPosts as ControllerPosts;

class Route
{
    static function start()
    {
        $ControllerName = 'Main';
        $ActionName = 'Index';

        if ($_SERVER['REQUEST_URI'] == '/') {
            $ControllerName = ControllerMain::class;
            $ActionName = 'ActionMain';
        } elseif ($_SERVER['REQUEST_URI'] == '/posts') {
            $ControllerName = ControllerMain::class;
            $ActionName = 'ActionPosts';
        } elseif ($_SERVER['REQUEST_URI'] == '/authors') {
            $ControllerName = ControllerMain::class;
            $ActionName = 'ActionAuthors';
        }

        $controller = new $ControllerName();
        if (method_exists($controller, $ActionName)) {
            $controller->$ActionName();
        } else {
            Route::ErrorPage404();
        }

    }

    function ErrorPage404()
    {
        print_r('This page isnt exist');
    }
}