<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Session;
use application\core\View;
class AccountController extends Controller
{
    protected $user;

        public function signupAction()
        {
            if ($this->model->validate() == TRUE) {
                $this->model->addUser($this->model->saving);
                View::redirect('../views/main/login');
            } else{
                
                View::redirect('../main/register', $this->model->saving, $this->model->errors);
            }
            
        }

    public function authAction(){
            //Checking if the input is correct
        $data=$this->model->logging($_POST['email'], $_POST['pass']);
            //If no user returned then throw an error
        if(!is_array($data)){
            View::redirect('/learning/network/public_html/application/views/main/start');
        } else{
            //If it is a user, then set sessions
            $this->user = $data;
            
            //Start session
            Session::sessionStart($this->user[0]);
            
            View::redirect('../views/main/start');
        }
    }
    public function logoutAction(){
        Session::sessionEnd();
        setcookie('status','all');
        View::redirect('../views/main/start');
    }
    public function signedAction(){
        $this->view->render('Profile', $this->user);
    }
    public function deleteAction(){

        $this->model->removeUser();
        Session::sessionEnd();
        View::redirect('/learning/network/public_html/application/views/main/start');
    }
    public function changePassAction(){
        $this->view->render('New pass');
    }
    public function newpassAction(){
        if($this->model->newPassVerify() == TRUE){
            $pass = password_hash($_POST['newPass'], PASSWORD_DEFAULT);
            $this->model->newPass($pass, $this->user['email']);
            $this->user['pass'] = $pass;
            Session::sessionEnd();
            Session::sessionStart($this->user);
            View::redirect('/learning/network/public_html/application/views/main/start');
        }
    }
}
