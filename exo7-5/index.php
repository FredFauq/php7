<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PHP partie 7 exercice 5</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
      <!-- Création du formulaire
          Action = L'attribut défini la page appelée par le formulaire
          Method = Méthode d'envoi du formulaire GET (transmission dans l'URL) ou POST (le plus répandu)
      -->
      <form method="post" action="index.php" >
        <!--Champ de sélection du genre -->
        <p>
        <label for="civility" name="civility">Civilité :</label>
        <select name="civility">
          <option selected disabled>Veuillez sélectionner une option</option>
          <option value="M">M</option>
          <option value="Mme">Mme</option>
        </select>
        </p<
        <!-- Ajout des inputs avec leurs labels -->
        <p><label for="lastName">Nom :</label><input type="text" name="lastName" id="lastName" placeholder="Dupont"></p>
        <p><label for="firstName">Prénom :</label><input type="text" name="firstName" id="firstName" placeholder="Jean"></p>
        <!-- Bouton Submit de validation du formulaire pour l'envoi des données -->
        <input type="submit" value="valider">
      </form>
      <!-- Ouverture des balises PHP dans une balise <p> -->
      <p>
        <?php
        // Vérification que les données du formulaire existent et ne sont pas vides, transmises par POST.
        if (!empty($_POST['civility']) && !empty($_POST['firstName']) && !empty($_POST['lastName'])) {
          // htmlspecialchars sert à échapper le code HTML et éviter les failles XSS (pour cross-site scripting).
          echo htmlspecialchars($_POST['civility']) . '. ' . htmlspecialchars($_POST['firstName']) . ' ' . htmlspecialchars($_POST['lastName']);
        } else {
            echo 'Veuillez remplir le formulaire, svp.';
        }
        ?>
      </p>
    </body>
</html>
