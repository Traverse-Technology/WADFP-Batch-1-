<?php
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $ufile = fopen("user.txt","r") or die("Unable to read file");
    $data = fread($ufile,filesize("user.txt"));
    $uarray = array();
    $parray = explode("\n", $data);
    for ($i=0; $i <= count($parray)-1; $i++){
        $array2 = explode("/", $parray[$i]);
        $array3 =array("email" => $array2[0], "password" => $array2[1]);
        array_push($uarray,$array3);
    }

    $uJson = json_encode($uarray);
    echo $uJson;
    fclose($ufile);
}

