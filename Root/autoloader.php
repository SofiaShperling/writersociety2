<?php
namespace Psr4AutoloaderClass;

class Psr4AutoloaderClass{

    public function register()
    {
        spl_autoload_register(function ($name) {
            $name = '../' .str_replace('\\', DIRECTORY_SEPARATOR, $name) . '.php';
            include $name;
        });
    }
}