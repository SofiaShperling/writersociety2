<?php
require_once 'models/Model.php';
require_once 'views/View.php';
require_once 'controllers/Controller.php';
require_once 'core/route.php';
require '../autoloader.php';
use Psr4AutoloaderClass\Psr4AutoloaderClass;
$Psr4AutoloaderClass = new Psr4AutoloaderClass();
$autoloader = "register";
$Psr4AutoloaderClass->register();
Route::start();