<?php

<<<<<<< HEAD
include('Models/Film.php');

//Récupérer les données
$movies = getAllMovies();


//traiter les données
foreach ($movies as $key => $movie) {
    $movie['realisateur'] = ucfirst($movie['realisateur']); //Met la 1ere lettre du réalisateur en majuscule
    
}


//Afficher les donnees
include('Views/HomeView.php');
=======
//le controlleur inclut le modèle
include('Models/Film.php');



//Récupérer les données (ici, tous les films car on est sur la home)
$movies = getAllMovies();

//traiter les données
foreach ($movies as $key => $movie) {
    $movie['realisateur'] = ucfirst($movie['realisateur']); //Mets une majuscule au nom du réalisateur
}

//inclure la vue
include('Views/HomeView.php');

>>>>>>> origin/master
