<?php
session_start();

if(!isset($_SESSION['username'])) header('location:login.php');

$username = $_SESSION['username'];
$email = $_SESSION['email'];
$sex = $_SESSION['sex'];
$phone = $_SESSION['phone'];
$college = $_SESSION['college'];
$branch_year = $_SESSION['branch_year'];

$Servername = "localhost";
$Username = "root";
$Password = "";
$dbname = "fakebook";

$db = mysqli_connect($Servername, $Username, $Password, $dbname);
if(!$db) die("Connection failed ".mysqli_connect_error());


if(isset($_POST['update_profile'])){

    $email = mysqli_real_escape_string($db, $_POST['email']);
    $college = mysqli_real_escape_string($db, $_POST['college']);
    $branch_year = mysqli_real_escape_string($db, $_POST['branch_year']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);

    echo "details: " . $college . " " . $branch_year;

    $query = "UPDATE users SET email = '$email', college = '$college', branch_year = '$branch_year', phone = '$phone', iscomplete = 1 WHERE username = '$username' ";
    mysqli_query($db, $query);

    $_SESSION['iscomplete'] = 1;
    header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body class="profile-page">
    <div class="c1">
        <div class="nav">
            <a href="#profile"><div class="profile-tab tab">Profile</div></a>
            <a href="index.php"><div class="home-tab tab">Home</div></a>
            <a href="#settings"><div class="settings-tab tab">Settings</div></a>
            <a href="index.php?logout=1"><div class="settings-tab tab tab2">Logout</div></a>
        </div>
    </div>
    <div class="c2" id="profile">
        <?php if($_SESSION['iscomplete'] == 0): ?>
        <div class="error">Please complete your profile first!!</div>
        <?php endif ?>
        <div class="top">Your profile</div>
        <form action="profile.php" method="post">
            <p>Personal details - </p>
            Username - 
            <b><?php echo $username ?></b> <br><br>
            <label for="email"><b>Your email</b></label><br>
            <input type="email" name="email" id="" placeholder="email" value="<?php echo $email ?>" required="true">
            <label for="bio"><b>Bio</b></label><br>
            <textarea name="bio" id="" cols="30" rows="10" placeholder="Hey there, I am using fakebook" onfocus="this.placeholder=''" onblur="this.placeholder='Hey there, I am using fakebook'"></textarea>
            <p>Academic information - </p>
            <label for="college"><b>College</b></label>
            <input type="text" name="college" id="" required="true" value="<?php echo $college?>" placeholder="eg. IIT Roorkee" onfocus="this.placeholder=''" onblur="this.placeholder='eg. IIT Roorkee'">
            <label for="branch_year"><b>Branch and Year</b></label>
            <input type="text" name="branch_year" id="" required="true" value = "<?php echo $branch_year ?>" placeholder="eg. Chemical Sophomore" onfocus="this.placeholder=''" onblur="this.placeholder='eg. Chemical Sophomore'">
            <p>Contact - </p>
            <label for="phone"><b>Phone</b></label>
            <input type="text" name="phone" id="" required="true" value="<?php echo $phone ?>" required="true" onfocus="this.placeholder=''" onblur="this.placeholder='Your 10 digit phone number'">
            <input class="btn" name="update_profile" type="submit" value="Update profile">
        </form>
        <form action="" method = "post">
            <p id="settings">Change Password - </p>
            <label for="current_password"><b>Current password</b></label><br>
            <input type="password" name="current_password" id="">
            <label for="new_password"><b>New password</b></label><br>
            <input type="password" name="new_password" id="">
            <label for="new_password2"><b>Re-type password</b></label><br>
            <input type="password" name="new_password2" id="">
            <input class="btn" name="update_profile" type="submit" value="Change password">
        </form>
    </div>
    <div class="c3">
        <div class="top"></div>
        <p>Profile picture</p>
        <img src="res/default.png" alt="" srcset="">
    </div>
</body>
</html>