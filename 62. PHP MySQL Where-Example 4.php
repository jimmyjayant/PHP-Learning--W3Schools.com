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

echo "<table>";
echo "<tr><th>ID</th><td>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td>" . parent::current() . "</td>"; 
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n"; 
    }
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
// Create connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'");
$stmt->execute(); 

// set the resulting array to associative 
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v; 
  }
}
catch(PDOException $e) {
   echo "Error: " . $e->getMessage();  
}

$conn = null;
echo "</table>"; 
?>

</body>
</html>
