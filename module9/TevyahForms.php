<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db_connect.php';

$message = "";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $position = $_POST['position'];
    $rating = $_POST['rating'];
    $touchdowns = $_POST['touchdowns'];
    $years = $_POST['years'];

    $sql = "INSERT INTO browns_players
    (name, position, rating, touchdowns, years)

    VALUES
    ('$name', '$position', '$rating', '$touchdowns', '$years')";

    if ($conn->query($sql) === TRUE) {
        $message = "Record added successfully!";
    } else {
        $message = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tevyah Forms Page</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            background-color: white;
            width: 50%;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }

        input[type=text],
        input[type=number] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        input[type=submit] {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }

        .message {
            margin-top: 20px;
            font-weight: bold;
            color: green;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Add Browns Player</h1>

    <form method="POST" action="">

        <label>Player Name</label>
        <input type="text" name="name" required>

        <label>Position</label>
        <input type="text" name="position" required>

        <label>Rating</label>
        <input type="number" name="rating" required>

        <label>Touchdowns</label>
        <input type="number" name="touchdowns" required>

        <label>Years</label>
        <input type="number" name="years" required>

        <input type="submit" name="submit" value="Add Record">

    </form>

    <div class="message">
        <?php echo $message; ?>
    </div>

</div>

</body>
</html>