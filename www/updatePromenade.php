<?php
//import de la database
require_once ("DataBase.php");
//creation de la connexion
$database = new Database();
//recuperer l'id depuis l'url
$id = $_GET["id"];
//var_dump($id);
// recuperation d'une promenade
$rando = $database->getRandoById($id);
?>
<html>
<header>
    <link rel="stylesheet" href="style.css">
</header>
    <body>
        <h1>Mise à jour promenade</h1>
        <form action="process-update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $rando->getId() ?>"><br>
            <label for="Titre"> Nom </label><br>
            <input type="text" id="Titre" name="Titre" value="<?php echo $rando->getTitre() ?>" required><br>     
            <label for="Auteur"> Auteur </label><br>
            <input type="text" id="Auteur" name="Auteur"  value="<?php echo $rando->getAuteur() ?>" required><br>
            <label for="Cp"> Cp </label><br>
            <input type="text" id="Cp" name="Cp" value="<?php echo $rando->getCp() ?>" required><br>
            <br>
            <label for="Ville"> Ville </label><br>
            <input type="text" id="Ville" name="Ville" value="<?php echo $rando->getVille() ?>" required><br>     
            <label for="Pays"> Pays </label><br>
            <input type="text" id="Pays" name="Pays"  value="<?php echo $rando->getPays() ?>" required><br>
            <label for="Depart"> Depart </label><br>
            <input type="text" id="Depart" name="Depart" value="<?php echo $rando->getDepart() ?>" required><br>
            <label for="Arrivee"> Arrivee </label><br>
            <input type="text" id="Arrivee" name="Arrivee" value="<?php echo $rando->getArrivee() ?>" required><br>     
            <label for="Files"> Photo </label><br>
            <input type="text" id="Files" name="Files"  value="<?php echo $rando->getFiles() ?>" required><br>
            <label for="Itineraire"> Itineraire </label><br>
            <input type="text" id="Itineraire" name="Itineraire" value="<?php echo $rando->getItineraire() ?>" required><br>
            <br>
<!-----------width="48" height="48"------attribut de taille de l'image------>

            <br>
        
            <input type="submit" value="Mettre à jour">

        </form> 


        
        
    </body>
      
</html>