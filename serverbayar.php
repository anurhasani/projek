<?php
session_start();

// initializing variables
$paymentNo    = "";
$matric_id    = "";
$bankName    = "";
$amount   = "";
$date = "";
$time = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_pays'])) {
  // receive all input values from the form
  $paymentNo = mysqli_real_escape_string($db, $_POST['paymentNo']);
  $matric_id = mysqli_real_escape_string($db, $_POST['matric_id']);
  $bankName = mysqli_real_escape_string($db, $_POST['bankName']);
  $amount = mysqli_real_escape_string($db, $_POST['amount']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $time = mysqli_real_escape_string($db, $_POST['time']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($paymentNo)) { array_push($errors, "Payment Number is required"); }
  if (empty($matric_id)) { array_push($errors, "Matric number is required"); }
  if (empty($bankName)) { array_push($errors, "Bank name is required"); }
  if (empty($amount)) { array_push($errors, "amount paid is required"); }
  if (empty($date)) { array_push($errors, "Date is required"); }
  if (empty($time)) { array_push($errors, "Time is required"); }
 
 $pays_check_query = "SELECT * FROM pays WHERE paymentNo='$paymentNo' LIMIT 1";
  $result = mysqli_query($db, $pays_check_query);
  $pays = mysqli_fetch_assoc($result);
  
  if ($pays) { // if user exists
    if ($pays['paymentNo'] === $paymentNo) {
      array_push($errors, "Payment Number already exists");
    }
  }
  
  if (count($errors) == 0) {
   $query = "INSERT INTO pays (paymentNo, matric_id, bankName, amount, date, time) 
  			  VALUES('$paymentNo', '$matric_id', '$bankName','$amount','$date', '$time')";


  	mysqli_query($db, $query);
  	$_SESSION['paymentNo'] = $paymentNo;
  	$_SESSION['success'] = " Your booking sent";
  	header('location: indexbayar.php');
  }
}


?>