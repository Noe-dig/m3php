<?php

$totaalBesteld = 100.0;
$verzendKosten = 3.50;
$korting = 0;
$cadeautje = false;
$cadeauWaarde = 10;

if($totaalBesteld >= 100){
    $verzendKosten = 0;
}

if($totaalBesteld >= 250){
    $korting = 0.05;
}

if($totaalBesteld >= 400){
    $cadeautje = true;
}

if($totaalBesteld >= 1000){
    $cadeauWaarde = 40;
    $korting = 0.075;
}

$totaal = $totaalBesteld - ($korting*$totaalBesteld) + ($verzendKosten);

echo "Totaal van de bestelde artiekelen $totaalBesteld<br>";
echo "Totaal met verzendkosten wordt het $totaal<br>";

if($cadeautje == true){
    echo "U krijgt ook een cadeautje ter waarde van $cadeauWaarde euro<br>";
}

?>