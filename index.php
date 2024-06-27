<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="core/style/style.css">
  <title>Fortnite by Lylian</title>
  <link rel="icon" type="image/jpg" href="assets/F.jpg">

</head>
<body>

  <header>
      <?php
      require "core/logic/header.php";
        $header = new GenerateContent();
        $header -> renderHeader();
      ?>
  </header>


  <div class="titre">
    <h1>Fortnite</h1>
  </div>
  <div class="bouton">
    <a href="carte.php" class="btn">Carte</a>
    <a href="arme.php" class="btn">Arme</a>
  </div>




  <footer class='home-footer'>
    <?php
    $footer = new GenerateContent();
    $footer -> renderFooter();
    ?>
  </footer>
</body>
</html>