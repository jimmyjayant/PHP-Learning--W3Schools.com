<?php
// MySQLi Object-Oriented:- 

/* $servername = "localhost";
   $username = "username"; usually 'root'
   $password = "password" usually empty ""
 */

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password); 

// Check connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "Connected successfully"; 
}
?>