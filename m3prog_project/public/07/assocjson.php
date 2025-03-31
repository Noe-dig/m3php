<?php

$verbruik = ['wasmachine' => 194, 'koffiezetapparaat' => 62, 'stofzuiger' => 90, 'wasdroger' => 234, 'waterkoker' => 109.5];
$persoon = ['voornaam' => 'Thor', 'achternaam' => 'Odinson', 'leeftijd' => 1000, 'favoriete drank' => 'mede', 'minst favoriete drank' => 'waarschijnlijk water', 'woonplaats' => 'Asgaard'];
$trophiesPerGame = ["Demon's souls" => 11,"Mario wonder" => 0,"Rayman Origins" => 9,"Tetris" => 10];
$temperatuurVerwachting = ['maandag' => 13, 'dinsdag' => 11, 'woensdag' => 12, 'donderdag' => 17, 'vrijdag' => 14, 'zaterdag' => 15, 'zondag' => 15];

$jsonArray = [$verbruik, $persoon, $trophiesPerGame, $temperatuurVerwachting];

$json = json_encode($jsonArray);
echo $json;

header("Content-Type: application/json");

?>