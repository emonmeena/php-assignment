<?php
session_start();

if(!isset($_SESSION['username'])){
    header('location:login.php');
}
// if($_SESSION['iscomplete'] == 0) {
//     header('location: profile.php');
// }

if(isset($_GET['logout'])){
    session_destroy();
    header('location: login.php');
}

$Servername = "localhost";
$Username = "root";
$Password = "";
$dbname = "fakebook";

$db = mysqli_connect($Servername, $Username, $Password, $dbname);

if(!$db) die("Connection failed ".mysqli_connect_error());

$query = "SELECT * FROM users";
$result = mysqli_query($db, $query);

$_SESSION['chat-with'] = "Pooja";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body class="home">
    <div class="all-users-container">
        <nav>
            Chat with
        </nav>
        <div class="all-users">
            <?php while($all_users = mysqli_fetch_assoc($result)): ?>
                <?php if($all_users['username'] == $_SESSION['username']) continue; ?>
                <a href="">
                <div class="user">
                    <img src="res/default.png" alt="" srcset="">
                   <div class="user-details">
                        <b><?php echo $all_users['username'];?></b>
                        <p><?php echo$all_users['college']." ".$all_users['branch_year']." "?></p>
                   </div>
                </div>
                </a>
            <?php endwhile ?>
        </div>
    </div>
    <div class="chat-container">
    <nav class="chat-top">
        <img style="height: 5.3vh; margin: 0.8vh" src="res/default.png" alt="" srcset="">
        <p style="float: left; margin-left: 1vh"><?php echo $_SESSION['chat-with']; ?> </p>
        <div class="settings">Settings</div>
    </nav>
    <div class="all-chats">
        <div class="received">
            <b style="font-size: 2vh"><?php echo $_SESSION['chat-with'] ?> - </b> <?php echo date("d/m/y"); ?> <br>
            <div class="message">
            sent Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur quae sint aliquid harum exercitationem! Quia quidem autem eligendi voluptatum? Ducimus quod nemo perferendis minus a reprehenderit, vitae ut quaerat.
            </div>    
        </div>
        <div class="sent">
            <b style="font-size: 2vh">You - </b> <?php echo date("d/m/y"); ?> <br>
            <div class="message">
            sent Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur quae sint aliquid harum exercitationem! Quia quidem autem eligendi voluptatum? Ducimus quod nemo perferendis minus a reprehenderit, vitae ut quaerat.
            </div>
        </div>
        <div class="received">
            <b style="font-size: 2vh"><?php echo $_SESSION['chat-with'] ?> - </b> <?php echo date("d/m/y"); ?> <br>
            <div class="message">
            sent Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur quae sint aliquid harum exercitationem! Quia quidem autem eligendi voluptatum? Ducimus quod nemo perferendis minus a reprehenderit, vitae ut quaerat.
            </div>    
        </div>
        <div class="sent">
            <b style="font-size: 2vh">You - </b> <?php echo date("d/m/y"); ?> <br>
            <div class="message">
            sent Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur quae sint aliquid harum exercitationem! Quia quidem autem eligendi voluptatum? Ducimus quod nemo perferendis minus a reprehenderit, vitae ut quaerat.
            </div>
        </div><div class="received">
            <b style="font-size: 2vh"><?php echo $_SESSION['chat-with'] ?> - </b> <?php echo date("d/m/y"); ?> <br>
            <div class="message">
            sent Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur quae sint aliquid harum exercitationem! Quia quidem autem eligendi voluptatum? Ducimus quod nemo perferendis minus a reprehenderit, vitae ut quaerat.
            </div>    
        </div>
        <div class="sent">
            <b style="font-size: 2vh">You - </b> <?php echo date("d/m/y"); ?> <br>
            <div class="message">
            sent Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur quae sint aliquid harum exercitationem! Quia quidem autem eligendi voluptatum? Ducimus quod nemo perferendis minus a reprehenderit, vitae ut quaerat.
            </div>
        </div><div class="received">
            <b style="font-size: 2vh"><?php echo $_SESSION['chat-with'] ?> - </b> <?php echo date("d/m/y"); ?> <br>
            <div class="message">
            sent Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur quae sint aliquid harum exercitationem! Quia quidem autem eligendi voluptatum? Ducimus quod nemo perferendis minus a reprehenderit, vitae ut quaerat.
            </div>    
        </div>
        <div class="sent">
            <b style="font-size: 2vh">You - </b> <?php echo date("d/m/y"); ?> <br>
            <div class="message">
            sent Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur quae sint aliquid harum exercitationem! Quia quidem autem eligendi voluptatum? Ducimus quod nemo perferendis minus a reprehenderit, vitae ut quaerat.
            </div>
        </div><div class="received">
            <b style="font-size: 2vh"><?php echo $_SESSION['chat-with'] ?> - </b> <?php echo date("d/m/y"); ?> <br>
            <div class="message">
            sent Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur quae sint aliquid harum exercitationem! Quia quidem autem eligendi voluptatum? Ducimus quod nemo perferendis minus a reprehenderit, vitae ut quaerat.
            </div>    
        </div>
        <div class="sent">
            <b style="font-size: 2vh">You - </b> <?php echo date("d/m/y"); ?> <br>
            <div class="message">
            sent Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur quae sint aliquid harum exercitationem! Quia quidem autem eligendi voluptatum? Ducimus quod nemo perferendis minus a reprehenderit, vitae ut quaerat.
            </div>
        </div><div class="received">
            <b style="font-size: 2vh"><?php echo $_SESSION['chat-with'] ?> - </b> <?php echo date("d/m/y"); ?> <br>
            <div class="message">
            sent Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur quae sint aliquid harum exercitationem! Quia quidem autem eligendi voluptatum? Ducimus quod nemo perferendis minus a reprehenderit, vitae ut quaerat.
            </div>    
        </div>
        <div class="sent">
            <b style="font-size: 2vh">You - </b> <?php echo date("d/m/y"); ?> <br>
            <div class="message">
            sent Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur quae sint aliquid harum exercitationem! Quia quidem autem eligendi voluptatum? Ducimus quod nemo perferendis minus a reprehenderit, vitae ut quaerat.
            </div>
        </div><div class="received">
            <b style="font-size: 2vh"><?php echo $_SESSION['chat-with'] ?> - </b> <?php echo date("d/m/y"); ?> <br>
            <div class="message">
            sent Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur quae sint aliquid harum exercitationem! Quia quidem autem eligendi voluptatum? Ducimus quod nemo perferendis minus a reprehenderit, vitae ut quaerat.
            </div>    
        </div>
        <div class="sent">
            <b style="font-size: 2vh">You - </b> <?php echo date("d/m/y"); ?> <br>
            <div class="message">
            sent Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur quae sint aliquid harum exercitationem! Quia quidem autem eligendi voluptatum? Ducimus quod nemo perferendis minus a reprehenderit, vitae ut quaerat.
            </div>
        </div><div class="received">
            <b style="font-size: 2vh"><?php echo $_SESSION['chat-with'] ?> - </b> <?php echo date("d/m/y"); ?> <br>
            <div class="message">
            sent Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur quae sint aliquid harum exercitationem! Quia quidem autem eligendi voluptatum? Ducimus quod nemo perferendis minus a reprehenderit, vitae ut quaerat.
            </div>    
        </div>
        <div class="sent">
            <b style="font-size: 2vh">You - </b> <?php echo date("d/m/y"); ?> <br>
            <div class="message">
            sent Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur quae sint aliquid harum exercitationem! Quia quidem autem eligendi voluptatum? Ducimus quod nemo perferendis minus a reprehenderit, vitae ut quaerat.
            </div>
        </div><div class="received">
            <b style="font-size: 2vh"><?php echo $_SESSION['chat-with'] ?> - </b> <?php echo date("d/m/y"); ?> <br>
            <div class="message">
            sent Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur quae sint aliquid harum exercitationem! Quia quidem autem eligendi voluptatum? Ducimus quod nemo perferendis minus a reprehenderit, vitae ut quaerat.
            </div>    
        </div>
        <div class="sent">
            <b style="font-size: 2vh">You - </b> <?php echo date("d/m/y"); ?> <br>
            <div class="message">
            sent Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur quae sint aliquid harum exercitationem! Quia quidem autem eligendi voluptatum? Ducimus quod nemo perferendis minus a reprehenderit, vitae ut quaerat.
            </div>
        </div><div class="received">
            <b style="font-size: 2vh"><?php echo $_SESSION['chat-with'] ?> - </b> <?php echo date("d/m/y"); ?> <br>
            <div class="message">
            sent Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur quae sint aliquid harum exercitationem! Quia quidem autem eligendi voluptatum? Ducimus quod nemo perferendis minus a reprehenderit, vitae ut quaerat.
            </div>    
        </div>
        <div class="sent">
            <b style="font-size: 2vh">You - </b> <?php echo date("d/m/y"); ?> <br>
            <div class="message">
            sent Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur quae sint aliquid harum exercitationem! Quia quidem autem eligendi voluptatum? Ducimus quod nemo perferendis minus a reprehenderit, vitae ut quaerat.
            </div>
        </div>
    </div>
    <div class="mssg">
        send message
    </div>
    </div>
</body>
</html>