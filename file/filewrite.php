<?php
$filename = "test2.txt";
$myfile = fopen("$filename", "a") or die("Unable to open");
$text = "Hello World\n";
fwrite($myfile,$text);
fclose($myfile);