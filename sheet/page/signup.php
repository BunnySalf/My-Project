<link href="./css/signup.css" rel="stylesheet">
<section>
    <div class="form-container ">
        <h1>sign up</h1>
        <form action="test.php" method = "POST">
            <div class="control">
                <label for="name">Username</label>
                <input type="text" name = "name" id = "name">
            </div>
            <div class="control">
                <label for="email">Email</label>
                <input type="email" name = "email" id = "myInput" > 
            </div>
            <div class="control">
                <label for="psw">Password</label>
                <input type="password" name = "psw" id = "myInput" > 
            </div>
            <div class="controls">
                <input type="submit" value = "Register">
            </div>
            <div class="container-goto-sign-up">
                <a <?php if($page == "login") echo "active"; ?> href="?page=login">Back</a>
            </div>
        </form>
    </div>
</section>