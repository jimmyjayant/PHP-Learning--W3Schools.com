<?php
$myfile = fopen("30. PHP File Create Write-newfile.txt","w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile,$txt);
$txt = "Minnie Mouse\n";
fwrite($myfile,$txt);
fclose($myfile);

$myfile = fopen("30. PHP File Create Write-newfile.txt","r") or die("Unable to open file!");
echo fread($myfile, filesize("30. PHP File Create Write-newfile.txt"));
fclose($myfile);
?>