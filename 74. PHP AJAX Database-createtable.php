<?php
// MySQLi Procedural Way to Create Table in Database 'ajax_demo':- 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajax_demo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if(!$conn) {
    die("Connection failed:- " . mysqli_connect_error());
}


// Create table in database
$sql = "CREATE TABLE IF NOT EXISTS user(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(40) NOT NULL,
    lastname VARCHAR(40) NOT NULL,
    age INT(2) UNSIGNED NOT NULL,
    hometown VARCHAR(50) NOT NULL,
    job VARCHAR(80) NOT NULL
)";


// Check if table is created 
if(mysqli_query($conn, $sql)) {
    echo "Table user created successfully.";
}
else {
    echo "Error creating table: " . mysqli_error($conn); 
}


// Close the connection 
mysqli_close($conn); 
?>