<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["pName"] )){
         $_SESSION["pName"] = $_POST["pName"];
         $_SESSION["pPrice"] = $_POST["pPrice"];
        }else{
        if (isset($_FILES["file"])){
            /*Here you must be save data which are retrieve from session in the file
            Then you must be upload file*/
            echo $_SESSION["pName"];
            echo $_SESSION["pPrice"];
            print_r($_FILES["file"]);
        }
    }
    }