<?php

namespace application\core;

use application\controllers\ControllerHomePage as ControllerHomePage;
use application\controllers\ControllerPosts as ControllerPosts;
use application\controllers\ControllerAuthors as ControllerAuthors;

class Route
{
    static function start()
    {
        $ControllerName = 'Main';
        $ActionName = 'Index';

        if ($_SERVER['REQUEST_URI'] == '/') {
            $ControllerName = ControllerHomePage::class;
            $ActionName = 'ActionMain';
        } elseif ($_SERVER['REQUEST_URI'] == '/posts') {
            $ControllerName = ControllerPosts::class;
            $ActionName = 'ActionMain';
        } elseif ($_SERVER['REQUEST_URI'] == '/authors') {
            $ControllerName = ControllerAuthors::class;
            $ActionName = 'ActionMain';
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