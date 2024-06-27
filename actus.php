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
 <div class="titre_actus">
    <h2>Saison 3 Chapitre 5
    </h2>
</div>
  <div class="video-container"> 
        <video controls>
            <source src="assets/Fortnite Battle Royale Chapitre 5 - Saison 3 _ Débridé _ Bande-annonce de lancement.mp4" type="video/mp4">
        </video>
  </div> 

    <footer class='home-footer'>
    <?php
      $footer = new GenerateContent();
      $footer->renderFooter();
      ?>
  </footer>
</body>
</html>