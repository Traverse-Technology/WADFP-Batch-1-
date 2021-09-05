<?php
$filename = "C:\Users\saiwannaaung\Pictures\Saved Pictures\image1.jpg";
$myfile = fopen($filename, "r") or die("Unable to open $filename file");
$data =  fread($myfile,4);
$data = bin2hex($data);
echo strtoupper($data);