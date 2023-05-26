<!DOCTYPE html>
<html>
<head>
  <title>Formulaire avec changement de style</title>
  <?php
  $selectedStyle = 'style1.css'; // Style par défaut

  if (isset($_POST['style'])) {
    $selectedStyle = $_POST['style'] . '.css';
  }
  ?>
  <link id="style-link" rel="stylesheet" type="text/css" href="<?php echo $selectedStyle; ?>">

</head>
<body>
  <div class="container">
    <h2>Formulaire avec changement de style</h2>
    <form id="style-form" action="" method="post">
      <div class="form-group">
        <label for="style">Style:</label>
        <select id="style" name="style">
          <option value="style1">Style 1</option>
          <option value="style2">Style 2</option>
          <option value="style3">Style 3</option>
        </select>
      </div>
      <div class="form-group">
        <input type="submit" value="Valider">
      </div>
    </form>
  </div>

  <?php
  if (isset($_POST['style'])) {
    echo '<script>document.getElementById("style-link").href = "' . $selectedStyle . '";</script>';
  }
  ?>
</body>
</html>
