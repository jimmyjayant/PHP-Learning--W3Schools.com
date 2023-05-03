<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("68. PHP SimpleXML Parser-note.xml");

$x = $xmlDoc->documentElement;
foreach($x->childNodes AS $item) {
    print $item->nodeName . " = " . $item->nodeValue . "<br>";
}
?>
