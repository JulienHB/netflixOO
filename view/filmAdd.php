<br>
<hr>
<form action="index.php" method="post">
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
<?php
if (!empty($_POST['title'])) {
    $film = new Film();
    $film->createMovie($_POST['title'], $_POST['startYear'], $_POST['runtimeMinutes']);
    var_dump($film);
}