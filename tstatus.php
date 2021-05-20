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
$sql = "CREATE TABLE `keputusan` (

  `status_id` int NOT NULL AUTO_INCREMENT,
  `matric_id`  varchar (15) NOT NULL,
 `status` varchar(15) NOT NULL,
  
  PRIMARY KEY (status_id),
   FOREIGN KEY (matric_id) REFERENCES users (matric_id)
   
) ENGINE=InnoDB DEFAULT CHARSET=latin1";


if ($conn->query($sql) === TRUE) {
    echo "Table keputusan created successfully";
} else {
    echo "Error creating table: " . $conn->error;}
$conn->close();
?>