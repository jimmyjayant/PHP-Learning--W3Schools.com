<?php
class Fruit {
    // Properties
    public $name;
    public $color;

    // Methods
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

$apple = new Fruit();
echo "Is apple an object of class Fruit? = ";
var_dump($apple instanceof Fruit);
?>