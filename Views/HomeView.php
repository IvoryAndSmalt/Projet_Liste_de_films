<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Annuaire de films - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <h1>
        Home    
    </h1>

<?php

foreach ($movies as $key => $movie)  : ?>
    <li><?=$movie['titre']?></li>
    <?php endforeach; ?>
    
    
</body>
</html>