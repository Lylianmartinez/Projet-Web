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

  <div class="carre-container">
        <div class="carre">
          <img class="img-vo" src="assets/camionnn.jpg" alt=" fusil à pompe spécialisé Frappeur">
          <div class="info">
              <p>Bus de guerre</p>
              <p>Vitesse Max: 80km/h</p>
              <p>Arme: 2 canon</p>
              <p>Dégats: 50</p>
              <p>Rechargement: 4,72</p>
          </div>
        </div>

        <div class="carre">
          <img class="img-vo" src="assets/v1.png" alt=" fusil à pompe spécialisé Frappeur">
          <div class="info">
              <p class="infos">Voiture sportive</p>
              <p class="infos">Vitesse: 80km/h</p>
              <p class="infos">Arme: tourelle</p>
              <p class="infos">Dégats: 30</p>
              <p class="infos">Rechargement: 4,99</p>
          </div>
        </div>

        <div class="carre">
          <img class="img-vo" src="assets/V2.png" alt=" fusil à pompe spécialisé Frappeur">
          <div class="info">
              <p class="infos">Voiture sportive</p>
              <p class="infos">Vitesse: 80km/h</p>
              <p class="infos">Arme: tourelle</p>
              <p class="infos">Dégats: 30</p>
              <p class="infos">Rechargement: 5,25</p>
            </div>
        </div>

        <div class="carre">
          <img class="img-vo" src="assets/V3.png" alt=" fusil à pompe spécialisé Frappeur">
          <div class="info">
              <p class="infos">Voiture sportive</p>
              <p class="infos">Vitesse: 80km/h</p>
              <p class="infos">Arme: canon</p>
              <p class="infos">Dégats: 50</p>
              <p class="infos">Rechargement: 5,51</p>
            </div>
        </div>
  </div>

  <footer class='home-footer'>
    <?php
    $footer = new GenerateContent();
    $footer -> renderFooter();
    ?>
  </footer>
</body>
</html>