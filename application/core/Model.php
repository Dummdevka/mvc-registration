<?php

namespace application\core;

use application\lib\Db;

abstract class Model
{
    public $dbh;
    public function __construct()
    {
        $this->dbh = new Db();
    }
    public function isRegistered($email, $username){
        $sql = "SELECT * FROM users WHERE email=:email OR username=:username";
        $vals = array('email'=>$email, 'username' => $username);
        $result = $this->dbh->insert($sql, $vals);
        return $result;

    }
    public function addUser($vars){
        $sql = "INSERT INTO users (name, email, pass, username, gender, photo_url) VALUES (:name, :email, :pass, :username, :gender, :photo_url)";
        $result = $this->dbh->insert($sql, $vars);
        return $result;
    }
    public function removeUser(){
        $sql = "DELETE FROM users WHERE username = :username AND email=:email";
        $vars = array(
            'username' => $_SESSION['username'],
            'email' => $_SESSION['email']
        );
        $result = $this->dbh->insert($sql, $vars);
        return $result;
    }
    public function checkLogin($email, $pwd){
        $sql = "SELECT * FROM users WHERE email=:email";
        $arr = array('email' => $email);
        $result = $this->dbh->insert($sql, $arr);
        return $result;
}
    public function searchUsers($post){
        
        $sql = "SELECT * FROM users WHERE name=:name";
        $name = array('name' => $post);
        $result = $this->dbh->insert($sql, $name);
        return $result;
    }
    public function newpass($newpass, $email){
        $sql = "UPDATE users SET pass=:pass WHERE email = :email";
        $vars = array(
            'pass' => $newpass,
            'email' => $email
        );
        $result = $this->dbh->insert($sql, $vars);
        return $result;
    }
    }

