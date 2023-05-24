<!DOCTYPE html>
<html>
<head>
  <style>
    /* Styles pour le tableau */
    .table {
      border-collapse: collapse;
      width: 40%;
    }
    .table thead th {
      background-color: #f2f2f2;
      border: 1px solid #dddddd;
      padding: 8px;
      text-align: left;
    }
    .table tbody td {
      border: 1px solid #dddddd;
      padding: 8px;
      text-align: left;
    }
  </style>
</head>
<body>
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
  ?>

  <table class="table">
    <thead>
      <tr>
        <th>Voyelles</th>
        <th>Consonnes</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $dic['voyelles']; ?></td>
        <td><?php echo $dic['consonnes']; ?></td>
      </tr>
    </tbody>
  </table>
</body>
</html>

