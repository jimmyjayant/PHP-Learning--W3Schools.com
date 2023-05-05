<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection 
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if(!$conn) {
    die("Connection failed:- " . mysqli_connect_error());
}

// Create database 
$sql = "CREATE DATABASE IF NOT EXISTS ajax_demo";

if(mysqli_query($conn, $sql)) {
        echo "Database created successfully.";
}
else {
    echo "Error creating database:- " . mysqli_error($conn); 
}

// Close the connection
mysqli_close($conn); 
?>