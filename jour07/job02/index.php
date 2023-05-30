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