<?php include('serverAdmin.php')
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>

  <form method="post" action="registerAdmin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name" value="">
  	</div>

	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="admin">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="loginAdmin.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
