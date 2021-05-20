<?php
session_start();

// initializing variables
$name    = "";
$matric_id    = "";
$username = "";
$password = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'projek');

// REGISTER USER
if (isset($_POST['user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);

  $matric_id = mysqli_real_escape_string($db, $_POST['matric_id']);

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name))
  {
    array_push($errors, "Name is required");
  }

  if (empty($matric_id))
  {
    array_push($errors, "Matric number is required");
  }

  if (empty($username))
  {
    array_push($errors, "Username is required");
  }
  if (empty($password_1))
   {
      array_push($errors, "Password is required");
    }
  if ($password_1 != $password_2) {

	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE username='$username' AND matric_id='$matric_id' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['matric_id'] === $matric_id) {
      array_push($errors, "Matric number already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO user (name, matric_id, username, password)
  			  VALUES('$name','$matric_id','$username', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: menu.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['name'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: menu.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
?>
