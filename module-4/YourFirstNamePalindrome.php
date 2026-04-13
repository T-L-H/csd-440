<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Palindrome Checker</title>
</head>
<body>

<h1>Palindrome Checker Program</h1>

<?php
function isPalindrome($str) {
    $cleanStr = strtolower(str_replace(' ', '', $str));
    $reversed = strrev($cleanStr);
    return $cleanStr === $reversed;
}

function displayResult($str) {
    $cleanStr = strtolower(str_replace(' ', '', $str));
    $reversed = strrev($cleanStr);

    echo "<p>";
    echo "<strong>Original:</strong> $str <br>";
    echo "<strong>Reversed:</strong> $reversed <br>";

    if (isPalindrome($str)) {
        echo "<strong>Result:</strong> Palindrome";
    } else {
        echo "<strong>Result:</strong> Not a Palindrome";
    }

    echo "</p><hr>";
}

$testStrings = [
    "tacocat",
    "anna",
    "racecar",
    "what's up doc",
    "Nic Cage",
    "if you are reading this, this is not a palindrome"
];

foreach ($testStrings as $string) {
    displayResult($string);
}
?>

</body>
</html>