<?php

function encrypt($plainText, $key){
    $charset = str_split("ABCDEFGHIJKLMNOPQRSTUVWXYZ");
    $numchar = count($charset);
    $plainText = str_split(strtoupper($plainText));
    $encryptText = null;
    for ($i=0; $i <= count($plainText)-1; $i++){
        $location = array_search($plainText[$i],$charset);
        $shiftLocation = $location+$key;
        $shiftLocation %= $numchar;
//        echo "$plainText[$i] ==> $location ==> $shiftLocation <br>";
        $encryptText .= $charset[$shiftLocation];
    }
    return $encryptText;

}

function decrypt($decryptData, $key){
    $charset = str_split("ABCDEFGHIJKLMNOPQRSTUVWXYZ");
    $numchar = count($charset);
    $plainText = str_split(strtoupper($decryptData));
    $decrypt = null;
    for ($i=0; $i <= count($plainText)-1; $i++){
        $location = array_search($plainText[$i],$charset);
        $shiftLocation = $location-$key;
        $shiftLocation %= $numchar;

        if ($shiftLocation < 0 ){
            $rev_array = array_reverse($charset);
            $decrypt .= $rev_array[abs($shiftLocation)-1];
        }else{
            $decrypt .= $charset[$shiftLocation];
        }

    }
    return $decrypt;

}
echo encrypt("Zoo",3);
echo "<br>";
echo decrypt("CRR",3);
