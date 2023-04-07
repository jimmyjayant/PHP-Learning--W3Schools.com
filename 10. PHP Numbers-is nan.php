<?php
// Invalid calculation will return a NaN value
$x = acos(8);
echo is_nan($x);
echo "<br>";
echo is_nan(200);
echo "<br>";
var_dump($x);
?>
