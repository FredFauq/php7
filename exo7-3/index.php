<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3</title>
    </head>
    <body>
      <!-- Création du formulaire
          Action = L'attribut défini la page appelée par le formulaire
          Method = Méthode d'envoi du formulaire GET ou POST(le plus répandu)
      -->
        <form method="get" action="user.php" >
          <!-- Ajout des inputs avec leurs labels -->
          <label for="lastName">Nom :</label><input type="text" name="lastName" id="lastName" placeholder="Dupont">
          <label for="firstName">Prénom :</label><input type="text" name="firstName"id="firstName" placeholder="Jean">
          <!-- Bouton Submit de validation du formulaire pour l'envoi des données -->
          <input type="submit" value="valider">
        </form>
          <a href="../index.php"><button type="button">Retour</button></a>
    </body>
</html>
