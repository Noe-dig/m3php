<?php

$input = $_GET['celsius'];

$celsius = floatval($input);
$fahrenheit = ($celsius * (9/5)) + 32;
echo "{$celsius} graden Celsius = {$fahrenheit} graden Fahrenheit. <br/>";

?>