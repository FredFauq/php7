<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PHP partie 7 exercice 8</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            <?php
            // Vérification condition que le formulaire n'est pas vide
            if (!empty($_POST['civility']) || !empty($_POST['firstName']) || !empty($_POST['lastName']) || !empty($_FILES['uploadFile'])) {
                // Récupération du nom 'name'  du fichier 'uploadFile' dans une variable '$infoFile'
                $infoFile = pathinfo($_FILES['uploadFile']['name']);
                // Stockage dans une variable '$fileName' du nom du fichier
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
            } else {
                ?>
                <p> Veuillez remplir tous les champs et insérez un fichier pdf, svp.</p>
                <?php
            }
        } else {
            ?>
            <div>
                <!-- Création du formulaire
                Action = L'attribut défini la page appelée par le formulaire
                Method = Méthode d'envoi du formulaire GET (transmission dans l'URL) ou POST le plus répandu)
                Ajout dans la balise <Form> du format fichier
                "enctype" pour le type d'encodage des données sousmises au serveur
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
                    <p><label for="uploadFile">Fichier :</label><input type="file" name="uploadFile" id="file" ></p>
                    <!-- Bouton Submit de validation du formulaire pour l'envoi des données -->
                    <input type="submit" value="valider">
                </form>
            </div>
            <?php
        }
        ?>
    </body>
</html>