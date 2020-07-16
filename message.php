<?php 
$Servername = "localhost";
$Username = "root";
$Password = "";
$dbname = "fakebook";

$db = mysqli_connect($Servername, $Username, $Password, $dbname);

if(!$db) die("Connection failed ".mysqli_connect_error());

$sender = $_REQUEST['sender'];
$message = $_REQUEST['message'];
$receiver = $_REQUEST['receiver'];

$query = "INSERT INTO messages (sender, message, receiver)
          VALUES  ('$sender', '$message','$receiver')";
mysqli_query($db, $query);          

?>