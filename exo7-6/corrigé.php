<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>p7exo6</title>
    </head>
    <body>
        <p>
            <?php
            if (isset($_POST['submit'])) {
                if (!empty($_POST['civility'])) {
                    echo $_POST ['civility'];
                }else{
                    echo 'Veuillez entrer votre civilité';
                }
                if (!empty($_POST['lastname'])) {
                    echo $_POST ['lastname'];
                }else{
                    echo 'Veuillez entrer votre nom';
                }
                if (!empty($_POST['firstname'])) {
                    echo $_POST ['firstname'];
                }else{
                    echo 'Veuillez entrer votre prénom';
                }
            } else {
                ?>
            <form action="index.php" method="POST">
                <label for="civility">Civilité</label>
                <select name="civility" id="civility">
                    <option selected disabled>Veuillez selectionner une option</option> 
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                </select>
                <label for="lastname">Nom</label>
                <input type="text" name="lastname" placeholder="Nom" />
                <label for="firstname">Prénom</label>
                <input type="text" name="firstname" placeholder="Prénom" />
                <input type="submit" name="submit" value="soumettre" />
            </form>
    <?php
}/* fermeture du else après le form pour inserer le html, ainsi le form est visible ms une
  fois les données entrée et validé il ne l est plus */
?>
    </p>
</body>
</html>