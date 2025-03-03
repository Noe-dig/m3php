<?php

    $beginLocatie = "Amsterdam";
    $eindBestemming = "Bordeaux, Frankrijk";
    $afstand = 1085.73;
    $literPerKilometer = (1/15);
    $tankInhoud = 50;
    $benzinePrijsL = 0.82;
    $treinTicketKosten = 60; 

    $benzineVerbruik = $afstand * $literPerKilometer;
    $aantalKeerTanken = ceil($benzineVerbruik/$tankInhoud);
    $benzineKosten = round($benzineVerbruik * $benzinePrijsL,2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <article>
        <div class="reiskosten">
            <?php

                echo "$afstand Km<br>";
                echo "$benzineVerbruik L<br>";
                echo "$aantalKeerTanken keer<br>";
                echo "prijs per liter: €$benzinePrijsL<br>";
                echo " kosten rit €$benzineKosten <br><br>";

            ?>
        </div>
    </article>
    <article>  
        <div class="reiskosten">
            <?php    
                if($benzineKosten > $treinTicketKosten){
                    echo "Ik ga met de trein!";
                }
                else{
                    echo "Ik ga met de auto!";
                }
            ?>
        </div>
    </article>
    <style>
        body{
            background: lightgrey;
            font-size: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-wrap: wrap;
            font-family: sans-serif;
        }

        article{
            width: 50vw;
            height: 17rem;
            border-radius: 1rem;
            box-shadow: 0 1rem 2rem 0 rgba(0,0,0,0.2);
            flex-shrink: 0;
            background: #EEE;
        }

        .reiskosten{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 1rem;
            padding: 2rem;
        }
    </style>
</body>
</html>