<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connection Successful.";

// sql to create table
$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if(mysqli_query($conn,$sql)) {
    echo "<br>Table MyGuests created successfully.";
}
else {
    echo "<br>Error creating table:" . mysqli_error($conn);
}

mysqli_close($conn);
?>