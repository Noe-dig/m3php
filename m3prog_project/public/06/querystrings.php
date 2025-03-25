<?php

$stad = $_GET['stad'];
$temp = $_GET['temperatuur'];
$land = $_GET['land'];

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

        echo "<h1>Stad:</h1> <h2>$stad <br></h2> 
            <h1>Temperatuur:</h1> <h2>$temp C<br></h2> 
            <h1>Land:</h1> <h2>$land</h2>";

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
            background: white;
            grid-row: 2/3;
            grid-column: 2/3;
            border-radius: 1.2rem;
            box-shadow: 0 0 1rem 1rem rgba(0,0,0,0.2);
            width: 30rem;
            text-align: center;
        }
    </style>
</body>
</html>