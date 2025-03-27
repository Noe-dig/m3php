<?php

header("Content-type: application/json");

$details = ["director"=>"Shane Acker","year"=>2009,"genre"=>"Dystopian Sci-fi"];
$movies = ["title"=>9,"details"=>$details];
$cinema = ["cinema"=>$movies];

$jsonMovies = json_encode($cinema);

echo $jsonMovies;
?>