<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix V2 :D C'est mieux !</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
    
</head>
<body id="body">
    <div class="container">
        <div class="row row-cols-2">
            <h1 class="bg-danger text-center text-white col-12">Catalogue de Films</h1>
            <h2 class="col-12"><?php echo $titre;?></h2>
            <img class="col-12 mb-3 img-fluid imgSize" src="<?php echo $afficheLink;?>" alt="Fuck Google">
            <p class="col-6">Genre : <?php echo $genre; ?></p>
            <p class="col-6">Durée de l'oeuvre : <?php echo $duree; ?></p>
            <p class="col-6">Année de Réalisation : <?php echo $annee; ?></p>
            <p class="col-6">Réalisateur : <?php echo $realisateur; ?></p>  
            <p class="col-12">Synopsis : <?php echo $pitch; ?></p>
            <p class="col-6">Acteurs principaux : <?php echo $acteurs; ?></p>
            <p class="col-6">Evaluation : <?php echo $evaluation; ?> sur 5</p>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script><!--utiliser jquery-->
    <script src="js/script.js"></script>
</body>
</html>