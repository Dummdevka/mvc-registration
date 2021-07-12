<?php
namespace application\core;

class Router{
    protected $routes = [];
    protected $params = [];
    public function __construct()
    {
        $arr = require 'application/config/routes.php';
          foreach($arr as $key => $val){
            $this->add($key, $val);
        }
    }
    // Adding routes to the class
    public function add($route, $params){
         $route = "#" . $route . "$#";
         $this->routes[$route] = $params;
     
    }
    // Seeking through the URL
    public function match(){
       $url = trim($_SERVER['REQUEST_URI'],'/');
       foreach($this->routes as $route=>$params){
            if(preg_match($route, $url, $match)){
              $this->params = $params;
              return true;
            }
       } 
       //IMPORTANT! IF none of the routes match, return FALSE OUTSIDE of the IF
       return false;
    }
    public function run(){
       if($this->match()==true){
           $controller = 'application\controllers\\' . ucfirst($this->params['controller'] . 'Controller');
           if(!class_exists($controller)){
               echo $controller;
               exit;
           } else{
               $action = $this->params['action'] . 'Action';
               if(!method_exists($controller, $action)){
                   echo "No method";
                   exit;
               } else{
                   //debug($controller);
                   $controller = new $controller($this->params);
                   $controller->$action();
               }
           }
       } else{
           echo 'Not found';
       }
    }
}