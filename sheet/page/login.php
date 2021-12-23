<?php
  $page = $_GET["page"];
?>
<link href="./css/login.css" rel="stylesheet">
<section>
    <div class="form-container">
        <h1>Login form</h1>
        <form action="?page=test" method = "POST">
            <div class="control">
                <label for="name">Username</label>
                <input type="text" name = "name" id = "name">
            </div>
            <div class="control">
                <label for="psw">Password</label>
                <input type="password" name = "psw" id = "myInput" > 
            </div>
            <div class="controls">
                <input type="submit" value = "Login">
            </div>
            <div class="container-goto-sign-up">
                <a <?php if($page == "signup") echo "active"; ?> href="?page=signup">Sign Up</a>
            </div>
        </form>
    </div>
</section>

