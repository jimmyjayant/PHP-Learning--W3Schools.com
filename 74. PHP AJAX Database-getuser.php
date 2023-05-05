<!DOCTYPE html>
<html>
<head>
<style>
table {
    width:100%;
    border:0.1rem solid grey;
    border-collapse:collapse;
}

th, td {
    padding:0.5rem;
    border:0.1rem solid grey;
    text-align:center;
}

tr:nth-child(even) {
    background-color:#f1f1f1;
}
</style>
</head>
<body>

<?php
// MySQLi Procedural Way to Get Data from Database:- 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajax_demo";

$q  = intval($_GET['q']);

// Create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection 
if(!$conn) {
   die("Could not connect:- " . mysqli_connect_error());
}

// sql query to get record 
$sql = "SELECT * FROM user WHERE id = '" . $q . "'";
$result = mysqli_query($conn, $sql);

echo "<table>
<tr>
<th>FirstName</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['hometown'] . "</td>";
    echo "<td>" . $row['job'] . "</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($conn);
?>

</body>
</html>