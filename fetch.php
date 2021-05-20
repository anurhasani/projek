
<php
include_once('connection.php');
$query = "select * from status";
$result = mysql_query($query);

<!DOCTYPE html>
<html>
<title>status</title>

<body>

<table align="center" border= "1px" width="300px" height="30px"; >

<t>
<th> student name </th>
<th> status </th>
</t>

<php

while ($rows= mysql_fetch_assoc ($result))
{
?>
 <tr>
		<td> $student = <?php echo $rows ['student']; ?></td>
		<td> $bookstatus =  <?php echo $rows ['bookStatus']; ?></td>
	</tr>
}	
<?php
	
	
?

</table>

</body>
</html>