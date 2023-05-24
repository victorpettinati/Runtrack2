<?php 

$texte = "I'm sorry Dave I'm afraid I can't do that.";
$texte= strtolower($texte);
$voyelle = array("a","e","i","o","u","y");
for ($i = 0; $i < strlen($texte); $i++) {
    $caractere = $texte[$i];
    if(in_array($caractere, $voyelle)) {
        echo $caractere . " ";
    }
}

?>