<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f0f0f0;
        }

        .registration-form {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container-2 {
            width: 100%;
            max-width: 700px;
            background: #fff;
            padding: 28px;
            margin-top: 80px;
            border-radius: 15px;
        }

        .form-title {
            font-size: 26px;
            font-weight: 600;
            text-align: center;
            padding-bottom: 6px;
            color: #333;
            border-bottom: 1px solid #333;
        }

        .main-user-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px 0;
        }

        .user-input-box {
            width: 48%;
            margin-bottom: 15px;
        }

        .user-input-box label {
            color: #333;
            font-size: 16px;
            font-weight: 400;
            margin: 5px 0;
            display: block;
        }

        .user-input-box input {
            height: 40px;
            width: 100%;
            border-radius: 7px;
            outline: none;
            border: 1px solid #ddd;
            padding: 0 10px;
            box-sizing: border-box;
        }

        .form-submit-btn {
            margin-top: 25px;
        }

        .form-submit-btn input {
            display: block;
            width: 100%;
            font-size: 18px;
            padding: 8px;
            border: none;
            border-radius: 8px;
            color: #fff;
            background-color: #333;
            cursor: pointer;
        }

        .login-link {
            text-align: center;
            margin-top: 15px;
        }

        .login-link p {
            color: #333;
            font-size: 15px;
        }

        .login-link a {
            color: #333;
            text-decoration: none;
            font-size: 15px;
            font-weight: 600;
        }

        @media screen and (max-width: 768px) {
            .main-user-info .user-input-box {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="registration-form">
        <div class="container-2">
            <h1 class="form-title">Register Here</h1>
            <form action="registration.php" method="POST">
                <div class="main-user-info">
                    <div class="user-input-box">
                        <label>First Name</label>
                        <input type="text" name="firstName" placeholder="Enter First Name" required>
                    </div>
                    <div class="user-input-box">
                        <label>Last Name</label>
                        <input type="text" name="lastName" placeholder="Enter Last Name" required>
                    </div>
                    <div class="user-input-box">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Enter Email" required>
                    </div>
                    <div class="user-input-box">
                        <label>Phone Number</label>
                        <input type="text" name="phoneNumber" placeholder="Enter Phone Number" required>
                    </div>
                    <div class="user-input-box">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter Password" required>
                    </div>
                    <div class="user-input-box">
                        <label>Confirm Password</label>
                        <input type="password" name="confirmPassword" placeholder="Confirm Password" required>
                    </div>
                </div>
                <div class="form-submit-btn">
                    <input type="submit" name="submit" value="Register">
                </div>
                <div class="login-link">
                    <p>Already have an account? <a href="login.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
