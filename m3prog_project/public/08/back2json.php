<?php

$json = '{"naam":"God of war",
            "prijs":39.99,
            "voorraad":150,
            "beschrijving":"Slash through hordes of enemies as the brutal Ghost of Sparta!"
        }';

$artiekel = json_decode($json);

$artiekel->prijs = 29.99;
$artiekel->voorraad = 20;

print_r($artiekel);
echo "<br><br>";
$jsonString = $artiekel->naam."<br>".$artiekel->prijs."<br>".$artiekel->voorraad."<br>".$artiekel->beschrijving;

echo $jsonString."<br><br>";

$encondedArtiekel = json_encode($artiekel);
echo $encondedArtiekel;

?>