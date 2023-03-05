<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/styles.css">
    <link rel="stylesheet" type="text/css" href="./CSS/header.css">
    <script src="./javascript/header.js"></script>
</head>
<body>
    <div class="container">
        <div class="card align-items-center">
            <div class="row">
                <div class="col-md-3 p-5"><img src="images/logo1.png" width=380 height=300 class="logoletter"/></div>
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="./connection/login.php" method="POST" autocomplete="">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
              
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="./connection/signup-user.php">Signup now</a></div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>