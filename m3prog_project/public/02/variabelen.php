<?php

$stad = "Hoorn";
$weer = "motregen";
$aantalMensen = 15000;
$huidigeTemperatuur = 11.4;
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo "In $stad leven $aantalMensen mensen. Er is $weer. De temperatuur is nu $huidigeTemperatuur graden.";

    ?>
</body>
</html>