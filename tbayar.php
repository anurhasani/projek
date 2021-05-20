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
$sql = "CREATE TABLE `pays` (

  `paymentNo` varchar(100) NOT NULL , 
  `matric_id` varchar(15) NOT NULL  ,
  `bankName` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  
  PRIMARY KEY (paymentNo),
  FOREIGN KEY (matric_id) REFERENCES users (matric_id)
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1";


if ($conn->query($sql) === TRUE) {
    echo "Table pays created successfully";
} else {
    echo "Error creating table: " . $conn->error;}
$conn->close();
?>