<?php

// header("Content-type: application/json");

$winkel='{
    "winkel": {
      "producten": [
        {
          "productNaam": "Laptop",
          "details": {
            "prijs": 999.99,
            "voorraad": 50
          }
        },
        {
          "productNaam": "Smartphone",
          "details": {
            "prijs": 699.99,
            "voorraad": 100
          }
        }
      ]
    }
  }
  ';

$winkelObj = json_decode($winkel);
// print_r($winkelObj);

echo $winkelObj->winkel->producten[1]->productNaam;
echo "<br>".$winkelObj->winkel->producten[1]->details->prijs." euro";

echo "<br>".$winkelObj->winkel->producten[0]->productNaam;
echo "<br>".$winkelObj->winkel->producten[0]->details->voorraad." op voorraad";
?>