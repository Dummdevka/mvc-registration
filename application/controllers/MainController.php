<?php
namespace application\controllers;
use application\core\Controller;
class MainController extends Controller{
   public function startAction(){
       $this->view->render('Main page');
   }
   public function greetingAction(){
    $this->view->render('Main page');
}
   public function searchAction(){
    $this->view->render('Search');
    //$this->model->displaySearch();
   }
   public function registerAction(){
       $this->view->render('Signup');
   }
   public function loginAction(){
    $this->view->render('Auth');
}
}