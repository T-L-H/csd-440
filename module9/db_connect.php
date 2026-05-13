<?php
/*
    db_connect.php
    Database connection file
    Author: Tevyah Hanley
*/

$host = "localhost";
$username = "root";
$password = "";
$database = "baseball_01";


$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>