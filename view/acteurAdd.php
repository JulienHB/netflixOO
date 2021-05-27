<?php require_once('controller/filmList.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'un acteur</title>
</head>
<body>
    <?php include('view/inc/nav.php'); ?> 
    
    <hr>
<form action="index.php?action=addActeur" method="post">
    <p>
        <label for="firstname">Prénom</label>
        <input type="text" name="firstname" />
    </p>
    <p>
        <label for="lastname">Nom</label>
        <input type="text" name="lastname" />
    </p>
    <p>
        <label for="dateOfBirth">Année de naissance</label>
        <input type="text" name="dateOfBirth" />
    </p>
    <p>
        <input type="submit" name="creationActeur" value="Créer un acteur" />
    </p>
</form>
<br>
<hr>


    
</body>
</html>




<?php
if (!empty($_POST['firstname']) & !empty($_POST['lastname']) & !empty($_POST['dateOfBirth'])) {
    $acteur = new Acteur();
    $acteur->createActeur($_POST['firstname'], $_POST['lastname'], $_POST['dateOfBirth']);
    var_dump($acteur);
}?>