<!DOCTYPE html>
<html lang="fr" >
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4</title>
  </head>
  <body>
    <!-- Ouverture des balises PHP dans une balise p -->
    <p>
      <?php
        // Vérification des données du formulaire transmises par POSTs
        if (isset($_POST['firstName']) && isset($_POST['lastName'])) {
         // htmlspecialchars sert à échapper le code HTML et éviter les failles XSS (pour cross-site scripting)
          echo 'Bonjour ' . htmlspecialchars($_POST['firstName']) . ' ' . htmlspecialchars($_POST['lastName']);
        }
      ?>
    </p>
  </body>
</html>
