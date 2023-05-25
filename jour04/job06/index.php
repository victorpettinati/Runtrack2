<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="GET" action="index.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="nombre"><br>
        <input type="submit" value="Envoyer">
    </form>
    <?php
    foreach($_GET as $key => $value){
        if ($value % 2 == 0) {
                echo $value . " est un nombre paire";
            } else {
                echo $value . " est un nombre impaire";
            }
        }   
    ?>
</body>
</html>