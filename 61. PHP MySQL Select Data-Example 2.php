<?php
# MySQL Select Data MySQLi Procedural:- 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

// Perform query 
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
  // output data of each row 
  while($row = mysqli_fetch_assoc($result))
  {
    echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>"; 
  }
}
else 
{
    echo "0 results";
}

// free the result set 
mysqli_free_result($result);

// close the connection
mysqli_close($conn); 
?>