<?php

$temperatuurVerwachting = [
    'maandag' => 13, 
    'dinsdag' => 11, 
    'woensdag' => 12, 
    'donderdag' => 17, 
    'vrijdag' => 14, 
    'zaterdag' => 15, 
    'zondag' => 15
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <article class="art1">
        <table>
            <tr>
                <th>key</th>
                <th>value</th>
            </tr>
                <?php

                    foreach($temperatuurVerwachting as $key => $value)
                    {
                        print_r("<tr><td>$key</td><td>$value C</td></tr>");
                    }

                ?>
        </table>
    </article>
    <article class="art2">
        <?php 
            $vandaag = "maandag"; $temperatuurVa = 15;
            $morgen = "dinsdag"; $temperatuurMo = 13;
            $overmorgen = "woensdag"; $temperatuurWo = 14;
        ?>
        <!-- <p>Vandaag, <?= $vandaag;?> is het <?= $temperatuurVa;?> graden</p><br>
        <p>Morgen, <?=$morgen;?> is het <?=$temperatuurMo;?> graden</p><br>
        <p>Overmorgen, <?=$overmorgen;?> is het <?=$temperatuurWo;?> graden</p><br> -->
        <ul>
            <?php foreach($temperatuurVerwachting as $key => $value)
                        {
                            print_r("<li>$key is het $value graden <br></li>");
                        }?>
        </ul>

    </article>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        html{
            font-size: 62.5%
        }
        body{
            background: lightgrey;
            display: grid;
            height: 100vh;
            grid-template-columns: auto auto;
            grid-template-rows: repeat(3, 1fr);
            font-family: sans-serif;
        }
        .art1{
            padding: 2rem;
            background: white;
            grid-row: 2/3;
            grid-column: 2/3;
            border-radius: 1.2rem;
            box-shadow: 0 0 1rem 1rem rgba(0,0,0,0.2);
            width: 40rem;
        }  
        th{
            font-size: 2rem;
        }   
        td{
            padding: 2rem;
            background: rgba(230,230,230,0.4);
            grid-row: 2/3;
            grid-column: 2/3;
            border-radius: 1.2rem;
            width: 50vw;
            text-align: center; 
            font-size: 2rem;
        }
        .art2{
            padding: 2rem;
            background: white;
            grid-row: 2/3;
            grid-column: 3/4;
            border-radius: 1.2rem;
            box-shadow: 0 0 1rem 1rem rgba(0,0,0,0.2);
            width: 40rem;
            display: flex;
        }
        li{
            /* justify-content: center; */
            list-style-type: none;
            width: 36rem;
            height: 5.5%;
            text-align: center;           
            font-size: 2rem;
            margin-bottom: 0.2rem;
            padding: 2rem;
            border-radius: 1.2rem;
            background: rgba(230,230,230,0.4);
        }
    </style>
</body>
</html>