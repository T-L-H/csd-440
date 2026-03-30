<?php
// Name: Tevyah Hanley
// Date: March 30, 2026
// Assignment: Table 2
// Purpose: Create an HTML table using nested loops and display random numbers in each cell.
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Random Number Table</title>
</head>
<body>

<h1>My Really Cool Random Number Table</h1>
<!-- This creates the table with 5 rows and 5 columns -->
<table border="1" cellpadding="10">

<?php

for ($row = 1; $row <= 5; $row++) {
?>
    <tr>

    <?php
// This inner loop generates a random number for each cell in the current row
    for ($col = 1; $col <= 5; $col++) {
        $randomNumber = rand(1, 100);
    ?>
        <td>
            <?php echo $randomNumber; ?>
        </td>
    <?php
    }
    ?>

    </tr>
<?php
}
?>

</table>

</body>
</html>