<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tevyah Query Page</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        .container {
            background-color: white;
            padding: 20px;
            width: 70%;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }

        h1 {
            margin-bottom: 20px;
        }

        input[type=text] {
            padding: 10px;
            width: 60%;
        }

        input[type=submit] {
            padding: 10px 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #007BFF;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Search Browns Players</h1>

    <form method="POST" action="">
        <input type="text" name="search" placeholder="Enter player name">
        <input type="submit" name="submit" value="Search">
    </form>

<?php

if (isset($_POST['submit'])) {

    $search = $_POST['search'];

    $sql = "SELECT * FROM browns_players
            WHERE name LIKE '%$search%'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        echo "<table>";

        echo "<tr>
                <th>ID</th>
                <th>Name</th>
                <th>Position</th>
                <th>Rating</th>
                <th>Touchdowns</th>
                <th>Years</th>
              </tr>";

        while($row = $result->fetch_assoc()) {

            echo "<tr>";

            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['position'] . "</td>";
            echo "<td>" . $row['rating'] . "</td>";
            echo "<td>" . $row['touchdowns'] . "</td>";
            echo "<td>" . $row['years'] . "</td>";

            echo "</tr>";
        }

        echo "</table>";

    } else {

        echo "<p>No records found.</p>";
    }
}

$conn->close();

?>

</div>

</body>
</html>