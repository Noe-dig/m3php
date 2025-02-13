<?php

    $title = "Mijn niet zo mooie pagina";
    $datum = date('d-m-Y');
    $tijd = date("H:i");
    $favorieteGame = "Super Metroid";
    $mooisteGetal = 42;
    $favorieteShow = "House";
    $leukeStad = "Hoorn";

?>
<!doctype html>
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
    </head>
    <body>
        <h2>De datum vandaag is: <?php echo $datum ?>, en de tijd is <?php echo $tijd ?> uur.
        
        <p><h2>Mijn favoriete game</h2><?php echo $favorieteGame ?></p>
        <p><h2>Mooiste getal:</h2><?= $mooisteGetal ?></p>
        <p><h2>Favoriete show:</h2><?= $favorieteShow ?></p>
        <p><h2>Beste stad:</h2><?= $leukeStad ?></p>
    </body>
</html>