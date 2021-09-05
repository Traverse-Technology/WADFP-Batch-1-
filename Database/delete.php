<?php
include "connection.php";
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    if (isset($_GET['id'])){
        $id =  $_GET['id'];
        $query = "DELETE FROM student_mark WHERE id = '$id' ";
        $db->exec($query);
        header("Location:select.php");
    }else{
        header("Location:select.php");
    }
}