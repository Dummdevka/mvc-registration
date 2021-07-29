
<head>
    <script src="/learning/network/public_html/public/scripts/acl.js"></script>
    </head>

<?php

$name = $_SESSION['name'];
$username = $_SESSION['username'];
$photo = $_SESSION['photo_url'];

?>

<h3>Hey, <?php echo $username ?></h3>
<img src="<?php echo "/learning/network/public_html/public/".$photo ?>" alt="userphoto" height="200">

<button type="button" class="btn-gr"><a href="./account/logout">Logout</a></button>
<button type="button" class="btn-gr" ><a href="../account/delete"onclick="alert('Are you sure?')">Delete profile</a></button>
<button type="button" class="btn-gr"><a href="/learning/network/public_html/application/views/account/changePass">Change pass</a></button>
<?php
debug($_COOKIE);