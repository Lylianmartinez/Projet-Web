<?php
  if (!isset($WebsiteLanguage))
  {
    $WebsiteLanguage = "English";
  }

  if ($WebsiteLanguage == "English")
  {

      $HomeButton = "Home";

  } else if ($WebsiteLanguage == "French") {
      $HomeButton = "Accueil";
  }
?>



<?php

trait Render {
  public function renderHeader() {
    ?>
    <div class="principale"> 
    <div class="logo">
      <a href="https://www.epicgames.com/site/fr/home">Epic Games</a>
    </div>
    <ul>
        <li class="active">
          <a href="index.php">Accueil</a>
        </li>
        <li>
          <a href="actus.php">Actus</a>
        </li>
        <li>
          <a href="vehicule.php">Véhicule</a>
        </li>
        <li>
          <a href="#">A propos de nous</a>
        </li>
        <li>
          <a href="Contact.php">Contact</a>
        </li>
      </ul>
    <?php
  }

  public function renderFooter() {
    ?>
    
    <div class="social-icons">
                <a class="icon" href="https://www.linkedin.com/in/lylian-martinez-854a1b296/" target="_blank">
                    <img src="Assets/Icons/linkedin-icon.png" alt="">
                </a>
                <a class="icon" href="https://github.com/Lylianmartinez" target="_blank">
                    <img src="Assets/Icons/github-icon.png" alt="">
                </a>
            </div>
            <div>
                <p class="copyright white-coco">
                    © Lylian MARTINEZ, 2024 | Tous droits réservés
                </p>
            </div>
    <?php
  }
}


class GenerateContent
{
  use Render;
}

