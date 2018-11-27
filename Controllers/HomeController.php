<?php

include('Models/Film.php');

//Récupérer les données
$movies = getAllMovies();


//traiter les données
foreach ($movies as $key => $movie) {
    $movie['realisateur'] = ucfirst($movie['realisateur']); //Met la 1ere lettre du réalisateur en majuscule
    
}


//Afficher les donnees
include('Views/HomeView.php');