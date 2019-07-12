<?php
//formulaire-create.php
//formulaire de création d'une nouvelle promenade
//à faire verification / HTML / CSS

require_once("DataBase.php");

$database = new DataBase();
$maRando = $database->getRandoById($id);
?>
<html>
    <header>
        
    </header>
    <body>
        <h1>Proposez une randonnée</h1>

        <form action="process-create.php" method="post">

            <label for="titre">Nom: </label><br>
            <input type="text" id="titreRando" name="titre" placeholder="titre de la randonnée" required><br>
            <label for="auteur">Proposé par: </label><br>
            <input type="text" id="auteurRando" name="auteur" placeholder="votre pseudo" required><br>
            <label for="cp">Lieu </label><br>
            <input type="text" id="cpRando" name="cp" placeholder="code postal" required>
            <label for="ville"> </label>
            <input type="text" id="villeRando" name="ville" placeholder="ville" required><br>
            <label for="pays"> </label>
            <input type="text" id="paysRando" name="pays" placeholder="pays" required><br><br>
            <label for="depart">au départ de </label><br>
            <input type="text" id="departRando" name="depart" placeholder="lieu de départ" required><br>
            <label for="arrivee">et se termine à  </label><br>
            <input type="text" id="arriveeRando" name="arrivee" placeholder="lieu d'arrivée" required><br>
            <label for="files">Insérez une image</label><br>
            <input type="text" id="filesRando" name="files" placeholder="votre image" required><br>
            <label for="itineraireRando">Descriptif</label><br>
            <textarea name="itineraire"rows="5" cols="30" maxlength="255" placeholder="Vous pouvez écrire ici."></textarea><br>

            <br><br>

            <input type="submit" value="Valider">
        </form>
        
    </body>
</html>