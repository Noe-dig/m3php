<?php

    function convertCurrency($amount, $fromCurrency ,$toCurrency){

        echo "$amount $fromCurrency $toCurrency";
    }

    function sendEmail($to, $from, $subject, $message){

        echo "Naar: $to <br>Van: $from <br>Onderwerp: $subject <br>Bericht:<br> $message<br><br>";
    }

    function generateRandomString($length){

        
        print $length . "m";
    }


    function calculateArea($length, $width){

        print "<br><br>" . ($length*$width) . "m2";
    }

    convertCurrency(150 . "<br>", "Yen<br>", "USD<br><br>");
    sendEmail("LakemanGideon@gmail.com","Sinterklaas@myspace.net", "Pepernoottekort", "Beste Gideon, <br><br>Er is een pepernoottekort, zou jij meer kunnen maken voor ons? <br><br>Dag hoor, <br>Sinterklaas en zijn pieterbaas");
    generateRandomString(100);
    calculateArea(15, 5);

?>