<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="core/style/style.css">
  <title>Fortnite by Lylian</title>
  <link rel="icon" type="image/jpg" href="../../assets/F.jpg">
</head>
<body>
  <header>
    <?php
      require "core/logic/header.php";
      $header = new GenerateContent();
      $header -> renderHeader();
    ?>
  </header>
<div class="carte">
    <img src="assets/carteee.png"> 
</div>
 

    <footer class='home-footer'>
    <?php
      $footer = new GenerateContent();
      $footer->renderFooter();
      ?>
  </footer>
</body>
</html>
