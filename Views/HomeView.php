<<<<<<< HEAD
<!DOCTYPE html>
<html lang="fr">
=======
<!-- Pas de HTML dans les models et controllers : première balise HTML dans la vue-->
<!DOCTYPE html>
<html lang="en">
>>>>>>> origin/master
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
    <title>Annuaire de films - Home</title>
=======
    <title>Annuaire de films - <?=$page?></title>
>>>>>>> origin/master
    <link rel="stylesheet" href="style.css">
</head>
<body>

<<<<<<< HEAD

    <h1>
        Home    
    </h1>

<?php

foreach ($movies as $key => $movie)  : ?>
    <li><?=$movie['titre']?></li>
    <?php endforeach; ?>
    
=======
    <h1><?=$page?></h1>
    <ul>
        <!-- Comme la vue est incluse depuis le controller, on a accès à la variables $movies du controller : on fait une boucle pour afficher le titre de chaque film -->
        <?php foreach ($movies as $key => $movie) : ?>
           <li><?=$movie['titre']?></li>
        <?php endforeach; ?>
    </ul>
>>>>>>> origin/master
    
</body>
</html>