<?php

class LunchItem{
    public $naam;
    public $prijs;
    public $beschrijving;
}

$broodjeBal = new LunchItem();
$broodjeBal->naam = "broodje bal";
$broodjeBal->prijs = 4.50;
$broodjeBal->beschrijving = "lekker broodje met een bal gehakt.";

$broodjeFrikandel = new LunchItem();
$broodjeFrikandel->naam = "broodje frikandel";
$broodjeFrikandel->prijs = 2.50;
$broodjeFrikandel->beschrijving = "lekker broodje met een frikandel en curry.";

// echo "$broodjeBal->naam<br>$broodjeBal->prijs<br>$broodjeBal->beschrijving<br><br>";
// echo "$broodjeFrikandel->naam<br>$broodjeFrikandel->prijs<br>$broodjeFrikandel->beschrijving";

$broodjeBalJson = json_encode($broodjeBal);
$broodjeFrikandelJson = json_encode($broodjeFrikandel);

// print("$broodjeBalJson<br>$broodjeFrikandelJson");

$lunchmenu = [$broodjeBal,$broodjeFrikandel];

foreach($lunchmenu as $item){
    echo"<b>$item->naam</b><br>$item->prijs euro<br>$item->beschrijving<br><br>";
}

?>