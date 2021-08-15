<?php
$reg_email = "mgmg@gmail.com";
$reg_password = "81dc9bdb52d04dc20036dbd8313ed055";

$log_email = "mgmg@gmail.com";
$log_password = "1234";

if ($reg_email == $log_email && $reg_password == md5($log_password)){
    echo "<script>alert('Login Success')</script>";
}else{
    echo "<script>alert('Login Fail')</script>";
}
