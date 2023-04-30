<!DOCTYPE html>
<html>
<head>
<style>
table {
    width:100%;
    border:0.1rem solid grey;
    border-collapse:collapse;
}

tr {
    height:3rem;
}

tr:nth-child(even) {
    background-color:#f1f1f1;
}

td {
    text-align:center;
    padding:0.5rem;
}

th {
    text-align:center;
    padding:0.5rem; 
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
$result = $conn->query($sql);

if($result->num_rows > 0){
    // output data of each row
    echo "<table>";
    echo "<tr><th>ID</th><th>Firstname</th><th>Lastname</th></tr>";
    while($row=$result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["firstname"] . "</td><td>" . $row["lastname"] . "</td></tr>";
    }
    echo "</table>";
}
else {
    echo "0 results";
}

// free the result set 
$result->free_result();

// close the connection
$conn->close();
?>

</body>
</html>