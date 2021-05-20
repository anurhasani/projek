<?php
session_start();

// initializing variables

$matric_id    = "";
$status    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_keputusan'])) {
  // receive all input values from the form
  
  $matric_id = mysqli_real_escape_string($db, $_POST['matric_id']);
  $status = mysqli_real_escape_string($db, $_POST['status']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
 
  if (empty($matric_id)) { array_push($errors, "Matric id is required"); }
  if (empty($status)) { array_push($errors, "Booking status is required"); }
 

 $keputusan_check_query = "SELECT * FROM keputusan WHERE matric_id_id='$matric_id' LIMIT 1";
  $result = mysqli_query($db, $keputusan_check_query);
  $keputusan = mysqli_fetch_assoc($result);
  
  if ($keputusan) { // if user exists
    if ($keputusan['matric_id'] === $matric_id) {
      array_push($errors, "Matric id already have status");
    }
  }
  
  if (count($errors) == 0) {
   $query = "INSERT INTO keputusan (status_id, status) 
  			  VALUES ('$matric_id', '$status')";


  	mysqli_query($db, $query);
  	$_SESSION['matric_id'] = $matric_id;
  	$_SESSION['success'] = "status updated";
  	header('location: indexstatus.php');
  }

  
}

?>