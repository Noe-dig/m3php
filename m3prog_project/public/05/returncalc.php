<?php

    $derdeMacht = pow(3,4);
    print("<br>");
    print(pow(3,4));

    function mijnFunction(){
        return 1;
    }
    $mijnFunctionResultaat = mijnFunction();
    echo "<br>$mijnFunctionResultaat";

    function returnVariable(){
        $result = rand();
        return $result;
    }
    echo "<br>".returnVariable();
    echo "<br>".returnVariable();
    echo "<br>".returnVariable();

    function add($getal1, $getal2){
        $som = $getal1 + $getal2;
        return $som;
    }
    echo "<br>".add(100, 100);
    echo "<br>".add(4, 9);
    echo "<br>".add(33, 33);

    function subtract($getal1, $getal2){
        $som = $getal1 - $getal2;
        return $som;
    }
    echo "<br>".subtract(200, 100);
    echo "<br>".subtract(10, 9);
    echo "<br>".subtract(50, 33);

    function divide($getal1, $getal2){
        if($getal1 === 0){
            $som = "STOUT";
            return $som;
        }
        else if($getal2 === 0){
            $som = "STOUT";
            return $som;
        }
        else{
            $som = $getal1 / $getal2;
            return $som;
        }
    }
    echo "<br>".divide(0,5);
    echo "<br>".divide(3,0);
    echo "<br>".divide(5,2);

    function multiply($getal1, $getal2){
        $som = $getal1 * $getal2;
        return $som;
    }
    echo "<br>".multiply(10,10);
    echo "<br>".multiply(5,1000);
    echo "<br>".multiply(3,40);
?>