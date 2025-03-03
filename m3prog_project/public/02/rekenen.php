<?php

$getal1 = 3.14159;
$getal2 = 1.4112005;

$afgerond1 = ceil($getal1);
$afgerond2 = floor($getal2);
$random1 = rand();
$random2 = rand();
$random3 = rand();
$randomsum = $random1 + $random2;
$randomdivide = $randomsum / $random3;

echo $afgerond1 . "<br>";
echo $afgerond2 . "<br>";
echo $random1 . "<br>";
echo $random2 . "<br>";
echo $random3 . "<br>";
echo $randomsum . "<br>";
echo $randomdivide . "<br>";

?>