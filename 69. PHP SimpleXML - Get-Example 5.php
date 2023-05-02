<?php
$xml = simplexml_load_file("69. PHP SimpleXML - Get-books.xml") or die("Error: Cannot create object.");
foreach($xml->children() as $books) {
    echo $books->title['lang'] . "<br>";
}
?>