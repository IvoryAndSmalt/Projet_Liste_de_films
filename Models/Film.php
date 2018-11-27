<?php
$bdd = new PDO('mysql:host=localhost;dbname=test', $user, $pass);

function getAllMovies(){
    global $bdd;

    $movies = $bdd->query('SELECT * FROM movies');

    return $movies->fetchAll();
}


function getOneMovie($id){
    global $bdd;

    $movies = $bdd->query('SELECT * FROM movies WHERE id='.$id.';');

    return $movies->fetch();
}

function getMovieByGenre($genreid){
    global $bdd;

    $movies = $bdd->query('SELECT * FROM movies WHERE genre='.$genreid.';');

    return $movies->fetchAll();
}

