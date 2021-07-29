
<?php

use application\core\View;
use application\lib\Session;

Session::lastActivity();
if( !isset($_SESSION['email']) || !isset($_SESSION['username']) ){
    
    setcookie('status','all');
    View::redirect('./main/greeting');
} else{
    
    setcookie('status','auth');
    View::redirect('./account/signed');
}
