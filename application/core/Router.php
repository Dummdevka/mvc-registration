<?php

namespace application\core;

use application\core\View;

class Router
{
    protected $routes = [];
    protected $params = [];
    public function __construct()
    {
        if (!file_exists('application/config/routes.php')) {
            View::error(403);
        }
        $arr = require 'application/config/routes.php';
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }
    }

    public static function myUrlEncode($string)
    {
        $entities = array('%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
        $replacements = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
        return str_replace($entities, $replacements, urlencode($string));
    }

    // Adding routes to the class
    public function add($route, $params)
    {
        $route = "#" . $route . "$#";
        $this->routes[$route] = $params;
    }
    // Seeking through the URL
    public function match()
    {
        if (empty($_GET)) {
            $call = trim($_SERVER['REQUEST_URI'], '/');
            
        } else {
            $call = key($_GET);
        }
        
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $call, $match)) {
                $this->params = $params;
                return true;
            } 
        }
        //IMPORTANT! IF none of the routes match, return FALSE OUTSIDE of the IF
        return false;
    }
    public function run()
    {
        if ($this->match() == true) {
            $controller = 'application\controllers\\' . ucfirst($this->params['controller'] . 'Controller');
            if (!class_exists($controller)) {

                View::error(404);
            } else {
                $action = $this->params['action'] . 'Action';
                if (!method_exists($controller, $action)) {

                    View::error(404);
                } else {
                    $controller = new $controller($this->params);
                    $controller->$action();
                }
            }
        } else{
            View::error(404);
        }
    }
}
