<?php 
$pageTitle = "Sign up";
$css = "./../assets/css/index.css";
require_once $_SERVER['DOCUMENT_ROOT'] . "/shop/include/header.php";
?>
    <div class="login_page">
        <div class="login_container">
            <div class="login_wrapper">
                <h1 class="login_heading">Sign up</h1>
                <form class="login_form" method="POST" action="<?=$_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] ?>/shop/backend/register_process.php">
                    <label class="form_label" for="firstName">Firstname:</label>
                    <input class="form_input signup_form_input" type="text" name="firstname" id="firstName" required><br>
                
                    <label class="form_label" for="username">Lastname:</label>
                    <input class="form_input signup_form_input" type="text" name="lastname" id="lastname" required><br>
                
                    <label class="form_label" for="username">Username:</label>
                    <input class="form_input signup_form_input" type="text" name="username" id="username" required><br>
                    <label class="form_label" for="username">Email:</label>
                    <input class="form_input signup_form_input" type="email" name="email" id="email" required><br>
                
                    <label class="form_label" for="password">Password:</label>
                    <input class="form_input signup_form_input" type="password" name="password" id="password" required><br>
                
                    <input class="signup_button" type="submit" value="Sign up">
                </form>
                <a class="create_account_link" href="<?= $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] ?>/shop/auth/login.php">Already have account?</a>
            </div>
        </div>
    </div>
    <?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/shop/include/footer.php";
?>