<?php

namespace application\core;

class View
{
  public $path;
  public $route;
  public $layout = 'default';
  public function __construct($route)
  {
    $this->route = $route;
    $this->path = $route['controller'] . '/' . $route['action'];
  }
  public function render($title, $vars = [], $errors = [])
  {
    require 'application/views/layouts/' . $this->layout . '.php';
  }
  public static function error($err)
  {
    debug($_COOKIE);
    require 'application/views/errors/' . $err . '.php';
    exit;
  }
  public static function redirect($path, $vars = [])
  {
    header('Location:' . $path);
  }
  public function makeURL($path = "")
  {
    if (is_array($path)) {
      return (implode("/", $path));
    }
    return ($path);
  }
}
