<?php
namespace application\models;

use application\core\Model;
class Main extends Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function displaySearch($key){
        $post = $_GET[$key];
        
        if($post==0){
            echo '<p class="no-res">Empty search</p>';
            exit();
        } else{
        $user = $this->searchUsers($post);
        return $user;
    }
    }
}