<!DOCTYPE html>
<html>
<head>
    <title>Transformation de texte</title>
</head>
<body>
    <form method="post" action="">
        <label for="str">Texte :</label>
        <input type="text" id="str" name="str"><br><br>

        <label for="fonction">Fonction :</label>
        <select id="fonction" name="fonction">
            <option value="gras">Gras</option>
            <option value="cesar">Cesar</option>
            <option value="plateforme">Plateforme</option>
        </select><br><br>

        <input type="submit" value="Valider">
    </form>

    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupérer les valeurs du formulaire
        $str = $_POST['str'];
        $fonction = $_POST['fonction'];

        // Appliquer la transformation en fonction de l'option choisie
        if ($fonction === 'gras') {
            echo gras($str);
        } elseif ($fonction === 'cesar') {
            echo cesar($str);
        } elseif ($fonction === 'plateforme') {
            echo plateforme($str);
        }
    }

    // Fonction pour mettre en gras les mots commençant par une majuscule
    function gras($str) {
        $words = explode(' ', $str);
        $result = '';

        foreach ($words as $key => $word) {
            $length = 0;

            while (isset($word[$length])) {
                $length++;
            }

            if (ctype_upper(substr($word, 0, 1))) {
                $words[$key] = '<strong>' . $word . '</strong>';
            }
        }

        return implode(' ', $words);
    }

    // Fonction pour décaler les caractères selon la valeur du décalage
    function cesar($str, $decalage = 2) {
        $result = '';
        $length = 0;

        while (isset($str[$length])) {
            $length++;
        }

        for ($i = 0; $i < $length; $i++) {
            $char = $str[$i];
            $ascii = ord($char);

            // Appliquer le décalage uniquement aux lettres
            if (ctype_alpha($char)) {
                $ascii += $decalage;

                // Gérer les boucles d'alphabet
                if (ctype_upper($char) && $ascii > ord('Z')) {
                    $ascii -= 26;
                } elseif (ctype_lower($char) && $ascii > ord('z')) {
                    $ascii -= 26;
                }
            }

            $result .= chr($ascii);
        }

        return $result;
    }

    // Fonction pour ajouter un "_" aux mots finissant par "me"
    function plateforme($str) {
        $words = explode(' ', $str);
        $result = '';

        foreach ($words as $key => $word) {
            $length = 0;

            while (isset($word[$length])) {
                $length++;
            }

            if (substr($word, $length - 2) === 'me') {
                $words[$key] = $word . '_';
            }
        }

        return implode(' ', $words);
    }
