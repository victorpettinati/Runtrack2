<?php
// La chaîne de caractères
$str = "Dans l'espace, personne ne vous entend crier.";

// Compteur de caractères
$count = 0;

// Parcourir la chaîne et compter les caractères
for ($i = 0; isset($str[$i]); $i++) {
    $count++;
}

// Afficher le nombre de caractères
echo "Le nombre de caractères dans la chaîne est : " . $count;
?>
