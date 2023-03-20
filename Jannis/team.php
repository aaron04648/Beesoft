<?php

?>

<!DOCTYPE html>

<html>

<head>
    <title> beesoft </title>
    <link rel="icon" type="image/x-icon" href="./assets/Logo beesoft.jpg">
    <link rel="stylesheet" type="text/css" href="team.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">

</head>

<body>
    <div id=head>
        <h1 id="title">
            PROJEKTARBEIT INFORMATIK
        </h1>
    </div>


    <div id="main">
        <ul>
            <li><a href="./index.php"><img style="width:5vw; height:auto;"  src="./assets/Logo beesoft.jpg" alt=""></a>
                 </li>
            <li><a class="active" href="./products.php">Unsere Produkte
                </a></li>
            <li><a href="">Unseres Team</a></li>
            <li><a href="event.php">Events</a></li>
            <li><a href="Gästebuch.php">Gästebuch</a></li>
            <li><a href="Shop.php">Shop</a></li>



        </ul>
       
        <div id="maintext">
 <div id=teamImg>
 <div class="tree-diagram">
    <ul>
        <li>
          <img src="./assets/fux.png" alt=""> <p>Sven Fux  <br> CEO </p>
            <ul>
                <li>
                <img src="./assets/Bärenfäller.png" alt="">
                <p>Lynn Bärenfaller  <br> CPO </p> 
                </li>
                <li><img src="./assets/bregy.png" alt=""><p>David Bregy  <br> CMO </p>   </li>
                <li><img src="./assets/seeberger.png" alt=""><p>Jaël Seeberger  <br> CCO </p> </li>
                <li><img src="./assets/imfeld.png" alt=""><p>Tony Imfeld  <br> CTO </p> </li>
                <li><img src="./assets/hallenbarter.png" alt=""><p> Jannis Hallenbarter  <br> CFO </p></li>
 
                

            </ul>
        </li>

       
    </ul>
    
</div>
        </div>
        <h1 id="ourteam">Unser Team</h1>

        </div>
    </div>


</body>

</html>
<script>
    function clickMe() {
        window.open("https://www.instagram.com/beesoft.yes/");
    }
    function showlogin() {
        document.getElementById("login").style.display = "block";
    }
    function showregister() {
        document.getElementById("loginform").style.display = "none";
        document.getElementById("registerform").style.display = "block";
    }
    function closelogin() {
        document.getElementById("login").style.display = "none"
    }
</script>