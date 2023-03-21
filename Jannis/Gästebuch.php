<?php
require 'signup.php';
include("signin.php");

$conn = new mysqli('localhost','root','','beesoft_db');
if($username && $useremail && $userpw){
    if($conn->connect_error){
    die("Connection failed :".$conn->connect_error);
}
}
$sql = 'SELECT username FROM user';
$result = mysqli_query($conn,$sql);
$usernames = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>

<html>
<head>
    <title> beesoft </title>
    <link rel="icon" type="image/x-icon" href="./assets/Logo beesoft.jpg">
    <link rel="stylesheet" type="text/css" href="beesoft.css"/>
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
 
</head>

<body>
    <div id= head>
 <h1 id="title">
        PROJEKTARBEIT INFORMATIK
    </h1>
    </div>
   

    <div id="main">
    <ul>
        <li><a href="index.php"><img style="width:5vw; height:auto;" src="./assets/Logo beesoft.jpg" alt=""></a> </li>
        <li><a  href="products.php">Unsere Produkte</a></li>
        <li><a href="team.php">Unseres Team</a></li>
        <li><a href="event.php">Events</a></li>
        <li><a href="" class="active">Gästebuch</a></li>
        <li><a href="Shop.php">Shop</a></li>
</ul>

<div id="maintext">
    <div class="floatchild">
        <h1>Gästebuch</h1>
        <h2>Registrierte Benutzer </h2>
        <div style="margin:1vw;">
            <?php 
            foreach($usernames as $username){
                echo htmlspecialchars($username['username']); 
                echo"<br>";
            }
            ?>
        </div>
<img onclick="clickMe()" src="./assets/instagram.png" alt="">
    </div>
       
</div>
    </div>
    

</body>
</html>
<script>
    function clickMe() {
        window.open("https://www.instagram.com/beesoft.yes/");
    }
</script>