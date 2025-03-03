<?php 

$standaardString = 'hello world<br>';
$extraString = "extra world<br>";
$voornaam = "Luigi";
$achternaam = "Mario";
$fullname = $voornaam . " " . $achternaam . "<br>";

$variableNaam = "Gideon";
$mijnString = "$variableNaam zegt hallo! <br>";

//je zet <br> in de string omdat php alles in een string als platte code  in een browserpagina zet, hierom leest de browser "<br>" als <br> en onstaat er een breakline. 

echo $standaardString;
echo $extraString;
echo $fullname;
echo $mijnString;


$naam = "Yoshi";
$ondertekentDoor = "Directeur Bowser";
$enemy = "Koopa Troopa's"; 

$emailTekst = "<br>Beste $naam<br>
Helaas moeten wij uw verzoek afwijzen.<br>
Onze $enemy vinden het niet leuk om opgegeten te worden<br>
<br>
Hoogachtend<br>
$ondertekentDoor<br>
<br>
PS:<br>
De princess is in haar kasteel... voor nu :>";

echo $emailTekst

?>