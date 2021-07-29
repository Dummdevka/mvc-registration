
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\learning\network\public_html\public\styles\style.css">
    <link rel="stylesheet" href="\learning\network\public_html\public\styles\default.css">
    <link rel="stylesheet" href="\learning\network\public_html\public\styles\greeting.css">
    <link rel="stylesheet" href="\learning\network\public_html\public\styles\register.css">
    <title><?php


use application\core\View;
echo $title; 
?></title>
</head>
<body>
    <header>
            <ul class="header-li">
                <li><a href="#" class="header-link">Contacts</a></li>
                <li><a href="#" class="header-link">About</a></li>
                <li><a href="#" class="header-link">News</a></li>
</ul>
            <form action="" method="get" class="header-form">
                <input type="search" name="main/search" placeholder="Username...">
                <button type="submit" class="btn-gr header-search-btn" onclick="window.location.href='../main/search'">Search</button>
            </form>
    </header>
    <div class="container">
        <img src="/learning/network/public_html/public/images/main/earth.png" alt="" class="bg-img" height="500">
     <?php
     
     if(!file_exists('application/views/' . $this->path . '.php')){
          View::error(404);
          
      } else{
     require 'application/views/' . $this->path . '.php';}
    ?>
    </div>
    <br>
    <br>
    <footer>
        <div class="support">
            <ul class="footer-support">
                <li class="footer-h">
                    <h4>Support</h4>
                </li>
                <li  id="link-support"><a href="#" class="footer-link">Contacts</a></li>
                <li  id="link-call"><a href="#" class="footer-link">Call us</a></li>
            </ul>
        </div>
        <span class="line"></span>
        <div class="more">
            <ul class="footer-more">
                <li class="footer-h">
                    <h4>More</h4>
                </li>
                <li  id="link-security"><a href="#"class="footer-link">Our security</a></li>
                <li  id="link-docs"><a href="#" class="footer-link">Documentation</a></li>
            </ul>
        </div>
        <span class="line"></span>
        <div class="contr">
            <ul class="footer-contribute">
                <li class="footer-h">
                    <h4>Contribute</h4>
                </li>
                <li  id="link-web"><a href="#" class="footer-link">Web</a></li>
                <li  id="link-financial"><a href="#" class="footer-link">Financial</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>