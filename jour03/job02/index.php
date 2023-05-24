<?php
// La chaîne de caractères
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Parcourir la chaîne en affichant un caractère sur deux
$i = 0;
while (isset($str[$i])) {
    echo $str[$i];
    $i += 2;
}
?>
