<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$count = 0;
for ($i = 0; isset($str[$i]); $i++) {
    $count++;
}

$length = $count;
$rearrangedStr = '';

// Parcourir la chaîne
for ($i = 0; $i < $length; $i++) {
    //obtenir l'indice du caractere suivant en prenant en compte le dernier caractere qui devient le premier.
    $nextIndex = ($i + 1) % $length;
    // Ajouter le caractere suibant a la nouvelle chaine. 
    $rearrangedStr .= $str[$nextIndex];
}

echo $rearrangedStr;
?>

