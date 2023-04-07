<?php
// Check if the type of a variable is integer:- 
$x = 5985;
echo "Is the number 5985 is integer? = ";
var_dump(is_int($x));

echo "<br>";

// Check again....

$x = 59.85;
echo "Is the number 59.85 is integer? = ";
var_dump(is_int($x));
?>
