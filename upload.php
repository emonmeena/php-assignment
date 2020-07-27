<?php
session_start();

$username = $_SESSION['username'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["profilePic"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$Servername = "localhost";
$Username = "root";
$Password = "";
$dbname = "fakebook";

$db = mysqli_connect($Servername, $Username, $Password, $dbname);
if(!$db) die("Connection failed ".mysqli_connect_error());

if(isset($_POST["upload_picture"])) {
  $check = getimagesize($_FILES["profilePic"]["tmp_name"]);
  if($check !== false) {
    if (move_uploaded_file($_FILES["profilePic"]["tmp_name"], $target_file)) {
        $profile_pic = $_FILES["profilePic"]["name"];
        $_SESSION['profile_pic'] = $profile_pic;
        $query = "UPDATE users SET profile_pic = '$profile_pic' ";
        mysqli_query($db, $query);
        header('location: profile.php');
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
?>