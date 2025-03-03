<?php

$voorGerecht = "voor"; 
$hoofdGerecht = "hoofd";
$naGerecht = "na";
$naamGerecht = "pizza Napolitana";
$prijs = 14.99;
$beschrijving = "Een traditionele italiaanse pizza";
$ingredientenLijst = "verse basilicum en mozzarella, olijfolie, tomaten en een eenvoudig tarwedeeg";
$allergenenLijst = "zuivel" . ", " . "granen";

$menu = "Gerecht type: $hoofdGerecht<br>
        <br>
        $naamGerecht €$prijs<br>
        <br>
        $beschrijving<br>
        Ingegredientenlijst:<br>
        $ingredientenLijst<br>
        <br>
        Bent u allergisch? bekijk dan hieronder de allergenen:<br>
        $allergenenLijst<br>";

echo $menu;

?>