<?php
// page profil d'une promenade finir la mise en page en html et css
//liée à la liste de la première page
//afficherpromenade.php

require_once ("DataBase.php");
$database = new DataBase();
$id = $_GET["id"];
// fiche technique de la promenade
$rando = $database->getRandoById($id);

?>
<html>

    <header>
       
    </header>
    <body>
        <h1>Randonnée n° <?php $rando->getId($id)?> </h1>      
            <p>Nom : <?php echo $rando->getTitre()?></p><br> 
            <p><?php echo $rando->getPays()?></p><br>          
            <p>proposée par : <?php echo $rando->getAuteur()?></p><br>
            <p>lieu : <?php echo $rando->getCp()?> - <?php echo $rando->getVille()?></p><br>
            <p>Pays : <?php echo $rando->getPays()?></p><br>
            <p>débute à : <?php echo $rando->getDepart()?></p>
            <p> jusqu'à : <?php echo $rando->getArrivee()?></p><br>
            
            <p>les points forts de votre randonnées : <?php echo $rando->getItineraire()?></p><br>
           
        <br><br>
            <a class="buttonDelete" href="process-delete.php?id=<?php echo $rando->getId(); ?>">Delete</a>
            <a class="buttonUpdate" href="process-update.php?id=<?php echo $rando->getId(); ?>">Update</a>
    </body>
</html>
