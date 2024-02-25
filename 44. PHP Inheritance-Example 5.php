<?php
namespace Example5;


//Import the Exception class
use Exception; 

// Custom error handler function
function customErrorHandler($exception) {
  echo "<p style='color:red'>Custom Error:- " . $exception->getMessage() . "</p>"; 
}

final class Fruit {
    // some code
    public function err() {
      throw new Exception("ERROR");
    }
}

// Set the custom error handler
set_exception_handler('Example5\customErrorHandler');

// will result in error
try { 
    class Strawberry extends Fruit {
        // some code
    }
}
catch(Exception $e) {
    //Exception will be caught by the custom error handler
}
?>