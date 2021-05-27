<?php require_once('controller/filmList.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'un film</title>
</head>
<body>
    <?php include('view/inc/nav.php'); ?> 
    <hr>
<form action="index.php?action=addFilm" method="post">
    <p>
        <label for="title">Titre du Film</label>
        <input type="text" name="title" />
    </p>
    <p>
        <label for="startYear">Année de Sortie</label>
        <input type="text" name="startYear" />
    </p>
    <p>
        <label for="runtimeMinutes">Temps en minutes</label>
        <input type="text" name="runtimeMinutes" />
    </p>
    <p>
        <input type="submit" name="creationFilm" value="Créer la ref !" />
    </p>
</form>

<hr>
       
</body>
</html>



<?php
if (!empty($_POST['title'])) {
    $film = new Film();
    $film->createMovie($_POST['title'], $_POST['startYear'], $_POST['runtimeMinutes']);
    var_dump($film);
}