<?php 
$pageTitle = "Login";
$css = "./../assets/css/index.css";
require_once $_SERVER['DOCUMENT_ROOT'] . "/shop/include/header.php";
?>
    <div class="login_page">
        <div class="login_container">
            <div class="login_wrapper">
                <h1 class="login_heading">Login</h1>
                <form class="login_form" method="POST" action="<?=$_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] ?>/shop/backend/login_process.php">
                    <label class="form_label" for="username">Username:</label>
                    <input class="form_input" type="text" name="username" id="username" required><br>
                
                    <label class="form_label" for="password">Password:</label>
                    <input class="form_input" type="password" name="password" id="password" required><br>
                
                    <input class="login_button" type="submit" value="Login">
                </form>
                <a class="create_account_link" href="<?= $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] ?>/shop/auth/signup.php">Create account?</a>
            </div>
        </div>
    </div>
    <?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/shop/include/footer.php";
?>