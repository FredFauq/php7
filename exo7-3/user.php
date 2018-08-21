<!DOCTYPE html>
<html lang="fr" >
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body>
    <!-- Ouverture des balises PHP dans une balise p -->
        <p>
          <?php
            // Vérification des données du formulaire transmises par GETs
            if (!empty($_GET['firstName']) && !empty($_GET['lastName'])) {
              // htmlspecialchars sert à échapper le code HTML et éviter les failles XSS (pour cross-site scripting)
              echo 'Bonjour ' . htmlspecialchars($_GET['firstName']) . ' ' . htmlspecialchars($_GET['lastName']);
            } else {
                echo 'Formulaire invalide';
            }
            ?>
        </p>
  </body>
</html>
