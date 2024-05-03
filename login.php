<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login form</title>
    <link rel="stylesheet" href="project 01_/style.css">
    <!-- Include the viewport meta tag for responsiveness -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php include('templates/header.php'); ?>

<div class="login-form">
    <div class="box">
        <form action="login_check.php" method="POST">
            <h2>Login</h2>
            <?php 
                if($_SESSION['message']){
                    $message =  $_SESSION['message'];
                    echo "<h4 style='color: red; text-align: center;'>$message</h4>";
                    session_destroy();
                }
            ?>
            <div class="loginBox">
                <input type="email" name="email" required>
                <span>Username</span>
                <i></i>
            </div>
            <div class="loginBox">
                <input type="password" name="password" required>
                <span>Password</span>
                <i></i>
            </div>
            <input type="submit" name="submit" value="Sign in">
            <div class="register-link">
                <p>Don't have an account? <a href="registration.php">Register</a></p>
            </div>
        </form>
    </div>   
</div>

<?php include('templates/footer.php'); ?>
    
</body>
</html>
