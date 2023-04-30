<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection 
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    // output the data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id:- " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
}
else {
    echo "0 results";
}

$result->free_result();

$conn->close();
?>