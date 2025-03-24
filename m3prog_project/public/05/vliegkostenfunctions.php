<?php

function retourKosten($afstand_km, $liter_prijs_kerosine, $bagage_kg, $klasse){
    $reiskosten = ($liter_prijs_kerosine*$afstand_km)/30;
    if($bagage_kg>0){
        $reiskosten+($bagage_kg*5);
    }
    if($klasse === "business class"){
        $reiskosten = $reiskosten*1.5;
    }
    return $reiskosten;
}

?>