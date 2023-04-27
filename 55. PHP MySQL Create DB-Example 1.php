<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = new mysqli($servername, $username, $password); 

// Check connection
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection successfully.";

// Create database
$sql = "CREATE DATABASE myDB";
if($conn->query($sql) === TRUE) {
    echo "<br>Database created successfully.";
}
else {
    echo "<br>Error creating database: " . $conn->error;
}
$conn->close();
?>