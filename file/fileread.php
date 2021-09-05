<?php
$filename = "test1.txt";
$myfile = fopen($filename, "r") or die("Unable to open $filename file");
$data =  fread($myfile,filesize("test1.txt"));

echo nl2br($data);
$dataArray = explode("\n",$data);
print_r($dataArray);
fclose($myfile);