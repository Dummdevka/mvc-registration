    
    <head>
    <script src="/learning/network/public_html/public/scripts/acl.js"></script>
    </head>
    <form action="<?php echo $this->makeURL('../account/signup'); ?>" method="post" class="register-form" enctype="multipart/form-data">
        <h2>Registration:</h2>
        <label for="nameInput">Name:</label>
        <input type="text" name="nameReg" id="nameInput" class="register-input" placeholder="Enter name..." value="<?php if(isset ($name)){
            echo $name;
        } ?>">
        <label for="nameInput">Email:</label>
        <input type="email" name="emailReg" id="emailInput" class="register-input" placeholder="Enter email..." value="<?php if(isset ($email)){
            echo $email;
        } ?>">
        <label for="nameInput">Password:</label>
        <input type="password" name="passReg" id="passInput" class="register-input" placeholder="Enter pass...">
        <label for="nameInput">Username:</label>
        <input type="text" name="userReg" id="userInput" class="register-input" placeholder="Enter username..." value="<?php if(isset ($username)){
            echo $username;
        } ?>">
        
        <select name="genderReg" id="selectInput" class="register-input">
        <option value="man"<?php if(isset ($gender)&& $gender == 'man'){
            echo 'selected';
        }?>>Man</option>
        <option value="woman"<?php if(isset ($gender)&& $gender == 'woman'){
            echo 'selected';
        }?>>Woman</option>
        <option value="none"<?php if(isset ($gender)&& $gender == 'none'){
            echo 'selected';
        }?>>Non-defined</option>
        </select>
        
        <input type="file" name="photo_url" id="photoInput" class="register-input">
        <button type="submit" class="register-button" id="registerSubmit" onclick="window.location.href='../account/signup'">Register!</button>
        <small class="register-sm"><a href="greeting-btn"><a href="/learning/network/public_html/account/login" class="register-link">log in</a></small>
    </form>
    <div class="register-info">
        <h1>Lorem</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias saepe incidunt eum repellendus nulla velit sint labore, ab aliquam. Voluptatem alias quam dignissimos non ratione numquam necessitatibus quas vitae libero?</p>
       
    </div>

    