<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5</title>
    </head>
    <body>
      <!-- Création du formulaire
          Action = L'attribut défini la page appelée par le formulaire
          Method = Méthode d'envoi du formulaire GET ou POST(le plus répandu)
      -->
      <form method="post" action="index.php" >
        <!--champ de sélection du genre -->
        <select name="gender">
          <option value="Monsieur">Mr</option>
          <option value="Madame">Mme</option>
        </select>
        <!-- Ajout des inputs avec leurs labels -->
        <label for="firstName">Nom :</label><input type="text" name="firstName">
        <label for="lastName">Prénom :</label><input type="text" name="lastName">
        <!-- Bouton Submit de validation du formulaire pour l'envoi des donnée-->
        <input type="submit" value="valider">
      </form>
      <!-- Bouton de retour à la page -->
      <a href="../index.php"><button type="button">Retour</button></a>
      <!-- Ouverture des balises PHP dans une balise p -->
      <p>
        <?php
        // Vérification des données du formulaire transmises par POSTs
        if (isset($_POST['gender']) && isset($_POST['firstName']) && isset($_POST['lastName'])) {
          // htmlspecialchars sert à échapper le code HTML et éviter les failles XSS (pour cross-site scripting)
          echo htmlspecialchars($_POST['gender']) . ', ' . htmlspecialchars($_POST['firstName']) . ' ' . htmlspecialchars($_POST['lastName']);
        }
        ?>
      </p>
    </body>
</html>
