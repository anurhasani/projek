<?php 
  session_start(); 

  if (!isset($_SESSION['status_id'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: l.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>STATUS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>STATUS UPDATED</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

<div class="input-group">
	<button type="submit" class="btn" name=""> <a href='menuAdmin.html'  buttonAlign= 'center' >Okay</a></button>
	</div>
</div>
		
</body>
</html>