<?php
$filename = "test1.txt";
$checksum = hash_file('md5',$filename);
//echo $checksum;

$d_cs= "45e1a4acd35b2b2d7371c63e309bd31d";
if ($checksum != $d_cs){
    echo "This file is edited";
}else{
    echo "This original file";
}