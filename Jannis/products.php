<?php

?>

<!DOCTYPE html>

<html>

<head>
    <title> beesoft </title>
    <link rel="icon" type="image/x-icon" href="./assets/Logo beesoft.jpg">
    <link rel="stylesheet" type="text/css" href="produkte.css" />
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
            <li><a class="active" href="">Unsere Produkte
                </a></li>
            <li><a href="team.php">Unseres Team</a></li>
            <li><a href="event.php">Events</a></li>
            <li><a href="Gästebuch.php">Gästebuch</a></li>
            <li><a href="Shop.php">Shop</a></li>



        </ul>
        <h1 id="ourproducts" style="color:#e78c4b;">Unsere Produkte</h1>
        <div id="maintext">
<div>
    <div >
                <figure id="product1">
                    <img style="width:10vw; height:auto;" src="./assets/Beesous_Kirsche.jpg" alt />
                    <figcaption>beesous Aprikosengeschmack </figcaption>
                </figure>
            </div>
            <div >
                <figure id="product2">
                    <img style="width:10vw; height:auto;" src="./assets/Beesous_Kirsche.jpg" alt />
                    <figcaption>beesous Kirschgeschmack  </figcaption>
                </figure>
            </div>
</div>
      <div id="description">
        <p>
            Unser Ziel ist es, aus Walliser Bienenwachs, Aprikosenaroma und einer umweltschonenden Verpackung eine Lippenpomade herzustellen, welche gut schmeckt und gut für die Umwelt ist. Dank unserem Partner Alfred Chappuis haben wir es geschafft, genau diese Lippenpomade herzustellen Unsere Produkte besteht aussschliesslich aus umweltfreundlichen Inhaltsstoffen. Ausserdem ist die Lippenpomade ohne Wasser hergestellt worden, somit sind auch keine Konservierungsstoffe enthalten. Um dem Bienensterben entgegen zu wirken, haben wir us entschlossen, 0.10 Fr. pro verkaufte Lippenpomade an Walliser Imker zu spenden
        </p>
      </div>
 


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