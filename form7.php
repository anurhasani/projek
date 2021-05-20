<?php include('server7.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>House ID</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Booking House</h2>
  </div>
	
  <form method="post" action="form7.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>House ID</label>
  	  <input type="text" name="house_id" value="<?php echo $house_id; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Matric Number</label>
  	  <input type="text" name="matric_id" value="<?php echo $matric_id; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="booking_id">SUBMIT</button>
  	</div>
  	
  </form>
</body>
</html>