<?php
    use application\models\Main;

    $obj = new Main();
    $res = $obj->displaySearch('main/search');
    foreach ($res as $user){
?>
<div class="user">
    <img src="<?php echo $user['photo_url']?>" alt="" class="user-img" height="100" width="100">
    <h3><a href="#" class="search-link">
        <?php
            echo $user['name'];
        ?>
    </a></h3>
    <p>
        <?php
            echo $user['email'];
        ?>
    </p>
</div>
<?php
    }
?>
<button type="button" class="btn-gr unset-btn" onclick="window.location.href='../start'">Reset search</button>