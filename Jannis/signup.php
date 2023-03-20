<?php
error_reporting(E_ERROR | E_PARSE);
$username = $_POST["rname"];
$useremail= $_POST["remail"];
$userpw = $_POST["rpw"];

// Database connection
$conn = new mysqli('localhost','root','','beesoft_db');
if($username && $useremail && $userpw){
    if($conn->connect_error){
    die("Connection failed :".$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into user(username,useremail,userpw)values(?,?,?)");
    $stmt->bind_param("sss",$username,$useremail,$userpw);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    
}
}

?>