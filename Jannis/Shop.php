<?php

include("signin.php");
require 'signup.php';
include("buyAprico.php");

$conn = new mysqli('localhost', 'root', '', 'beesoft_db');
if ($username && $useremail && $userpw) {
    if ($conn->connect_error) {
        die("Connection failed :" . $conn->connect_error);
    }
}
$sql = 'SELECT username FROM user';
$result = mysqli_query($conn, $sql);
$usernames = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>

<html>

<head>
    <title> beesoft </title>
    <link rel="icon" type="image/x-icon" href="./assets/Logo beesoft.jpg">
    <link rel="stylesheet" type="text/css" href="Shop.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">

</head>

<body>
    <div id=head>
        <h1 id="title">
            PROJEKTARBEIT INFORMATIK
        </h1>
    </div>

    <div id=login  style="display:none" >
       
        <div id="registerform"  > 
        <img onclick="closelogin()" id="close" src="./assets/close.png" alt="">

            <h3>Registrieren</h3>
            <form method="post">
                <label for="fname">Name</label><br>
                <input type="text" id="fname" name="rname"><br>
                <label for="lname">Email</label><br>
                <input type="text" id="lname" name="remail"><br><br>
                <label for="lname">Password</label><br>
                <input type="password" id="lname" name="rpw"><br><br>
                <input type="submit" name="registerbtn" value="Submit">
            </form>
        </div>
    </div>

    <div id="main">
        <ul>
            <li><a href="index.php"><img style="width:5vw; height:auto;" src="./assets/Logo beesoft.jpg" alt=""></a>
            </li>
            <li><a href="products.php">Unsere Produkte</a></li>
            <li><a href="unseresTeam.php">Unseres Team</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="Gästebuch.php">Gästebuch</a></li>
            <li><a class="active" href="./Shop.php">Shop</a></li>
            <li><img onclick="showregister()" src="./assets/Profil.png" alt="asdf"></li>
        </ul>

        <div id="maintext">
            <div class="floatchild">
                <h1 >Meine Bestellungen</h1>
                <p>
                    <?php echo $greeting; ?>
                </p>
                <div class="Orders" id="Order" style="float:left">

                    <div style="display:flex; justify-content:center margin:1vw;" >
                        <div >
                            <img  class="Shop" style="width:8vw" src="./assets/Beesous_Aprikose.jpg" alt=""> <br>
                            <img class="Shop" src="./assets/warenkorb1.png" alt="" onclick="showlogin2()">
                           
                        </div>
                        <div >
                            <img class="Shop" style="width:8vw" src="./assets/Beesous_Kirsche.jpg" alt=""> <br>
                            <img class="Shop" src="./assets/warenkorb.png" alt="" onclick="showlogin()">
                           
                        </div>

                    <div class="Orders">
                    <div id="loginform1" style="display:none">
                        <h3>Bestellen</h3>
                        <form method="post">
                            <label for="fname">Name</label><br>
                            <input type="text" id="fname" name="lname"><br>
                            <label for="lname">Email</label><br>
                            <input type="text" id="lname" name="lemail"><br>
                            <label for="lname">Password</label><br>
                            <input type="password" id="lname" name="lpw"><br>
                            <label for="lname">Geschmack</label><br>
                            <input type="text" value=Kirsche name="aprico"><br>
                            <input type="submit" value="Bestellen">
                        </form>
                      
                    </div>
                    <div id="loginform2" style="display:none">
                        <h3>Bestellen</h3>
                        <form method="post">
                            <label for="fname">Name</label><br>
                            <input type="text" id="fname" name="lname"><br>
                            <label for="lname">Email</label><br>
                            <input type="text" id="lname" name="lemail"><br>
                            <label for="lname">Password</label><br>
                            <input type="password" id="lname" name="lpw"><br>
                            <label for="lname">Geschmack</label><br>
                            <input type="text" id="aprico" name="aprico" value="Aprikose" ><br>
                            <input type="submit" value="Bestellen">
                        </form>
                      
                      </div>
                    </div>
                        <div class="Orders" id=myOrder style="float:left">
                            <h2>Warenkorb</h2>
                            <ul id=Orderlist>
                       
                            <?php
                            
                            error_reporting(E_ERROR | E_PARSE);


// Database connection
include 'signin.php';
$conn = new mysqli('localhost','root','','beesoft_db');
$query =   "SELECT * FROM orders WHERE userid='$username'" ;
$result = $conn->query($query);
$greeting ="";

while($row = $result->fetch_assoc()){
    if($row){
        session_start();
      while ($row = mysqli_fetch_array($result)) {
                                       
            echo "<li id='list'>" . $row['ordername'] . "</li>";
            echo "<br>";
        }
          
         
    }
        else{
            echo "<script>alert('Login fehlgeschlagen');</script>";
        }
    
    
    
}
?>


                            </ul>
                        </div>

                    </div>


                </div>

            </div>
        </div>


</body>

</html>
<script>
    
    function showlogin() {
        if( document.getElementById("loginform1").style.display = "none"){
             document.getElementById("loginform1").style.display = "block";
        document.getElementById("loginform2").style.display = "none";
        }
       
        
   
        
       
    }
    function showlogin2() {
        if( document.getElementById("loginform2").style.display = "none"){
            document.getElementById("loginform2").style.display = "block";
            document.getElementById("loginform1").style.display = "none";
        }
        
        
       
    }
    function showregister() {
        
        document.getElementById("login").style.display = "block";
    }
    function closelogin() {
        document.getElementById("login").style.display = "none"
    }
</script>