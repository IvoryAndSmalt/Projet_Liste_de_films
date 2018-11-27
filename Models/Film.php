<?php
<<<<<<< HEAD
$bdd = new PDO('mysql:host=localhost;dbname=test', $user, $pass);

function getAllMovies(){
    global $bdd;

    $movies = $bdd->query('SELECT * FROM movies');

    return $movies->fetchAll();
}


function getOneMovie($id){
    global $bdd;

    $movies = $bdd->query('SELECT * FROM movies WHERE id='.$id.';');
=======

//Le modèle contient toutes les fonctions d'appel à la base de données.

include('info.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);

function getAllMovies() {
    global $dbh;

    $movies = $dbh->query('SELECT * FROM movies');

    return $movies->fetchAll();

}

function getOneMovie($id) {
    global $dbh;

    $movies = $dbh->query('SELECT * FROM movies WHERE id='.$id.';');
>>>>>>> origin/master

    return $movies->fetch();
}

<<<<<<< HEAD
function getMovieByGenre($genreid){
    global $bdd;

    $movies = $bdd->query('SELECT * FROM movies WHERE genre='.$genreid.';');

    return $movies->fetchAll();
}

=======
function getMoviesByGenre($gender_id) {
    global $dbh;

    $movies = $dbh->query('SELECT * FROM movies WHERE gender_id='.$gender_id.';');

    return $movies->fetchAll();
}
>>>>>>> origin/master
