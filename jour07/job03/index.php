<!DOCTYPE html>
<html>
<head>
    <title>Ajouter des prénoms</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="prenom" placeholder="Entrez un prénom">
        <input type="submit" name="submit" value="Ajouter">
    </form>
    <br>
    <form method="POST">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>

<?php
session_start();

// Vérifie si le formulaire a été soumis
if(isset($_POST['submit'])) {
    // Récupère le prénom saisi dans le champ de texte
    $prenom = $_POST['prenom'];

    // Vérifie si la variable de session existe
    if(isset($_SESSION['prenoms'])) {
        // Ajoute le prénom à la liste existante
        $_SESSION['prenoms'][] = $prenom;
    } else {
        // Initialise la liste avec le prénom saisi
        $_SESSION['prenoms'] = array($prenom);
    }
}

// Vérifie si le bouton "reset" a été soumis
if(isset($_POST['reset'])) {
    // Réinitialise la liste des prénoms
    $_SESSION['prenoms'] = array();
}

// Affiche l'ensemble des prénoms
if(isset($_SESSION['prenoms'])) {
    echo "Liste des prénoms : <br>";
    foreach($_SESSION['prenoms'] as $prenom) {
        echo $prenom . "<br>";
    }
}

?>





