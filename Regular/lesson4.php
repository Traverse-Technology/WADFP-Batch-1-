<?php
$str = "s2l";
//$pattern = "/[0-9]+/i";
$pattern = "/^s[0-9]{2,}l$/i";

echo preg_match($pattern,$str);

