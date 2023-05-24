<?php

function NombrePremier($nombre) {
    for ($i = 2; $i * $i <= $nombre; $i++) {
        if ($nombre % $i === 0) {
            return false;
        }
    }

    return true;
}

for ($nombre = 2; $nombre <= 1000; $nombre++) {
    if (NombrePremier($nombre)) {
        echo $nombre . "<br />";
    }
}

?>
