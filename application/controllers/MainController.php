<?php
namespace application\controllers;
use application\core\Controller;
class MainController extends Controller{
   public function startAction(){
       $this->view->render($this->route);
   }
}