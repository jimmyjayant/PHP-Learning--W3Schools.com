<?php
namespace Example2;

//Import the Exception class
use Exception; 

// Custom error handler function
function customErrorHandler($exception) {
  echo "<p style='color:red'>Custom Error:- " . $exception->getMessage() . "</p>"; 
}

class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    protected function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
        throw new Exception("Something went wrong!");
    }
}

class Strawberry extends Fruit {
    public function message() {
        echo "Am I a fruit or a berry?<br> ";
    }
}

// Set the custom error handler
set_exception_handler('Example2\customErrorHandler');

// Try to call all three methods from outside class
$strawberry = new Strawberry("Strawberry", "red"); // OK. __construct() is public

$strawberry->message(); // OK. message() is public

try {
    $strawberry->intro(); // ERROR. intro() is protected 
}
catch(Exception $e) {
    //Exception will be caught by the custom error handler
}
?>