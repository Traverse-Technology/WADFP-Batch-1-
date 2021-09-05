<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentinfo";
try{
    $db = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
//    echo "<script>alert('Connection Success')</script>";
}catch (PDOException $exception){
    echo $exception->getMessage();
}

