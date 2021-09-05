<?php
function checkSing($filename){
    // PNG, GIF, JFIF JPEG, EXIF JPEF (respectively)
    $allowed = array('89504E47', '47494638', 'FFD8FFE0', 'FFD8FFE1');
    $myfile = fopen($filename, "r") or die("Unable to open $filename file");
    $data =  fread($myfile,4);
    $data = bin2hex($data);
    echo strtoupper($data)."<br>";
    $status = in_array(strtoupper($data),$allowed);
    if ($status){
        echo "Allow <br>";
    }else{
        echo "Not Allow <br>";
    }
}
checkSing("D:\Traverse\WADFP-1\INTRODUCTION TO WADFP.pptx");
