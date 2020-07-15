<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>
    <form class="login" action="login.php" method="post"><br>
        <h1>Sign In</h1>
        <?php include('error.php') ?>
        <label for="email"><b>Email</b></label><br>
        <input type="email" name="email" id="" required="true" placeholder="Enter Email"><br><br>
        <label for="password"><b>Password</b></label><br>
        <input type="password" name="password" id="" required="true" placeholder="Enter Password"><br><br>
        <label for="long-session">Remember me</label>
        <input type="checkbox" name="long_session" id="long_session" value="on"><br>
        <input class="btn" type="submit" value="Login" name="login_user"><br>
        <p>New to Fakebook? <a href="signup.php">Sign Up</a> </p>
    </form>
</body>
</html>