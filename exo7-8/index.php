<?php
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 8</title>
    </head>
    <body>
      <!-- Ouverture des balises PHP dans une balise p -->
      <p>
        <?php
        // Vérification condition que le formulaire n'est pas vide
        if (!empty($_POST['firstName']) || !empty($_POST['lastName']) || !empty($_FILES['xFile'])) {
          // Récupérationn des infos  du fichier
          $infoFile = pathinfo($_FILES['xFile']['name']);
          // Stockage dans une variable de l'extension du fichier
          $extensionUpload = $infoFile['extension'];
          // Condition sur extension du fichier
          if ($extensionUpload !== 'pdf'){
            echo 'Veuillez choisir un fichier PDF, SVP ! ';
          } else {
            echo 'Fichier pdf sélectionné ';
          }
          // Si rempli affichage des données récoltées
          echo strip_tags($_POST['gender']) . ' ' . strip_tags($_POST['firstName']) . ' ' . strip_tags($_POST['lastName']) . ' Votre fichier est : ' . $_FILES['xFile']['name'] . ' , et son extension est : ' . $extensionUpload;
        } else {
          // Sinon affichage formulaire
          echo 'Veuillez remplir le formulaire ';
      ?>
      </p>
        <!-- Création du formulaire
            Action = L'attribut défini la page appelée par le formulaire
            Method = Méthode d'envoi du formulaire GET ou POST(le plus répandu)
            Ajout dans la balise <Form> du format fichier
        -->
        <form method="post" action="index.php " enctype="multipart/form-data">
          <!--champ de sélection du genre -->
          <select name="gender">
            <option value="Monsieur">Mr</option>
            <option value="Madame">Mme</option>
          </select>
          <!-- Ajout des inputs avec leurs labels -->
          <p><label for="firstName">Nom :</label><input type="text" name="firstName"></p>
          <p><label for="lastName">Prénom :</label><input type="text" name="lastName"></p>
          <p><label for="xFile">Fichier :</label><input type="file" name="xFile"></p>
          <!-- Bouton Submit de validation du formulaire pour l'envoi des donnée-->
          <input type="submit" value="valider">
        </form>
      <p>
      <?php
      }
       ?>
     </p>
       <!-- Bouton de retour à la page vierge -->
       <a href="../index.php"><button type="button">Retour</button></a>
    </body>
</html>
