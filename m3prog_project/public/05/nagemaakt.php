<?php

$dezeGaatMee = "deze waarde wordt meegenomen";

function mijnPrint($printText){
    print($printText);
    print("<br>");
}

    mijnPrint("regel 1");
    mijnPrint("regel 2");
    mijnPrint("regel 3");

    ## Er komt een errorcode omdat de variabele printText niet is gedefinieerd.
    echo "Er komt een errorcode omdat de variabele printText niet is gedefinieerd.";
    echo "<br>" . $dezeGaatMee;
?>