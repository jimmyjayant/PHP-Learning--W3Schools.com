<?php
#Update the record in the MySQL database with MySQLi Object-Oriented way:- 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE MyGuests SET lastname='DOE' WHERE id=2";

if($conn->query($sql) === TRUE) {
    echo "Record updated successfully.";
}
else {
    echo "Error updating record: " . $conn->error;
}

$conn->close(); 
?>