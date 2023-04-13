<?php
echo "Welcome " . $_POST["name"] . "<br>";
echo "Your email address is: " . $_POST["email"];

/*
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $n = $_POST['name'];
    $e = $_POST['email'];
    echo "Welcome " . $n;
    echo "<br>Your email address is: " . $e; 
}*/
?>

