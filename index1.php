<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Confirmation page</h2>
</div>
<div class="content">
  	<!-- notification message -->

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['matric_id','house_id'])) : ?>
    	<p> <strong><?php echo $_SESSION['matric_id'];
                                 echo $_SESSION['house_id'];		?></strong></p>
    	<div class="input-group">
  	  <button type="submit" class="btn" name="booking_id">SUBMIT</button>
  	</div> <button><a href="choose.php">CANCEL</a></button>
    <?php endif ?>
</div>
		
</body>
</html>