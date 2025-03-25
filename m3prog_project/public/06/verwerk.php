<?php

$naam = $_POST['naam'];
$date = $_POST['date'];
$degrees = $_POST['degrees'];


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
           
            print_r("<p><h1>Uw naam:</h1><h2>$naam</h2><br></p>
                    <p><h1>Gekozen datum:</h1><h2>$date</h2><br></p>
                    <p><h1>Gekozen graad:</h1><h2>$degrees</h2><br></p>");


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
            font-family: sans-serif;
        }
        h1{
            font-size: 3rem;
            color: darkblue;
        }
        h2{
            font-size: 2rem;
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