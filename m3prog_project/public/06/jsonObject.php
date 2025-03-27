<?php

header("Content-type: application/json");

$steden = ["amsterdam","rotterdam","utrecht"];

$jsonString = json_encode($steden);

echo $jsonString;

?>