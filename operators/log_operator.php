<?php
$reg_email = "mgmg@gmail.com";
$reg_pass = "1234";

$log_email = "aungaung@gmail.com";
$log_pass = "1234";

$result = $reg_email == $log_email or $reg_pass == $log_pass;
var_dump($result);

//$bool = true;
//$result = !$bool;
//var_dump($result);

// $reg_email == $log_email and $reg_pass  ==  $log_pass {login success}