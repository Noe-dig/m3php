<?php

$itemName = "Butcher's Carver";
$rarity = "Legendary";
$weaponType = "two-handed axe";
$levelReq = 29;
$DPS = 3462.8;
$attackSpeed = 1.1;
$magicalProperty1 = true;
$randomElementalDamage = "[1177-1437]-[1410-1788]";
$magicalProperty2 = true;
$primaryStatBoost = "+946-1125";
$freshMeat = "";
$doesTheButcherStillInhabitHisCarver = true;

if ($doesTheButcherStillInhabitHisCarver === true){
    $freshMeat = "Fresh Meat";
}
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
    
    echo "<h1>$itemName</h1><br>
        <img src='/images/butchers_carver.webp'><br><br>
        $rarity<br><br>
        type: $weaponType<br><br>
        level requirement: $levelReq<br><br>
        damage per second: $DPS<br>
        attackspeed: $attackSpeed<br><br>
        magical property 1: <br> $randomElementalDamage random elemental damage<br><br>
        magical property 2: <br> $primaryStatBoost random primary stat boost<br><br>

        $freshMeat
        "
        ?>  
</body>
</html>