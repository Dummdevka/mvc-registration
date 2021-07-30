<?php

require 'application/lib/Dev.php';

use application\core\Router;

spl_autoload_register(function($class){
    $path = str_replace('\\', '/', $class . '.php');
    if(file_exists($path)){
        require $path;
    }
});

session_start();
define("BASEDIR", __DIR__);
define("ROOT", '\\learning\\network\\public_html');
define("HOME","\\application\\views\\main\\start");
$obj = new Router();
$obj->run();