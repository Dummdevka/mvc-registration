<?php
namespace application\controllers;
use application\core\Controller;

class NewsController extends Controller{
   public function showAction(){
       $this->view->render('1');
   }
   public function listAction(){
    $this->view->render('2');
}
}