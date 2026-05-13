<?php


if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    $brownsData = array(

        "Name" => $_POST["name"],
        "Favorite Browns Player" => $_POST["player"],
        "Favorite Quarterback" => $_POST["qb"],
        "Favorite Running Back" => $_POST["rb"],
        "Favorite Wide Receiver" => $_POST["wr"],
        "Favorite Coach" => $_POST["coach"],
        "Favorite Season" => $_POST["season"],
        "Favorite Browns Moment" => $_POST["moment"]

    );


    $jsonData = json_encode($brownsData, JSON_PRETTY_PRINT);
}

?>

<!DOCTYPE html>
<html>
<head>

    <title>TevyahJSON.php</title>

    <style>

        body
        {
            font-family: Arial;
            background-color: orange;
            padding: 20px;
        }

        .box
        {
            background-color: white;
            padding: 20px;
            width: 500px;
            margin: auto;
        }

        input
        {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
        }

        pre
        {
            background-color: black;
            color: lime;
            padding: 15px;
        }

    </style>

</head>

<body>

<div class="box">

    <h1>Browns Fan Form</h1>

    <form method="post">

        <input type="text" name="name" placeholder="Your Name">

        <input type="text" name="player" placeholder="Favorite Browns Player">

        <input type="text" name="qb" placeholder="Favorite Browns QB">

        <input type="text" name="rb" placeholder="Favorite Browns RB">

        <input type="text" name="wr" placeholder="Favorite Browns WR">

        <input type="text" name="coach" placeholder="Favorite Browns Coach">

        <input type="text" name="season" placeholder="Favorite Browns Season">

        <input type="text" name="moment" placeholder="Favorite Browns Moment">

        <input type="submit" value="Submit">

    </form>

    <?php

      
        if (isset($jsonData))
        {
            echo "<h2>JSON Output</h2>";
            echo "<pre>$jsonData</pre>";
        }

    ?>

</div>

</body>
</html>