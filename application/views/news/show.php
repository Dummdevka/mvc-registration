<?php

if(empty($vars)){
    debug($vars);
    ?>
    <p>No news to show!</p>
    <?php
} else{
    ?>
    <div class="news">
        <?php
    foreach ($vars as $post){
        ?>
        <div class="post">
            
                <?php
                echo $post;
                ?>
            
        </div>
        <br>
        <br>
        <br>
        <?php
    }
    ?>
    </div>
    <?php
}
