<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title> USER </title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
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
<table width="944" border="0" align="center" cellpadding="0" cellspacing="0">


  			<tr>
    		<td align="left" valign="top" class="header_bg">
				<table width="734" border="0" align="center" cellpadding="0" cellspacing="0">
              	<tr>

                <td align="center" valign="top">
			<h3> WELCOME TO SERI HARMONI APARTMENT PAGE <h3>

 	</td>
              	</tr>
            	</table>

				</td>
  			</tr>


        <?php
          $db = mysqli_connect('localhost', 'root', '', 'projek');
          // Check connection
          if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $name = $_SESSION['name'];
          $result = mysqli_query($db,"SELECT * FROM user WHERE username='$name'");

          echo "<table border='1'>
          <tr>
          <th>Firstname</th>
          </tr>";

          while($row = mysqli_fetch_array($result))
            {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "</tr>";
            }
          echo "</table>";

          mysqli_close($db);
?>


<br>
<br>
<br>



















<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>




  <tr>
    <td align="center" valign="top" class="footer">

	<h5>Blok 1, Tingkat Bawah, Seri Bestari Apt, Taman Bahtera, 35900 Tg Malim, Hulu Bernam, Selangor Darul Ehsan.
	<br/>
	Tel: 05-4595002 Fax: 05-4597906 Emel:goldiumproperty@gmail.com</h5>
	</td>
  </tr>
</table>



</body>
</html>
