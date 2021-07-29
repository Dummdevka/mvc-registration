<?php

namespace application\controllers;
//session_start();
use application\core\Controller;
use application\core\View;
use application\lib\Session;

class LoginController extends Controller
{
    //Variable containing all the user info
    protected $user;
    public function AuthAction()
    {
        //Checking if the input is correct
        $data=$this->model->logging($_POST['email'], $_POST['pass']);
        //If no user returned then throw an error
        if(!is_array($data)){
            $this->view->render('Login error', [$data]);
        } else{
            //If it is a user, then set sessions
            $this->user = $data;
            //Start session
            Session::sessionStart($this->user[0]['email'], $this->user[0]['email']);
            View::redirect('../views/main/start', $this->user[0]);
        }
    }
}
