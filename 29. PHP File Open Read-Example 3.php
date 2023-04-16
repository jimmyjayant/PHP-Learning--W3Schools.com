<?php
$myfile = fopen("28. PHP File Handling-webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file 
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>