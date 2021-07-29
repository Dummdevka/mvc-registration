<?php
$err = implode(',', $vars);
require('application/views/account/login.php');
?>
<p class="error">Unable to login: <?php echo $err ?></p>