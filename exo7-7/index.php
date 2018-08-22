<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PHP partie 7 exercice 7</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            <?php
            // Vérification condition que le formulaire n'est pas vide
            if (!empty($_POST['civility']) || !empty($_POST['firstName']) || !empty($_POST['lastName']) || !empty($_FILES['uploadFile'])) {
                // Récupérationn des infos  du fichier
                $infoFile = pathinfo($_FILES['uploadFile']['name']);
                // Stockage dans une variable de l'extension du fichier
                $extensionUpload = $infoFile['extension'];
                // Si rempli affichage des données récoltées
                echo strip_tags($_POST['civility']) . ' ' . strip_tags($_POST['firstName']) . ' ' . strip_tags($_POST['lastName']) . ' Votre fichier est : ' . $_FILES['uploadFile']['name'] . ' , et son extension est : ' . $extensionUpload;
            } else {
                // Sinon affichage formulaire
                echo 'Veuillez remplir le formulaire, svp !';
                ?>
            </p>
            <!-- Création du formulaire
                Action = L'attribut défini la page appelée par le formulaire
                Method = Méthode d'envoi du formulaire GET (transmission dans l'URL) ou POST (le plus répandu)
                Ajout dans la balise <Form> du format fichier
            -->
            <form method="post" action="index.php " enctype="multipart/form-data">
                <!--champ de sélection de la civilité -->
                <p>
                <label for="civility">Civilité</label>
                <select name="civility" id="civility">
                    <option selected disable>Veuillez sélectionner une option</option>
                    <option value="M">M</option>
                    <option value="Mme">Mme</option>
                </select>
                </p>
                <!-- Ajout des inputs avec leurs labels dans des balises <p> -->
                <p><label for="lastName">Nom :</label><input type="text" name="lastName" id="lastName" placeholder="Dupont"></p>
                <p><label for="firstName">Prénom :</label><input type="text" name="firstName" id="firstName" placeholder="Jean"></p>
                <p><label for="uploadFile">Fichier :</label><input type="file" name="uploadFile" id="file"></p>
                <!-- Bouton Submit de validation du formulaire pour l'envoi des données -->
                <input type="submit" value="valider">
            </form>
            <?php
        }
        ?>
    </body>
</html>
