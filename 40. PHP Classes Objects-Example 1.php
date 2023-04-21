<?php
class Fruit {
    // Properties
    public $name;
    public $color;

    // Methods
    function set_name($name) {
        $this->name = $name;
    }

    function set_color($color) {
        $this->color = $color;
    }

    function get_name() {
        return $this->name;
    }

    function get_color() {
        return $this->color;
    }
}

$apple = new Fruit();
$banana = new Fruit();

$apple->set_name('Apple');
$apple->set_color('Red');

$banana->set_name('Banana');
$banana->set_color('Yellow');

echo "Fruit is " . $apple->get_name();
echo "<br>";
echo "And its color is " . $apple->get_color();
echo "<br>";
echo "Fruit is " . $banana->get_name();
echo "<br>";
echo "And its color is " . $banana->get_color();
?>