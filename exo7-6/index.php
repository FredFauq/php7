<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 6</title>
    </head>
    <body>
      <!-- Ouverture des balises PHP dans une balise p -->
      <p>
        <?php
        // Vérification condition que le formulaire n'est pas vide
        if (!empty($_POST['firstName']) || !empty($_POST['lastName'])) {
          // Si rempli affichage des données récoltées
          echo strip_tags($_POST['gender']) . ' ' . strip_tags($_POST['firstName']) . ' ' . strip_tags($_POST['lastName']);
        } else {
          // Sinon affichage formulaire
          echo 'Veuillez remplir le formulaire';
        ?>
        <!-- Création du formulaire
            Action = L'attribut défini la page appelée par le formulaire
            Method = Méthode d'envoi du formulaire GET ou POST(le plus répandu)
        -->
        <form method="post" action="index.php" >
          <!--champ de sélection du genre -->
          <p><select name="gender">
            <option value="Monsieur">Mr</option>
            <option value="Madame">Mme</option>
          </select>
          </p>
          <!-- Ajout des inputs avec leurs labels -->
          <p><label for="firstName">Nom :</label><input type="text" name="firstName"></p>
          <p><label for="lastName">Prénom :</label><input type="text" name="lastName"></p>
          <!-- Bouton Submit de validation du formulaire pour l'envoi des donnée-->
          <input type="submit" value="valider">
        </form>
      <?php
      }
      ?>
       </p>
       <!-- Bouton de retour à la page -->
       <a href="../index.php"><button type="button">Retour</button></a>
    </body>
</html>
