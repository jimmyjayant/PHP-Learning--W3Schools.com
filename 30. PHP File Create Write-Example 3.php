<?php
$myfile = fopen("30. PHP File Create Write-newfile.txt","a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($myfile,$txt);
$txt = "Goofy Goof\n";
fwrite($myfile,$txt);
fclose($myfile);

$myfile = fopen("30. PHP File Create Write-newfile.txt","r") or die("Unable to open file!");
echo fread($myfile,filesize("30. PHP File Create Write-newfile.txt"));
fclose($myfile);
?>