<?php

include_once "vliegkostenfunctions.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $kosten = number_format(retourKosten(3722, 2.05, 20, "economy class"),2);
        echo "<h1>e$kosten</h1><br>";
        $kosten = number_format(retourKosten(9276, 3.11, 10, "economy class"),2);
        echo "<h1>e$kosten</h1><br>";
        $kosten = number_format(retourKosten(803, 2.83, 0, "business class"),2);
        echo "<h1>e$kosten</h1><br>";
    ?>
    <style>
        *{
            font-family: sans-serif;
        }
        h1{
            color: blue;
        }
    </style>
</body>
</html>