<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT matric_id, paymentNo, amount FROM tpays";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Matric ID</th><th>Payment Number</th><th>Amount</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["matric_id"]. "</td><td>" . $row["paymentNo"]. " </td><td>" . $row["Amount"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>