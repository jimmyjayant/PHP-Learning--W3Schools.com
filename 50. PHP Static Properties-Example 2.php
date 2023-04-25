<?php
class pi {
    public static $value = 3.14159;
    public function staticValue() {
        echo "The value of PI is = " .  self::$value;
    }
}

// Get the static property
$pi = new pi();
echo $pi->staticValue(); 
?>