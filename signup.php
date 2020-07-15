<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
</head>
<body>
    <form action="signup.php" method="post"><br>
        <h1>Sign Up</h1>
        <?php include('error.php') ?>
        <label for="usernaem"><b>Username</b></label><br>
        <input type="text" name="username" id="username" required="true" placeholder="Enter Username" value="<?php echo $username ?>" onkeyup="checkUser(this.value)"><br><br>
        <label for="email"><b>Email</b></label><br>
        <input type="email" name="email" id="email" required="true" placeholder="Enter Email" value="<?php echo $email ?>" onkeyup="checkEmail(this.value)" onblur="checkEmail(this.value)"><br><br>
        <label for="password"><b>Password</b></label><br>
        <input type="password" name="password" id="password" required="true" placeholder="Enter Password"><br><br>
        <label for="password_2"><b>Confirm Password</b></label><br>
        <input type="password" name="password_2" id="password_2" required="true" placeholder="Re-enter Password" onkeyup="checkPassword(this.value)"><br><br>
        <label for="phone"><b>Phone</b></label><br>
        <input type="number" name="phone" id="phone" required="true" placeholder="+91" value="<?php echo$phone ?>"><br><br>
        <label for="sex"><b>sex</b></label>
        <select name="sex" id="sex">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br><br>
        <input class="btn" type="submit" value="Sign Up" name="reg_user">
        <p>Already have an Account? <a href="login.php">Login</a> </p>
    </form>
    <script src="script.js"></script>
</body>
</html>