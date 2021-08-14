<?php
$iphone = array(
    array(1, "iphone 12", 1000, 6),
    array(2, "iphone 7", 700, 5),
    array(3, "iphone 6+", 400, 7)
);

for ($row = 0; $row <= count($iphone)-1; $row++){
    for ($col = 0; $col <= count($iphone[$row])-1; $col++){
        echo $iphone[$row][$col];
    }
    echo "<br>";

}

//print_r($iphone[$row]);