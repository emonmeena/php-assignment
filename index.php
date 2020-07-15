<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
if(isset($_GET['logout'])){
    session_destroy();
    unset($_GET['username']);
    unset($_GET['email']);
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
</head>
<body>
    <h1>Hello</h1><br>
    <?php echo $_SESSION['username']." ".$_SESSION['email'] ?>

    <a href="index.php?logout=1">Logout</a>
</body>
</html>