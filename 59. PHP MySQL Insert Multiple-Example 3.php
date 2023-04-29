<?php
#PDO:- 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // begin the transaction
    $conn->beginTransaction();

    // our SQL statements
    $conn->exec("INSERT INTO MyGuests(firstname, lastname, email) VALUES ('Sumit', 'Kumar', 'sumit@example.com')");
    $conn->exec("INSERT INTO MyGuests(firstname, lastname, email) VALUES ('Amit', 'Kumar', 'amit@example.com')");
    $conn->exec("INSERT INTO MyGuests(firstname, lastname, email) VALUES ('Sonam', 'Kumari', 'sonam@example.com')");

    // Commit the transaction
    $conn->commit();
    echo "New Records created successfully.";
}
catch(PDOException $e) {
    // roll back the transaction if something failed
    $conn->rollback();
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>