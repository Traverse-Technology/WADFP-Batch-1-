<?php
$str = "Visit w22school";
//$pattern = "/[0-9]+/i";
//$pattern = "/[0-9]*/i";
$pattern = "/[0-9]?/";
echo preg_match($pattern,$str);


// + is one or more
// * is zero or more
