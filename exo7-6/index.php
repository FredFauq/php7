<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 6</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
      <!-- Ouverture des balises PHP dans une balise p -->
      <p>
        <?php
        // Vérification condition que le formulaire n'est pas vide.
        if (!empty($_POST['firstName']) || !empty($_POST['lastName'])) {
          // Si rempli affichage des données récoltées.
          echo strip_tags($_POST['civility']) . '. ' . strip_tags($_POST['firstName']) . ' ' . strip_tags($_POST['lastName']);
        } else {
          // Sinon affichage message.
          echo 'Veuillez remplir le formulaire, svp !';
        ?>
        <!-- Création du formulaire
            Action = L'attribut défini la page appelée par le formulaire
            Method = Méthode d'envoi du formulaire GET (transmission dans l'URL) ou POST (le plus répandu)
        -->
        <form method="post" action="index.php" >
          <!--champ de sélection de la civilité -->
          <p><label for="civility">Civilité :</label><select name="civility">
            <option selected disabled>Veuillez sélectionner une option</option>      
            <option value="M">M</option>
            <option value="M">Mme</option>
          </select>
          </p>
          <!-- Ajout des inputs avec leurs labels -->
          <p><label for="lastName">Nom :</label><input type="text" name="lastName" id="lastName" placeholder="Dupont"></p>
          <p><label for="firstName">Prénom :</label><input type="text" name="firstName" id="firstName" placeholder="Jean"></p>
          <!-- Bouton Submit de validation du formulaire pour l'envoi des données -->
          <input type="submit" value="valider">
        </form>
      <?php
      }
      ?>
       </p>
    </body>
</html>
