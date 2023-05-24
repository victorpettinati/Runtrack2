<?php
// La chaîne de caractères
$str = "I'm sorry Dave I'm afraid I can't do that.";

// Parcourir la chaîne et afficher les voyelles
$i = 0;
$length = 0;
while (!empty($str[$i])) {
    $length++;
    $i++;
}

for ($i = 0; $i < $length; $i++) {
    $caractere = $str[$i];
    $estVoyelle = false;

    // Vérifier si le caractère est une voyelle
    switch ($caractere) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
        case 'y':
        case 'A':
        case 'E':
        case 'I':
        case 'O':
        case 'U':
        case 'Y':
            $estVoyelle = true;
            break;
    }

    if ($estVoyelle) {
        echo $caractere;
    }
}
?>
