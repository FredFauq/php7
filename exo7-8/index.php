<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 7</title>
    </head>
    <body>
      <!-- Ouverture des balises PHP dans une balise p -->
      <p>
        <?php
        // Vérification condition que le formulaire n'est pas vide
        if (!empty($_POST['civility']) || !empty($_POST['firstName']) || !empty($_POST['lastName']) || !empty($_FILES['uploadFile'])) {
          // Récupérationn des infos  du fichier
          $infoFile = pathinfo($_FILES['uploadFile']['name']);
          // Stockage dans une variable de le nom du fichier
          $fileName = $infoFile['filename'];
          // Stockage dans une variable de l'extension du fichier
          $extensionUpload = $infoFile['extension'];
          // Condition verifier que l'extension est en PDF
          if ($extensionUpload == 'pdf') {
        ?>
          <!-- permet de renvoyer le nom du fichier-->
          <p> Le nom de votre fichier est : <?php echo $fileName; ?> </p>
          <!-- permet de renvoyer l'extension du fichier-->
          <p> Le format de votre fichier est : .<?php echo $extensionUpload; ?> </p>
        <?php
             //Condition si les champs sont vides et l'extension du fichier n'est pas bonne
             }else{
        ?>
          <p> Veuillez remplir tous les champs et insérez un fichier pdf, svp.</p>
        <?php
             }
       
        } else {
         ?>
         <div>
         <!-- Création du formulaire
         Action = L'attribut défini la page appelée par le formulaire
         Method = Méthode d'envoi du formulaire GET ou POST(le plus répandu)
        Ajout dans la balise <Form> du format fichier
        -->
        <form method="post" action="index.php " enctype="multipart/form-data">
          <!--champ de sélection du genre -->
          <select name="civility">
            <option value="mister">Mr</option>
            <option value="miss">Mme</option>
          </select>
          <!-- Ajout des inputs avec leurs labels -->
          <p><label for="firstName">Nom :</label><input type="text" name="firstName"></p>
          <p><label for="lastName">Prénom :</label><input type="text" name="lastName"></p>
          <p><label for="uploadFile">Fichier :</label><input type="file" name="uploadFile"></p>
          <!-- Bouton Submit de validation du formulaire pour l'envoi des donnée-->
          <input type="submit" value="valider">
        </form>
          </div>
      <?php
        }
       ?>
       <!-- Bouton de retour à la page vierge -->
       <a href="../index.php"><button type="button">Retour</button></a>
    </body>
</html>