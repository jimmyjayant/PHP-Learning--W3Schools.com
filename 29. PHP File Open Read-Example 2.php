<?php
$myfile = fopen("28. PHP File Handling-webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>