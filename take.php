<?php
 include('serverstatus.php') 


// connecting to database
mysql_connect('localhost','root','');
mysql_select_db('registration');


$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "registration"; 


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection 
if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
//fething database
$query = "SELECT * from keputusan";
$result = mysql_query ($query) or die (mysql_error);

$row = mysql_fetch_array ($result);



//print_r(row);
$status_id = $row (0);
$matric_id = $row(1);
$status = $row(2);


echo $matric_id . "<BR>" . $status . "<BR>";



?>