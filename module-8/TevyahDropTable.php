<!DOCTYPE html>
<html>
<head>
    <title>Drop Table</title>
</head>
<body>

<h2>Drop Browns Players Table</h2>

<?php
$host = "localhost";
$user = "student1";
$password = "pass";
$database = "baseball_01";

$conn = new mysqli("localhost", "root", "", "baseball_01");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DROP TABLE browns_players";

if ($conn->query($sql) === TRUE) {
    echo "Table dropped successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

</body>
</html>