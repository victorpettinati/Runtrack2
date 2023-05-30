<?php
// Vérifie si le formulaire a été soumis
if(isset($_POST['connexion'])) {
    // Récupère le prénom saisi dans le champ de texte
    $prenom = $_POST['prenom'];

    // Définit le cookie "prenom" avec la valeur du prénom
    setcookie('prenom', $prenom, time() + 3600); // expire dans 1 heure
}

// Vérifie si l'utilisateur est déjà connecté
if(isset($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom'];
    echo "Bonjour $prenom !<br>";
    echo '<form method="POST"><input type="submit" name="deco" value="Déconnexion"></form>';
} else {
    // Affiche le formulaire de connexion
    echo '<form method="POST">
            <input type="text" name="prenom" placeholder="Entrez votre prénom">
            <input type="submit" name="connexion" value="Connexion">
          </form>';
}

// Vérifie si le bouton "Déconnexion" a été soumis
if(isset($_POST['deco'])) {
    // Supprime le cookie "prenom"
    setcookie('prenom', '', time() - 3600); // expire dans le passé
    // Redirige vers la page actuelle pour actualiser l'affichage
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
?>
