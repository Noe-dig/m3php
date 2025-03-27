<?php

header("Content-type: application/json");


class student
{
    public $name;
    public $gemiddeldeCijfer;
    public $klas;
}

class dataObject
{
    public $studenten;
}

$mario = new student();
$mario->name="mario";
$mario->gemiddeldeCijfer="7";
$mario->klas="A";

$bowser = new student();
$bowser->name="bowser";
$bowser->gemiddeldeCijfer="8";
$bowser->klas="B";

$peach = new student();
$peach->name="peach";
$peach->gemiddeldeCijfer="2";
$peach->klas="A";

$wario = new student();
$wario->name="wario";
$wario->gemiddeldeCijfer="5";
$wario->klas="C";

$dataObject = new dataObject();
$dataObject->studenten=[$mario,$bowser,$peach,$wario];

print_r($dataObject);

?>