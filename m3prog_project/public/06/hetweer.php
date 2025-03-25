<?php

$voorspelling = [
    "ma" => 20,
    "di" => 18,
    "wo" => 21,
    "do" => 15,
    "vr" => 23,
    "za" => 22,
    "zo" => 17,
];
$icoontje = [
    "ma" => "../assets/images/sun.png",
    "di" => "../assets/images/cloud.png",
    "wo" => "../assets/images/sun.png",
    "do" => "../assets/images/thunder.png",
    "vr" => "../assets/images/rain.png",
    "za" => "../assets/images/cloud.png",
    "zo" => "../assets/images/sun.png",
];

$dag = $_GET['dag'];

$fahrenheit = ($voorspelling[$dag] * (9/5)) + 32;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <article>
        <?php
            echo "<h1>De voorspelling voor <b>$dag</b> is $voorspelling[$dag]C</h1><br><img src='$icoontje[$dag]'><br>";
            echo "<h2>{$voorspelling[$dag]} graden Celsius = {$fahrenheit} graden Fahrenheit.</h2>";
        ?>
    </article>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        html{
            font-size: 62.5%
        }
        body{
            background: lightgrey;
            display: grid;
            height: 100vh;
            grid-template-columns: auto auto;
            grid-template-rows: repeat(3, 1fr);
        }
        h1{
            font-size: 4rem;
            color: darkblue;
        }
        h2{
            font-size: 3rem;
            margin-bottom: 3rem;
            color: grey;
        }
        article{
            padding: 2rem;
            background: white;
            grid-row: 2/3;
            grid-column: 2/3;
            border-radius: 1.2rem;
            box-shadow: 0 0 1rem 1rem rgba(0,0,0,0.2);
            width: 40rem;
            text-align: center;
        }
    </style>
</body>
</html>