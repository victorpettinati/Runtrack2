<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="index.php">
        <label for="Prenom">Prenom:</label>
        <input type="text" name="Prenom" id="Prenom" placeholder="Prenom"><br>

        <label for="Nom">Nom:</label>
        <input type="text" name="Nom" id="Nom" placeholder="Nom"><br>

        <input type="submit" value="Envoyer">
    </form>
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $count = 0;
    foreach ($_POST as $key => $value) {
        $count++;
    }
    echo "Nombre d'arguments dans \$_POST : " . $count;
}
?>

</body>
</html>