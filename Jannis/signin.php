<?php


error_reporting(E_ERROR | E_PARSE);
$username = $_POST["lname"];
$useremail= $_POST["lemail"];
$userpw = $_POST["lpw"];
$geschmack = $_POST["aprico"];

// Database connection
$conn = new mysqli('localhost','root','','beesoft_db');
$query =   "SELECT * FROM user WHERE username = '$username'";
$result = $conn->query($query);
$greeting ="";


while($row = $result->fetch_assoc()){
    if($row){
        session_start();
        
        echo "<script>localStorage.setItem('key', '$username');</script>";
            
            $greeting ="Guten Tag. Angemeldet als $username 👋 <br> Sie haben erfolgreich eine $geschmack Lippenpomade bestellt ❗";
            $conn = new mysqli('localhost','root','','beesoft_db');
            
if($username){
    if($conn->connect_error){
    die("Connection failed :".$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into orders(ordername,userid)values(?,?)");
    $stmt->bind_param("ss",$geschmack,$username,);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    
}
}

    }
        else{
            echo "<script>alert('Login fehlgeschlagen');</script>";
        }
    
    
    
}




?>