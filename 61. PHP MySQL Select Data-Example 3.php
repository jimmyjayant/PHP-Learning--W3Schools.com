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

th {
    text-align:center;
    padding:0.5rem;
}

td {
    text-align:center;
    padding:0.5rem;
}
</style>
</head>
<body>

<?php
# MySQL Select Data MySQLi Object-Oriented result in a HTML table:- 

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

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    echo "<table><tr><th>ID</th><th>Firstname</th><th>Lastname</th>";

    // output data of each row
    while($row = $result->fetch_assoc())
    {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["firstname"] . "</td><td>" . $row["lastname"] . "</td></tr>";
    }
    echo "</table>";
}
else 
{
    echo "0 results";
}

// free the result set 
$result->free_result();

// close the connection 
$conn->close();
?>

</body>
</html>
