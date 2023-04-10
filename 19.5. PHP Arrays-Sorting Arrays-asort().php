<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

foreach($age as $x=>$value) {
    echo "Key = " . $x . ", Value = " . $value;
    echo "<br>";
}
?>
