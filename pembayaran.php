<?php include('serverbayar.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Payment </title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<style>
body {
background-color:LemonChiffon;

}

.btn {
    background-color: SaddleBrown;
    border: none;
    color: #f2f2f2;
    padding: 12px 16px;
    font-size: 16px;
    cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
    background-color: Cornsilk ;
	color: black;
}
#navbar {
  overflow: hidden;
  background-color: SaddleBrown ;
  font-family:Calibri;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: Cornsilk ;
  color: black;
}

#navbar a.active {
  color: #f2f2f2;

}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 30px;
}


ul {
            font-family:Calibri;
            font-size: 14px;
            margin: 0;
            padding: 0;
            list-style: none;
        }
        ul li {
            display: block;
            position: relative;
            float: right;
        }
        li ul { display: none; }
        ul li a {
            display: block;
            text-decoration: none;
            color: #ffffff;
            border-top: 1px solid #ffffff;
            padding: 5px 15px 5px 15px;
            background: SaddleBrown;
            margin-left: 1px;
            white-space: nowrap;
        }

        ul li a:hover { background: SaddleBrown; }
        li:hover ul { 
            display: block; 
            position: absolute;
        }
        li:hover li { 
            float: none;
            font-size: 11px;
        }
        li:hover a { background:SaddleBrown; }
        li:hover li a:hover { background: Cornsilk; }
		
		
/*-----------------------MAIN-BG ENDS-----------------------------*/

/*-----------------------HEADER STARTS------------------------------*/
.header_bg{
	background-color:PeachPuff  ;
	color:#615F22;
	width:784px;
	padding:16px 0 22px;

}
.header_bg h2{
	color:#000;
	background-color:inherit;
	padding:5px 0 7px;
}
.header_bg h2 span{
	color:#2A5C0B;
	font:normal 16px/23px "Tahoma", Arial, Helvetica, sans-serif;
	background-color:inherit;
	display:block;
}
.header_bg p{
	color:#000;
	background-color:inherit;
	width:435px;
}
.header_bg ul{
	padding-top:17px;
}
.header_bg ul li{
	background:url(images/bullet.gif) no-repeat 0 50%;
	padding-left:9px;
	line-height:0px;
	font-size:0px;
}
.header_bg ul li a{
	font:normal 10px/14px Arial, Helvetica, sans-serif;
	color:#EA2A15;
	background-color:inherit;
	text-decoration:none;
}
.header_bg ul li a:hover{
	text-decoration:underline;
}
/*-----------------------HEADER ENDS-----------------------------*/

/*-----------------------BODY STARTS------------------------------*/
.body_bttm{
	padding-top:5px;
}
/*---------BODY_RIGHT STARTS----------*/
.body_right{
	width:228px;
	background:url(images/body_right.jpg) repeat-x 0 0 #1D2D25;
	border:1px solid #1D2D25;
	padding:34px 0 25px;
}
.body_right h5{
	padding:22px 0 20px;
}
.body_right p.readmore{
	padding:5px 0 0;
}
.body_right p.readmore a{
	color:#B0390E;
	font-size:10px;
	background-color:inherit;
	text-decoration:none;
}
.body_right p.readmore a:hover{
	text-decoration:underline;
}
/*---------BODY_RIGHT ENDS----------*/
/*---------BODY_LEFT STARTS----------*/
.body_left{
	width:532px;
	padding-right:22px;
}
.body_left h2{
	padding:29px 0 34px;
}
.body_left a.img{
	display:block;
	border:10px solid #fff;
	text-decoration:none;
}
.body_left a.img:hover{
	border:10px solid #E4ED5C;
}
.body_left p{
	font:normal 11px/14px "Trebuchet MS", Arial, Helvetica, sans-serif;
	padding-top:12px;
}
/*---------BODY_LEFT ENDS----------*/

/*-----------------------BODY ENDS------------------------------*/


/*-----------------------FOOTER STARTS------------------------------*/
.footer{
	background:url(images/footer_bg.gif) repeat-x 0 0;
	color:black;
	background-color:inherit;
	padding:24px 0 23px;
}
.footer p.link{
	font:normal 10px/12px "Tahoma", Arial, Helvetica, sans-serif;
	color:LemonChiffon ;
	background-color:inherit;
	text-transform:uppercase;
	padding-bottom:23px;
}
.footer p.link a{
	font:normal 10px/12px "Tahoma", Arial, Helvetica, sans-serif;
	color:LemonChiffon ;
	background-color:inherit;
	text-decoration:none;
}
.footer p.link span{
	padding:0 16px;
}
.footer p.link a:hover{
	color:#FF0000;
	background-color:inherit;
	text-decoration:none;
}
.footer p{
	font:normal 10px/14px Arial, Helvetica, sans-serif;
	color:black;
	background-color:inherit;
}
.footer p a{
	color:black;
	text-decoration:none;
	background-color:inherit;
}
.footer p a:hover{
	text-decoration:underline;
}
/*-----------------------FOOTER ENDS------------------------------*/


* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

</style>
<body>
<br>
<br> 
<br>
  <div id="navbar"> 
 <a href="menu.html"><i class="fa fa-home"></i></button></a>
 <a href="choose.php">Availability</a>
 <a href="pembayaran.php">Payment</a>
  <a href="statususer.php ">Status</a>

        <ul id="menu">
<li><a href="homepage.html">Logout</a> 
             </li>
			 </ul>
			 </div>
          
 
<br>
<br>

  <div class="header">
  	<h2>Payment</h2>
  </div>
  
    <div class="header">
  	<h4> Please fill in the form after you do the payment to confirm your booking. </h4>
	<h4> Please keep your reciept for evidence </h4>
  </div>
	
  <form method="post" action="pembayaran.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Reference Number</label>
  	  <input type="text" name="paymentNo" value="<?php echo $paymentNo; ?>">
  	</div>
	<div class="input-group">
  	  <label>Matric Number</label>
  	  <input type="text" name="matric_id" value="<?php echo $matric_id; ?>">
  	</div>	
  	<div class="input-group">
  	  <label>Bank Name</label>
  	  <input type="text" name="bankName" value="<?php echo $bankName; ?>">
  	</div>
	
	<div class="input-group">
  	  <label>Amount</label>
  	  <input type="text" name="amount" value="<?php echo $amount; ?>">
  	</div>
	<div class="input-group">
  	  <label>Date</label>
  	  <input type="date" name="date" value="<?php echo $date; ?>">
  	</div>
  	<div class="input-group">
  	  <label>time</label>
  	  <input type="time" name="time" value="<?php echo $time; ?>">
  	</div>
  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_pays">Submit</button>
  	</div>
  	
  </form>
</body>
</html>