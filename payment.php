<?php 
  session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>payment</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	
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

	
	<p> To complete the booking, you have to pay deposit RM100 within a week to avoid cancellation. Thank you.</p>
	
	<br>
	<br>
<h4> Do you want to pay deposit now? </h4>
  <div class="input-group">
  	  <button type="submit" class="btn" name="booking_id"><a href="menu.html">LATER</a></button>
	  <button type="submit" class="btn" name="booking_id"><a href="pembayaran.php">PAY NOW</a></button>
  	</div>
</div>
		
</body>
</html>