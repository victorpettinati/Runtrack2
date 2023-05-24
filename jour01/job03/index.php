<?php
// Déclaration des variables
$booleanVar = true;
$integerVar = 42;
$stringVar = "Hello";
$floatVar = 3.14;

// Tableau des variables
$variables = array(
  array("boolean", "booleanVar", $booleanVar),
  array("integer", "entier", $integerVar),
  array("string", "Chaine de Carac.", $stringVar),
  array("float", "Nbr à virgule flot.", $floatVar)
);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Tableau des variables</title>
</head>
<body>
  <h1>Tableau des variables</h1>
  <table>
    <thead>
      <tr>
        <th>Type</th>
        <th>Nom</th>
        <th>Valeur</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($variables as $variable) { ?>
        <tr>
          <td><?php echo $variable[0]; ?></td>
          <td><?php echo $variable[1]; ?></td>
          <td><?php echo $variable[2]; ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>



