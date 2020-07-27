<?php
session_start();

$username = "";
$email = "";
$phone = "";
$error = array();

$Servername = "localhost";
$Username = "root";
$Password = "";
$dbname = "fakebook";

$db = mysqli_connect($Servername, $Username, $Password, $dbname);

if(!$db){
    die("Connection failed: ".mysqli_connect_error());
}

if(isset($_POST['reg_user'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db,  $_POST['password']);
    $password_2 = mysqli_real_escape_string($db,  $_POST['password_2']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $sex = mysqli_real_escape_string($db, $_POST['sex']);

    $query = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $result = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($result);

    if($user){
        if($username == $user['username']) array_push($error, "Username alredy exists");
        if($email == $user['email']) array_push($error, "Email alredy exists");
    }

    if($password != $password_2) array_push($error, "The two Passwords didn't match");

    if(count($error) == 0){
        $password = md5($password);
        $query = "INSERT INTO users (username, email, password, sex, phone)
                  VALUES ('$username', '$email', '$password', '$sex', '$phone')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['sex'] = $sex;
        $_SESSION['college'] = "";
        $_SESSION['branch_year'] = "";
        $_SESSION['bio'] = "";
        $_SESSION['iscomplete'] = 0;

        header('location:profile.php');
    }

}

if(isset($_POST['login_user'])){
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db,  $_POST['password']);
    // $long_session = mysqli_real_escape_string($db, $_POST['long_session']);
    $password = md5($password);

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($result);
    if($user){
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $user['phone'];
        $_SESSION['sex'] = $user['sex'];
        $_SESSION['iscomplete'] = $user['iscomplete'];
        $_SESSION['college'] = $user['college'];
        $_SESSION['bio'] = $user['bio'];
        $_SESSION['branch_year'] = $user['branch_year'];
        $_SESSION['profile_pic'] = $user['profile_pic'];

        header('location:index.php');
    }
    else{
        array_push($error, "Email or Password incorrect");
    }
}

?>