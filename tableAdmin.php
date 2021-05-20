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
$sql = "CREATE TABLE `admin` (
  `id_pekerja` varchar(15) NOT NULL  PRIMARY KEY,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";


if ($conn->query($sql) === TRUE) {
    echo "Table admin created successfully";
} else {
    echo "Error creating table: " . $conn->error;}
$conn->close();
?>