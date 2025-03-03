<?php

$aantalOpVoorraad = 20;
$opVoorraad = $aantalOpVoorraad > 0;

if ($opVoorraad == false){
    echo "niet op vorraad";
}
else if ($opVoorraad == true){
    echo "op voorraad";
}

?>