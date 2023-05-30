<?php
session_start();

if(isset($_SESSION["nbvisites"])) {
    // incrémentente la variable de session
    $_SESSION["nbvisites"]++;
} else {
    // Initialise la variable de session à 1
    $_SESSION["nbvisites"] = 1;
}

// Affiche le contenu de la variable de session
echo "Nombre de visites :" . $_SESSION["nbvisites"];

// vérifie si le bouton reset a été soumis
if (isset($_POST["reset"])) {
    // réinitialise la variable de session à 0
    $_SESSION["nbvisites"] = 0;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title> Compteur de visites </title>
</head>
<body>
    <form method="POST">
        <input type="submit" name="reset" value="Reset">
</form>
</body>
</html>
