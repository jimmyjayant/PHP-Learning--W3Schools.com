<?php
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo "Whether 'w3schools' is present in the string 'Visit W3Schools' or not (case-insensitive)? = ";
echo preg_match($pattern, $str);
?>
