<?php
# Deleting a MySQL database record using PDO(PHP Data Objects):-

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
// Create connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=3";

// use exec() because no results are returned
$conn->exec($sql);
echo "Record deleted successfully."; 
}
catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage(); 
}


// close the connection 
$conn = null;

?>