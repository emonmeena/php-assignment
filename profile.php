<?php
session_start();

if(!isset($_SESSION['username'])) header('location:login.php');

$username = $_SESSION['username'];
$email = $_SESSION['email'];
$sex = $_SESSION['sex'];
$phone = $_SESSION['phone'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="profile-page">
    <img src="res/bd.png" alt="" srcset=""> 
</body>
</html>