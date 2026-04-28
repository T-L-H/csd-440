<!DOCTYPE html>
<html>
<head>
    <title>Query Table</title>
</head>
<body>

<h2>Browns Players</h2>

<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "baseball_01";

$conn = new mysqli("localhost", "root", "", "baseball_01");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM browns_players";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Position</th>
                <th>Rating</th>
                <th>Touchdowns</th>
                <th>Years</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['position']}</td>
                <td>{$row['rating']}</td>
                <td>{$row['touchdowns']}</td>
                <td>{$row['years']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No results found.";
}

$conn->close();
?>

</body>
</html>