<?php

$som1 = 2+2;
$som2 = 5*5;
$som3 = 100/10;
$som4 = 60-25;

echo $som1 . "<br>" . $som2 . "<br>" . $som3 . "<br>" . $som4 . "<br>";

$varsom1 = $som1 * $som2;
$varsom2 = $som4 / $som3;
$varsom3 = ($varsom1 * $som4) / $varsom2 - $som2;

echo $varsom3;


?>