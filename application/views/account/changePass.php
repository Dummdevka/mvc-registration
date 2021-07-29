<form action="<?php echo $this->makeURL('../account/newpass'); ?>" class="register-form" method="post">
    <input type="text" name="oldPass" class="register-input" placeholder="Enter your old password">
    <input type="text" name="newPass" class="register-input" placeholder="Enter your new password">
    <button type="submit" class="register-btn btn-gr" >Change</button>
</form>