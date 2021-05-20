<?php

$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "projek";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}


?>
