<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyInteger Class Program</title>
</head>
<body>

<h1>MyInteger Class Test To Show if A Number is Prime!</h1>

<?php

class TevyahMyInteger {
    private $value;

   
    public function __construct($value) {
        $this->value = $value;
    }

    
    public function getValue() {
        return $this->value;
    }

   
    public function setValue($value) {
        $this->value = $value;
    }

    
    public function isEven() {
        return $this->value % 2 == 0;
    }

  
     public function isOdd() {
        return $this->value % 2 != 0;
    }

    /**
     * Check if the number is a prime number
     */
     public function isPrime() {
        if ($this->value <= 1) return false;

        for ($i = 2; $i <= sqrt($this->value); $i++) {
            if ($this->value % $i == 0) {
                return false;
            }
        }
        return true;
    }
}

/**
 * Display the wonderful results!
 */
function displayResults($obj) {
    $value = $obj->getValue();

    echo "<p>";
    echo "<strong>Value:</strong> $value <br>";
    echo "<strong>Even:</strong> " . ($obj->isEven() ? "Yes" : "No") . "<br>";
    echo "<strong>Odd:</strong> " . ($obj->isOdd() ? "Yes" : "No") . "<br>";
    echo "<strong>Prime:</strong> " . ($obj->isPrime() ? "Yes" : "No");
    echo "</p><hr>";
}


$num1 = new TevyahMyInteger(7);
$num2 = new TevyahMyInteger(10);


 echo "<h2>Initial Values</h2>";
displayResults($num1);
displayResults($num2);


  $num2->setValue(13);

echo "<h2>After Changing Second Value</h2>";
displayResults($num2);
?>

</body>
</html>