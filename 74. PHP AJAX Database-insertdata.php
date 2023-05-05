<?php
// MySQLi Procedural way to insert data into table 'user' of database 'ajax_demo':- 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajax_demo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// sql to insert multiple data before checking if records already exists 
$sql = "INSERT INTO user (firstname, lastname, age, hometown, job)
SELECT 'Peter', 'Griffin', 41, 'Quahog', 'Brewery'
WHERE NOT EXISTS
                (SELECT firstname, lastname
                FROM user
                WHERE firstname = 'Peter' AND lastname = 'Griffin');";

$sql .= "INSERT INTO user (firstname, lastname, age, hometown, job)
SELECT 'Lois', 'Griffin', 40, 'Newport', 'Piano Teacher'
WHERE NOT EXISTS
                (SELECT firstname, lastname
                FROM user
                WHERE firstname = 'Lois' AND lastname = 'Griffin');";

$sql .= "INSERT INTO user (firstname, lastname, age, hometown, job)
SELECT 'Joseph', 'Swanson', 39, 'Quahog', 'Police Officer'
WHERE NOT EXISTS
                (SELECT firstname, lastname
                FROM user
                WHERE firstname = 'Joseph' AND lastname = 'Swanson');";

$sql .= "INSERT INTO user (firstname, lastname, age, hometown, job)
SELECT 'Glenn', 'Quagmire', 41, 'Quahog', 'Pilot'
WHERE NOT EXISTS
                (SELECT firstname, lastname
                FROM user
                WHERE firstname = 'Glenn' AND lastname = 'Quagmire');";

/*
$sql = "INSERT INTO user (firstname, lastname, age, hometown, job) 
VALUES ('Peter', 'Griffin', 41, 'Quahog', 'Brewery');";
$sql .= "INSERT INTO user (firstname, lastname, age, hometown, job) 
VALUES ('Lois', 'Griffin', 40, 'Newport', 'Piano Teacher');";
$sql .= "INSERT INTO user (firstname, lastname, age, hometown, job) 
VALUES ('Joseph', 'Swanson', 39, 'Quahog', 'Police Officer');";
$sql .= "INSERT INTO user (firstname, lastname, age, hometown, job) 
VALUES ('Glenn', 'Quagmire', 41, 'Quahog', 'Pilot');";
*/

// Check if multiple data is inserted
if(mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully.";
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
}

// Close the connection
mysqli_close($conn); 
?>