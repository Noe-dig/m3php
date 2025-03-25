<?php

$leeftijd = $_GET['leeftijd'];
$opleiding = $_GET['opleiding'];
$lengteInCm = $_GET['lengteInCm'];
$seizoen = $_GET['seizoen'];

if(isset($_GET['leeftijd']) && isset($_GET['opleiding']))
    {
        echo "$leeftijd<br><br>$opleiding";

    }
else if(isset($_GET['lengteInCm']) && isset($_GET['seizoen']))
    {
        echo "$lengteInCm<br><br>$seizoen";
    }
?>