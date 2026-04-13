<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Array Program</title>
</head>
<body>

<h1>Cleveland Browns "Customer" List</h1>

<?php
$customers = [
    ["first" => "Shedeur", "last" => "Sanders", "age" => 23, "phone" => "216-100-0001"],
    ["first" => "Quinshon", "last" => "Judkins", "age" => 21, "phone" => "216-100-0002"],
    ["first" => "Jerry", "last" => "Jeudy", "age" => 26, "phone" => "216-100-0003"],
    ["first" => "Harold", "last" => "Fannin Jr.", "age" => 22, "phone" => "216-100-0004"],
    ["first" => "Joel", "last" => "Bitonio", "age" => 33, "phone" => "216-100-0005"],
    ["first" => "Myles", "last" => "Garrett", "age" => 29, "phone" => "216-100-0006"],
    ["first" => "Denzel", "last" => "Ward", "age" => 27, "phone" => "216-100-0007"],
    ["first" => "Jeremiah", "last" => "Owusu-Koramoah", "age" => 25, "phone" => "216-100-0008"],
    ["first" => "Grant", "last" => "Delpit", "age" => 26, "phone" => "216-100-0009"],
    ["first" => "Andre", "last" => "Schmidt", "age" => 23, "phone" => "216-100-0010"]
];

function displayCustomers($list) {
    foreach ($list as $customer) {
        echo "<p>";
        echo $customer["first"] . " " . $customer["last"] . "<br>";
        echo "Age: " . $customer["age"] . "<br>";
        echo "Phone: " . $customer["phone"];
        echo "</p><hr>";
    }
}

echo "<h2>All Players</h2>";
displayCustomers($customers);

// Cleveland browns players over the age the 25 (peak form)
$over25 = array_filter($customers, function($c) {
    return $c["age"] > 25;
});

echo "<h2>Players Over Age 25</h2>";
displayCustomers($over25);

// Players named "Jerry", had to single him out due to all his drops last year
$namedJerry = array_filter($customers, function($c) {
    return $c["first"] === "Jerry";
});

echo "<h2>Players Named Jerry</h2>";
displayCustomers($namedJerry);

// Last names starting with 'S'
$lastNameS = array_filter($customers, function($c) {
    return strpos($c["last"], "S") === 0;
});

echo "<h2>Last Names Starting with S</h2>";
displayCustomers($lastNameS);
?>

</body>
</html>