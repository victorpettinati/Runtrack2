<?php 

if(isset($_COOKIE["nbvisites"])) {
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} else {
    $nbvisites = 1;
}

setcookie("nbvisites", $nbvisites, time() + 3600);

echo "Nombre de visites :" . $nbvisites;

if(isset($_POST["reset"])) {
    setcookie("nbvisites", 0, time() + 3600);
    $nbvisites = 0;
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

<!-- Tout d'abord, le code vérifie si le cookie "nbvisites" existe en utilisant la condition isset($_COOKIE['nbvisites']). La fonction isset() vérifie si une variable ou une clé existe.
Si le cookie existe, la valeur actuelle du cookie est récupérée et incrémentée de 1. On stocke cette nouvelle valeur dans la variable $nbvisites.
Si le cookie n'existe pas, cela signifie que c'est la première visite sur la page. Dans ce cas, on initialise la variable $nbvisites à 1.
Ensuite, le code utilise la fonction setcookie() pour définir le cookie "nbvisites" avec la nouvelle valeur. Les paramètres de la fonction setcookie() sont les suivants :
Le nom du cookie, dans notre cas "nbvisites".
La valeur du cookie, qui est stockée dans la variable $nbvisites.
L'expiration du cookie, spécifiée en utilisant la fonction time() + 3600. Ici, nous avons défini l'expiration à une heure dans le futur.
Après avoir défini ou mis à jour le cookie, le code affiche le contenu du cookie en utilisant echo pour afficher le texte "Nombre de visites : " concaténé avec la valeur de $nbvisites.
Ensuite, le code vérifie si le bouton "reset" a été soumis en utilisant isset($_POST['reset']). Si le bouton a été soumis, cela signifie que l'utilisateur souhaite réinitialiser le compteur.
Lorsque le bouton "reset" est soumis, le code utilise à nouveau la fonction setcookie() pour réinitialiser le cookie "nbvisites" à 0. La nouvelle valeur et l'expiration sont spécifiées comme précédemment.
Enfin, le code affiche un formulaire HTML avec un bouton "reset" en utilisant la balise <form>. Lorsque le bouton est soumis, le formulaire envoie une requête POST et déclenche le traitement du code PHP correspondant. -->