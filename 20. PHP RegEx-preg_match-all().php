<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo "How many times the word 'ain' occurs in the string 'The rain in SPAIN falls mainly on the plains.'? = ";
echo preg_match_all($pattern, $str);
?>
