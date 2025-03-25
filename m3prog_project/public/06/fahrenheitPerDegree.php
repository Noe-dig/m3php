<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    for($i = 0; $i < 46; $i++){
        $celsius = $i;
        $fahrenheit = ($celsius * (9/5)) + 32;
        echo "<a href='fahrenheit.php?celsius=$i'>$i graden Celsius naar Fahrenheit omreken</a><br>";
    }

    ?>
</body>
</html>