<?php

$trophiesPerGame = [
    "Demon's souls" => 11,
    "Mario wonder" => 0,
    "Rayman Origins" => 9,
    "Tetris" => 10
];

$trophiesForDS = $trophiesPerGame["Demon's souls"];
$trophiesForMW = $trophiesPerGame["Mario wonder"];
$trophiesForRO = $trophiesPerGame["Rayman Origins"];
$trophiesForTe = $trophiesPerGame["Tetris"];
print_r($trophiesForDS."<br>".$trophiesForMW."<br>".$trophiesForRO."<br>".$trophiesForTe);

?>