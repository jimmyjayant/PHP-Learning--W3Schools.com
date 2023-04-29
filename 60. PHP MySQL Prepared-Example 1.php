<?php
#MySQLi with Prepared Statements:- 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and Bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "Johnny";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Julia";
$lastname = "Doe";
$email = "julia@example.com";
$stmt->execute();

echo "New records created successfully.";

$stmt->close();
$conn->close();
?>