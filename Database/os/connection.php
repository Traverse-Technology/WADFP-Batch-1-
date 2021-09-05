<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "traverse_os";
try{
    $db = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    echo "<script>alert('Connection Success')</script>";
}catch (PDOException $exception){
    echo $exception->getMessage();
}

