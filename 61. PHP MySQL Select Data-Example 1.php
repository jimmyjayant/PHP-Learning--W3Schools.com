<?php
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

// Perform query 
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc())
    {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
}
else
{
    echo "0 results";
}
// free result set 
$result->free_result();

// close the connection 
$conn->close(); 
?>