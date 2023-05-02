<?php
$xml = simplexml_load_file("69. PHP SimpleXML - Get-books.xml") or die("Error: Cannot create object.");
echo $xml->book[0]['category'] . "<br>";
echo $xml->book[1]->title['lang'];
?>