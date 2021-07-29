    <head>
    <script src="acl.js"></script>
    </head>
    <form action="<?php echo $this->makeURL('../account/auth'); ?> " method="post" class="login-form register-form">
        <h2>Log in:</h2>
        <label for="nameInput">Email:</label>
        <input type="email" name="email" id="emailInput" class="register-input" placeholder="Some email...">
        <label for="nameInput">Password:</label>
        <input type="password" name="pass" id="passInput" class="register-input" placeholder="Some password...">
        
        <button type="submit" class="gr-btn register-button" id="loginSubmit">Register!</button>
        <small class="register-sm"><a href="/learning/network/public_html/main/register" class="register-link">register</a></small>
    </form>
    <div class="register-info">
        <h1>Lorem</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias saepe incidunt eum repellendus nulla velit sint labore, ab aliquam. Voluptatem alias quam dignissimos non ratione numquam necessitatibus quas vitae libero?</p>
       
    </div>
    <?php
