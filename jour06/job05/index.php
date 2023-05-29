<?php
function occurences($str, $char) {
    $count = 0;
    $length = 0;

    while (isset($str[$length])) {
        $length++;
    }

    for ($i = 0; $i < $length; $i++) {
        if ($str[$i] === $char) {
            $count++;
        }
    }

    return $count;
}

$string = "Bonjour";
$character = "o";
$occurences = occurences($string, $character);

echo "le nombre d'occurences de \"$character\" dans \"$string\" est : $occurences";
?>
<!-- 
1- La fonction "occurrences" est définie avec deux paramètres : $str (la chaîne de caractères dans laquelle nous recherchons des occurrences) et $char (le caractère que nous voulons compter).

2- La variable $count est initialisée à 0. Cette variable sera utilisée pour stocker le nombre d'occurrences du caractère $char dans la chaîne $str.

3- La variable $length est initialisée à 0. Cette variable sera utilisée pour stocker la longueur de la chaîne $str.

4- Nous utilisons une boucle "while" pour déterminer la longueur de la chaîne $str sans utiliser la fonction strlen(). La boucle itère tant que l'index actuel de la chaîne est défini. Cela signifie que la boucle s'exécute tant que nous n'avons pas atteint la fin de la chaîne. À chaque itération, nous incrémentons la variable $length pour obtenir la longueur totale de la chaîne $str.

5- Une fois que la boucle "while" a terminé, nous connaissons la longueur de la chaîne $str et nous pouvons passer à l'étape suivante.

6- Nous utilisons une boucle "for" pour parcourir chaque caractère de la chaîne $str. La boucle commence à l'index 0 et se poursuit jusqu'à ce que l'index atteigne la longueur de la chaîne $str (c'est pourquoi nous utilisons $i < $length dans la condition).

7- À chaque itération de la boucle "for", nous vérifions si le caractère à l'index actuel ($str[$i]) est égal au caractère $char que nous recherchons. Si c'est le cas, cela signifie que nous avons trouvé une occurrence du caractère $char, nous incrémentons donc le compteur $count.

8- Une fois que nous avons parcouru tous les caractères de la chaîne $str, la boucle "for" se termine.

9- Enfin, nous retournons la valeur du compteur $count, qui représente le nombre total d'occurrences du caractère $char dans la chaîne $str. -->