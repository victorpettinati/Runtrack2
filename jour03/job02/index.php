<?php 
$texte = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

for ($i = 0; $i < strlen($texte); $i += 2) {
    echo $texte[$i];
}
?>