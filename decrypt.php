<?php
$userpass = "4a8a08f09d37b73795649038408b5f33";
$hash = range('a', 'z');
for ($i = 0; $i <= count($hash)-1; $i++){
    if ($userpass == md5($hash[$i])){
        echo $hash[$i];
    }
}


