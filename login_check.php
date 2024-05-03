<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <!-- Include the viewport meta tag for responsiveness -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="project 01_/style.css">
</head>
<body>

<?php include('db_connection.php'); ?>

<?php
session_start();
include('db_connection.php');

if (isset($_POST['submit'])) {
    $username = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars(md5(($_POST['password'])));

    $sql = "SELECT * FROM users WHERE email = '$username' AND password = '$password'";
    $query = mysqli_query($conn, $sql);
}

if (mysqli_num_rows($query) > 0) {
    $result = mysqli_fetch_assoc($query);
    $_SESSION['user_type'] = $result['user_type'];
    $_SESSION['user_id'] = $result['user_id'];
    if ($result['user_type'] == "admin") {
        header('location: admin_dashboard.php');
    } elseif ($result['user_type'] == "customer") {
        header('location: customer_dashboard.php');
    }
} else {
    $_SESSION['message'] = 'Invalid Username or Password';
    header('location: login.php');
}
?>

<?php include('templates/header.php'); ?>

<div class="login-form">
    <div class="box">
        <form action="login_check.php" method="POST">
            <h2>Login</h2>
            <?php
            if ($_SESSION['message']) {
                $message = $_SESSION['message'];
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
