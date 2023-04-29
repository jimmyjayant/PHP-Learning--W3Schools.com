<?php
#MySQLi Procedural:- 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Peter', 'Pan', 'peter@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Marie', 'Doe', 'marie@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Ram', 'Kumar', 'ram@example.com');";

if(mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully.";
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>