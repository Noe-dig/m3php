<?php

$fahrenheit = 74;
$celcius = ($fahrenheit - 32) / 1.8;
echo "{$fahrenheit} graden Fahrenheit = {$celcius} graden Celsius. <br/>";

$celsius = 18;
$fahrenheit = ($celcius * (9/5)) + 32;
echo "{$celcius} graden Celsius = {$fahrenheit} graden Fahrenheit. <br/>";


//vergeet niet dat Kelvin niet met graden word genoteerd :)

$celsius = 18;
$kelvin = $celcius + 273.15;
echo "{$celsius} graden Celsius = {$kelvin} Kelvin <br/>";

$fahrenheit = 74;
$kelvin = ($fahrenheit - 32) / 1.8 + 273.15;
echo "{$fahrenheit} graden fahrenheit = {$kelvin} Kelvin";
?>