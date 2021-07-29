<?php

namespace application\core;

use application\core\View;
use application\lib\Db;

abstract class Controller
{
    public $route;
    public $view;
    public $model;
    public $allow;
    public function __construct($route)
    {
        $this->route = $route;
        if(!isset($_COOKIE['status'])){
            setcookie('status', 'all');
        } 
        $this->checkAllow();
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);
        if ($this->route['controller'] == 'admin') {
            $this->view->layout = 'admin';
        }
    }
    public function loadModel($name)
    {
        $modelName = ucfirst($name);
        $path = 'application\models\\' . $modelName;
        if (class_exists($path) == TRUE) {
            return new $path;
        } else {
            View::error(404);
        }
    }
    public function checkAllow()
    {
        $status = $_COOKIE['status'];
        $file = 'application/acl/' . 'main.php';
        $this->allow = require $file;
        if ($this->isAllowed($status)) {
            return TRUE;
        } else {
            View::error(403);
            View::redirect('../views/main/start');
        }
    }
    public function isAllowed($key)
    {
        return in_array($this->route['action'], $this->allow[$key]);
    }
}
