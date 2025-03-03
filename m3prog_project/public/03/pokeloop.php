<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/pokeloop.css">
</head>
<body>
    <?php

        $pokemon = ["Mudkip","Torterra","Squirtle","Skarmory","Steelix"];
        $images = ["<img src='/images/mudkip.png'>","<img src='/images/torterra.png'>","<img src='/images/squirtle.png'>","<img src='/images/skarmory.png'>","<img src='/images/steelix.png'>"];

        for ($i=0; $i < count($pokemon) ; $i++){
            echo "<h1>" . $pokemon[$i] . "<br>" . $images[$i] . "</h1>";
        }
    ?>
</body>
</html>