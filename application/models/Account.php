<?php

namespace application\models;

use application\core\Model;
use application\core\View;

class Account extends Model
{
    protected $name;
    protected $pass;
    protected $email;
    protected $user;
    protected $gender;
    protected $photoUrl;

    //Variables for input that should remain
    public $saving;
    public $errors;
    public function __construct()
    {
        parent::__construct();
        
    }


    public function validate()
    {
        $this->name = trim($_POST['nameReg']);
        $this->pass = trim($_POST['passReg']);
        $this->email = trim($_POST['emailReg']);
        $this->user = trim($_POST['userReg']);
        $this->gender = trim($_POST['genderReg']);
        if (empty($this->name) || empty($this->user) || empty($this->email) || empty($this->pass) || empty($this->gender)) {
            echo 'empty';
            exit();
        } else {
            $res = $this->isRegistered($this->email, $this->user);
            if (!empty($res)) {
                echo 'exists';
                exit();
            }
            if (isset($_POST['photo_url'])) {
                $this->photoUrl = $_POST['photo_url'];
            } else {
                $this->photoUrl = '/learning/network/public_html/public/uploads/default.png';
            }
            //Validating
            $this->saving['gender'] = $this->gender;
            if (!preg_match("/^[a-zA-Z]+$/", $this->name) || strlen($this->name) < 2 || strlen($this->name) > 25) {
                $this->errors[] = "name";
            } else {
                $this->saving['name'] = $this->name;
            }
            if (strlen($this->user < 8) || strlen($this->user) > 20) {
                $this->errors[] = "username";
            } else {
                $this->saving['username'] = $this->user;
            }
            if (filter_var($this->email, FILTER_VALIDATE_EMAIL) == FALSE) {
                $this->errors[] = "email";
            } else {
                $this->saving['email'] = $this->email;
            }
            if (strlen($this->pass) < 6 || strlen($this->pass) > 15) {
                $this->errors[] = "pass";
            } else {
                $pass = password_hash($this->pass, PASSWORD_DEFAULT);
                $this->saving['pass'] = $pass;
            }
            $this->loadPhoto();
            $this->saving['photo_url'] = $this->photoUrl;
        }
        if (empty($this->errors)) {

            return TRUE;
        }
    }
    public function loadPhoto()
    {
        $path = "..\public_html\\public";
        $Dirpath = "\uploads\\user-$this->user";
        $userdir = mkdir($path.$Dirpath);
        if(!$userdir){
            echo $path.$Dirpath;
            exit();
        } else{
        if (isset($_FILES['photo_url']) && preg_match("/image/", $_FILES['photo_url']['type'])) {
            $filename = $_FILES['photo_url']['tmp_name'];
            $nameImg = $Dirpath. '\\' . time() . '-' . $_FILES['photo_url']['name'];
                if(!move_uploaded_file($filename, $path.$nameImg)){
                    View::error("404");
                } else{
                    $this->photoUrl = $nameImg;
                }
        }
    }
} 
    public function logging($email, $pass)
    {
        $res = $this->checkLogin($email, $pass);
        if (empty($res)) {
            return 'Invalid email';
        } else {
            if (password_verify($pass, $res[0]['pass']) != TRUE) {
                return 'Invalid password';
            } else {
                return $res;
            }
        }
    }

    public function newPassVerify(){
        $oldPass = $_POST['oldpass'];
        $verify = $_SESSION['pass'];
        if(empty ($oldPass)){
            return 'Enter your old pass';
        }
        if(!password_verify($oldPass, $verify)){
            return 'Incorrect old pass';
        } else{
            $newPass = $_POST['newPass'];
            if (strlen($newPass) < 6 || strlen($newPass) > 15){
                return 'Incorrect new pass';
            } else{
                return TRUE;
            }
        }
    }
}
