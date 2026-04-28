<!DOCTYPE html>
<html>
<head>
    <title>Create Table</title>
</head>
<body>

<h2>Create Browns Players Table</h2>

<?php
$host = "localhost";
$user = "student1";
$password = "pass";
$database = "baseball_01";

$conn = new mysqli("localhost", "root", "", "baseball_01");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE browns_players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    position VARCHAR(50),
    rating INT,
    touchdowns INT,
    years INT
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

</body>
</html>