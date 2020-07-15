<?php
$Servername = "localhost";
$Username = "root";
$Password = "";
$dbname = "fakebook";

$db = mysqli_connect($Servername, $Username, $Password, $dbname);
$validate = "";
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];

if($username != ""){
    $query = "SELECT username FROM users WHERE username = '$username'";
    $result = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($result);
    if($user){
        $validate = "found";
    }
}

if($email != ""){
    $query = "SELECT email FROM users WHERE email = '$email'";
    $result = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($result);
    if($user){
        $validate = "found";
    }
}

echo $validate;
?>