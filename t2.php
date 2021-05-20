<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// sql to create table
$sql = "CREATE TABLE `available` (
  `house_id` varchar(10) NOT NULL,
  `matric_id` varchar(15) NOT NULL,  
  
  PRIMARY KEY (house_id),
  FOREIGN KEY (matric_id) REFERENCES users (matric_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";


if ($conn->query($sql) === TRUE) {
    echo "Table available created successfully";
} else {
    echo "Error creating table: " . $conn->error;}
$conn->close();
?>