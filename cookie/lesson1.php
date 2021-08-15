<?php
$email = "mgmg@gmail.com";
setcookie("email", $email, time()+3600);
echo $_COOKIE['email'];