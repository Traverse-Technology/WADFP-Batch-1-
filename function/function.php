<?php
function loop($start, $end, $inc){
    for ($i = $start ; $i <= $end ; $i+=$inc){
        if ($i %2 == 0){
            echo "<font style='color: red'>Hello World $i</font>  <br>";
        }else{
            echo "<font style='color: blue'>Hello World $i</font>  <br>";
        }

    }
}
loop(2,6, 2);
echo "<br>";

loop(1,8, 3);