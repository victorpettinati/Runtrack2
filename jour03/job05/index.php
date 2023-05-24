<?php
// La chaîne de caractères
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait.";

// Dictionnaire des voyelles et consonnes
$dic = array(
    'consonnes' => 0,
    'voyelles' => 0
);

// Parcourir la chaîne et compter les voyelles et consonnes
for ($i = 0; isset($str[$i]); $i++) {
    $caractere = $str[$i]; // Récupérer le caractère

    // Vérifier si le caractère est une lettre
    if (($caractere >= 'a' && $caractere <= 'z') || ($caractere >= 'A' && $caractere <= 'Z')) {
        // Convertir en minuscule pour comparer
        if ($caractere == 'A' || $caractere == 'E' || $caractere == 'I' || $caractere == 'O' || $caractere == 'U' || $caractere == 'Y'||
            $caractere == 'a' || $caractere == 'e' || $caractere == 'i' || $caractere == 'o' || $caractere == 'u' || $caractere == 'y') {
            $dic['voyelles']++;
        } else {
            $dic['consonnes']++;
        }
    }
}

// Afficher les résultats dans un tableau HTML
echo '<table>';
echo '<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>';
echo '<tbody><tr><td>' . $dic['voyelles'] . '</td><td>' . $dic['consonnes'] . '</td></tr></tbody>';
echo '</table>';
?>
