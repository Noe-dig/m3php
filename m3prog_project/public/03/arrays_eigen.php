<?php

$games = ["Diablo III","Doom","WoW","Minecraft","God of War"];

echo "<br>";
echo $games[2]."<br>";
echo $games[4]."<br><br>";

print_r($games);
echo "<br><br>";
var_dump($games);
echo "<br><br>";

echo count($games)."<br>";
array_push($games, "GTA V");
echo count($games)."<br><br>";

echo implode('<br>', $games)."<br><br>";

sort($games);
echo implode('<br>', $games)."<br><br>";
?>