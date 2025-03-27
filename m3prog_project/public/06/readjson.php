<?php

// header("Content-type: application/json");

$steden = ["amsterdam","rotterdam","utrecht"];

$jsonString = json_encode($steden);

// echo $jsonString;

$stedenRead = json_decode($jsonString);

print_r($stedenRead);


$json = '{
    "studenten": [
      {
        "name": "mario",
        "gemiddeldCijfer": 7.5
      },
      {
        "name": "wario",
        "gemiddeldCijfer": 4.5
      }
    ]
  }';

$dataObject = json_decode($json);

print_r($dataObject);

echo "<br>".$dataObject->studenten[0]->name;
echo "<br>".$dataObject->studenten[1]->gemiddeldCijfer;

?>