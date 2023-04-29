<?php
# Prepared Statements with PDO:- 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (:firstname, :lastname, :email)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);

    // insert a row
    $firstname = "Sumit";
    $lastname = "Kumar";
    $email = "sumit@example.com";
    $stmt->execute();

    // insert another row
    $firstname = "Sanjay";
    $lastname = "Singh";
    $email = "sanjay@example.com";
    $stmt->execute();

    // insert another row
    $firstname = "Sushil";
    $lastname = "Kumar";
    $email = "sushil@example.com";
    $stmt->execute();

    echo "New records created successfully.";
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage(); 
}

$conn = null; 
?>