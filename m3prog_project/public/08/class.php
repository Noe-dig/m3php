<?php

$artiekel = [
    "naam" => "hello world badge",
    "prijs" => 5.99,
    "voorraad" => 200 
];

$json = json_encode($artiekel);
echo "$json<br>";

$object = json_decode($json);

//ik verwacht dat $object weer een json string is

print_r($object);

?>