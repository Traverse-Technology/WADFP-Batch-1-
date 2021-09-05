<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["cName"] )){
        if ($_POST["cName"] == "frontend"){
            $demail = "mgmg@gmail.com";
            $dpwd = "123";

            $email = $_POST["email"];
            $password = $_POST["password"];
            if ($email == $demail and $password == $dpwd){
                echo "success";
            }else{
                echo "fail";
            }
        }
    }

}