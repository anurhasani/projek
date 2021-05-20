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


$sql = "SELECT matric_id, house_id FROM available";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Matric ID</th><th>House ID</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["matric_id"]. "</td><td>" . $row["house_id"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>