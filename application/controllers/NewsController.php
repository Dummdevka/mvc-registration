<?php
namespace application\controllers;
use application\core\Controller;

class NewsController extends Controller{
   public function showAction(){
       $news = $this->model->readFiles();
       $this->view->render('Show news', $news);
   }
   public function listAction(){
    $fact = $this->model->getFacts();
    $this->view->render('Random fact', $fact);
}
    public function searchAction(){
        
    }
}