<?php
#Update the record of MySQL database with PDO way:- 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
// Create connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// set PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

// Prepare statement
$stmt = $conn->prepare($sql);

// execute the query
$stmt->execute(); 

// echo a message to say the UPDATE succeeded 
echo $stmt->rowCount() . " records UPDATED successfully"; 
}
catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage(); 
}


// close the connection 
$conn = null; 

?>