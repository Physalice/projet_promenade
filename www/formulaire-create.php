<?php
//formulaire-create.php
//formulaire de création d'une nouvelle promenade
//à faire verification / HTML / CSS

require_once("DataBase.php");
$database = new DataBase();
$maRando = $database->getRandoById($id);
?>
<!DOCTYPE html>
<html>
    <header>
        <titre>formulaire-create</titre>
    </header>
    <body>
        <h1>Proposez une randonnée</h1>

        <form action="process-create.php" method="POST" enctype="multipart/form-data">
             <!----image de la rando----->
            <label for="files">Choisissez votre image</label><br>
            <input type="file" id="filesRando" name="files"required>
            <br><br><br>
             <!----nom de la rando----->
            <label for="titre">Nom: </label><br>
            <input type="text" id="titreRando" name="titre" placeholder="titre de la randonnée" required><br>
            <!----auteur de la rando----->
            <label for="auteur">Proposé par: </label><br>
            <input type="text" id="auteurRando" name="auteur" placeholder="votre pseudo" required><br>
            <!----cp de la rando----->
            <label for="cp">Lieu </label><br>
            <input type="text" id="cpRando" name="cp" placeholder="code postal" required>
            <!----ville de la rando----->
            <label for="ville"> </label>
            <input type="text" id="villeRando" name="ville" placeholder="ville" required><br>
            <!----pays de la rando----->
            <label for="pays"> </label>
            <input type="text" id="paysRando" name="pays" placeholder="pays" required><br><br>
            <!----depart de la rando----->
            <label for="depart">au départ de </label><br>
            <input type="text" id="departRando" name="depart" placeholder="lieu de départ" required><br>
            <!----arrivée de la rando----->
            <label for="arrivee">et se termine à  </label><br>
            <input type="text" id="arriveeRando" name="arrivee" placeholder="lieu d'arrivée" required><br>
            <!----descriptif de la rando----->
            <label for="itineraireRando">Descriptif</label><br>
            <textarea name="itineraire"rows="5" cols="30" maxlength="255" placeholder="les points forts de votre proposition"></textarea>
            <br><br><br>
            
            <!----validation de la rando----->
            <input type="submit" name="submit" value="Valider votre création">
        </form>
   
        
    </body>
</html>