<?php
// TevyahForm.php


$name = $email = $age = $password = "";
$error = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $age = trim($_POST["age"]);
    $password = trim($_POST["password"]);


    if (empty($name) || empty($email) || empty($age) || empty($password)) {
        $error = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } elseif (!is_numeric($age) || $age <= 0) {
        $error = "Age must be a positive number.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tevyah Form</title>
</head>
<body>

<h2>User Form</h2>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && $error != "") {
    echo "<p style='color:red;'><strong>Error:</strong> $error</p>";
}
?>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && $error == ""): ?>

    <h3>Submitted Data</h3>
    <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
    <p><strong>Age:</strong> <?php echo htmlspecialchars($age); ?></p>

<?php else: ?>

    <form method="post" action="">
        <label>Name:</label><br>
        <input type="text" name="name"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <label>Age:</label><br>
        <input type="number" name="age"><br><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br><br>

        <input type="submit" value="Submit">
    </form>

<?php endif; ?>

</body>
</html>