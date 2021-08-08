<?php
$name = array("Peter" => 14, "Mg Mg" => 13, "Aung Aung" => 14);

foreach ($name as $key => $value){
    if ($key == "Peter"){
        $value = 16;
    }
    echo "$key => $value <br>";
}

//
//echo "<pre>";
//print_r($name);
//echo "</pre>";
//echo $name['Peter'];