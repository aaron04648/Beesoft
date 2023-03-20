<?php


error_reporting(E_ERROR | E_PARSE);
$username = $_POST["lname"];
$useremail= $_POST["lemail"];
$userpw = $_POST["lpw"];
$geschmack =$_Post["aprico"];
$orderusername = $username;

// Database connection
$conn = new mysqli('localhost','root','','beesoft_db');
$query =   "SELECT * FROM user WHERE username = '$username'";
$result = $conn->query($query);
$greeting ="";


while($row = $result->fetch_assoc()){
    if($row){
        session_start();
        
        echo "<script>localStorage.setItem('key', '$username');</script>";
            
            $greeting ="Guten Tag. Angemeldet als $username";
            if($username && $geschmack){
                if($conn->connect_error){
                die("Connection failed :".$conn->connect_error);
            }else{
                $stmt = $conn->prepare("insert into orders(userid)values(?)");
                $stmt->bind_param("s",$geschmack);
                $stmt->execute();
            
                
            }
            }
    }
        else{
            echo "<script>alert('Login fehlgeschlagen');</script>";
        }
    
    
    
}



?>