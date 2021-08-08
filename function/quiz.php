<?php

function operation($num1, $num2, $op){
    if ($op == "+"){
        return $num1 + $num2;
    }elseif ($op == "-") {
        return $num1 - $num2;
    }else{
        return "Error";
    }

}
echo operation(30, 60, "-");