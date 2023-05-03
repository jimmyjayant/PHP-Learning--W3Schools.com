<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("68. PHP SimpleXML Parser-note.xml");
print $xmlDoc->saveXML();
?>