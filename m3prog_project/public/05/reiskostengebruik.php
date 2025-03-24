<?php

include_once "reiskosten.php";

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
        $kosten = number_format(berekenRitKosten(663, 15, 1.9),2);
        echo "<h1>Berlijn:</h1><h2>e$kosten</h2><br>";
        $kosten = number_format(berekenRitKosten(1438, 20, 1.46),2);
        echo "<h1>Stockholm:</h1><h2>e$kosten</h2><br>";
        $kosten = number_format(berekenRitKosten(1991, 18.47, 2.23),2);
        echo "<h1>Kiev:</h1><h2>e$kosten</h2><br>";
    ?>
    <style>
        *{
            font-family: sans-serif;
        }
        h1{
            color: blue;
        }
        h2{
            color: red;
        }
    </style>
</body>
</html>