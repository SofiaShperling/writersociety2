<?php
require '../autoloader.php';
use Psr4AutoloaderClass\Psr4AutoloaderClass;
$Psr4AutoloaderClass = new Psr4AutoloaderClass();
$autoloader = "register";
$Psr4AutoloaderClass->register();

use application\core\Route;
use application\model\Model;
use application\views\View;
use application\controllers\Controller;
Route::start();