<?php
$filename = "test1.txt";
$myfile = fopen($filename, "r") or die("Unable to open $filename file");
$data =  fread($myfile,filesize("test1.txt"));
echo $data."<br>";

fseek($myfile,0);
$data1 =  fread($myfile,filesize("test1.txt"));
echo $data1;

fclose($myfile);