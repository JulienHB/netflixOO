<br>
<hr>
<form action="index.php" method="post">
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
<?php

if (!empty($_POST['firstname']) & !empty($_POST['lastname']) & !empty($_POST['dateOfBirth'])) {
    $acteur = new Acteur();
    $acteur->createActeur($_POST['firstname'], $_POST['lastname'], $_POST['dateOfBirth']);
    var_dump($acteur);
}