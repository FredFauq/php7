<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4</title>
    </head>
    <body>
      <!-- Création du formulaire
          Action = L'attribut défini la page appelée par le formulaire
          Method = Méthode d'envoi du formulaire GET ou POST(le plus répandu)
      -->
        <form method="post" action="user.php" >
          <!-- Ajout des inputs avec leurs labels -->
          <label for="firstName">Nom :</label><input type="text" name="firstName">
          <label for="lastName">Prénom :</label><input type="text" name="lastName">
          <!-- Bouton Submit de validation du formulaire pour l'envoi des donnée-->
          <input type="submit" value="valider">
        </form>
          <!-- Bouton de retour à la page -->
          <a href="../index.php"><button type="button">Retour</button></a>
    </body>
</html>