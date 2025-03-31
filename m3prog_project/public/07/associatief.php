<?php

$verbruik = ['wasmachine' => 194, 'koffiezetapparaat' => 62, 'stofzuiger' => 90, 'wasdroger' => 234, 'waterkoker' => 109.5];

foreach($verbruik as $key => $value){
    echo "<li><b>$key</b> verbruikt ~$value KwH per jaar</li>";
}

$totaal = 0;

foreach($verbruik as $key => $value){
    $totaal = $totaal + $value;
}

echo "<br><b>totaal verbruik:</b><br><br>".$totaal." KwH";

?>