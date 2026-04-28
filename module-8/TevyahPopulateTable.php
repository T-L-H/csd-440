
<!DOCTYPE html>
<html>
<head>
    <title>Populate Table</title>
</head>
<body>

<h2>Insert Browns Players</h2>

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$host = "localhost";
$user = "root";
$password = "";
$database = "baseball_01";

$conn = new mysqli("localhost", "root", "", "baseball_01");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO browns_players (name, position, rating, touchdowns, years) VALUES
('Quinshawn Judkins', 'RB', 82, 8, 1),
('Myles Garrett', 'DE', 99, 14, 7),
('Jerry Jeudy', 'WR', 85, 6, 4),
('Shedeur Sanders', 'QB', 84, 25, 2),
('Denzel Ward', 'CB', 92, 2, 6)";

if ($conn->query($sql) === TRUE) {
    echo "Players inserted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

</body>
</html>