<?php
if (!empty($errors)) {
    extract($vars);
    require('application/views/account/register.php');
    foreach ($errors as $err) {
?>
        <p class="error">Invalid <?php echo $err ?></p>
    <?php
    
    }
    exit();
} 

?>

<!-- <p>Succesfully registered, <?php echo $_SESSION['username'] ?>!</p>
<br>
<a href="../account/signed">Go to my profile</a> -->