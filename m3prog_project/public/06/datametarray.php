<?php

header("Content-type: application/json");

$mario = ["name"=>"mario","gemiddeldeCijfer"=>7.5,"klas"=>"A"];
$wario = ["name"=>"wario","gemiddeldeCijfer"=>4.5,"klas"=>"B"];
$toad = ["name"=>"toad","gemiddeldeCijfer"=>1.5,"klas"=>"A"];
$bowser = ["name"=>"bowser","gemiddeldeCijfer"=>9.5,"klas"=>"B"];

$dataObject = ["studenten"=> [$mario,$wario,$toad,$bowser]];

$jsondataObject = json_encode($dataObject);
echo $jsondataObject;

?>