<?php
$str = "Words";
//$pattern = "/[0-9]/";
//$pattern = "/[a-z]/";
//$pattern = "/[A-Z]/";
//$pattern = "/[abc]|[abc]/";
//$pattern = "/^[a-x]/";
//$pattern = "/\d/";
//$pattern = "/\s/";
//$pattern = "/./";
//$pattern = "/cat|pen/";
//$pattern = "/^W[a-z][a-z][a-z]s$/";
$pattern = "/^W...s$/";
echo preg_match($pattern,$str);

