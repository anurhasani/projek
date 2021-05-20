<?php
session_start();

// initializing variables
$house_id    = "";
$matric_id    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['booking_id'])) {
  // receive all input values from the form
  $house_id = mysqli_real_escape_string($db, $_POST['house_id']);
  $matric_id = mysqli_real_escape_string($db, $_POST['matric_id']);
 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($house_id)) { array_push($errors, "Your selected house id is required"); }
   if (empty($matric_id)) { array_push($errors, "Matric number is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $available_check_query = "SELECT * FROM available WHERE house_id='$house_id'  LIMIT 6";
  $result = mysqli_query($db, $available_check_query);
  $available = mysqli_fetch_assoc($result);
  
  if ($available) { // if user exists
    if (($available['house_id']) <= '6' ) {
      array_push($errors, "This house is full");
    }

  }


  	$query = "INSERT INTO available (house_id,matric_id) 
  			  VALUES('$house_id','&matric_id')";
  	mysqli_query($db, $query);
  	$_SESSION['house_id'] = $house_id;
  	$_SESSION['success'] = "Your booking is successful.";
  	header('location: payment.php');
  }

	
  


?>