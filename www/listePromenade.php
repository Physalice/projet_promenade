<?php
//import de la database exe - 14
require_once ("DataBase.php");
//creation de la connexion
$database = new DataBase();
// recuperation de la liste des chiens
$listePromenade = $database->getAllRando();
?>
    <html>
        <header>
            <link rel="stylesheet" href="style.css">
        </header>
        <body>
            <a href="create-promenade.php">Nouvelle Promenade</a>
            <br>
            
            <h1>liste des promenades</h1>
            

            <ul>
                <?php
                 foreach($listePromenades as $rando){ ?>
                <li>
                <?php echo "<a href =classPromenade.php?id=".$rando->getId().">";
                      echo "promenade numéro".$rando->getId()." : ".$rando->getTitre().$rando->getFiles() .$rando->getAuteur()." Créé par - ".$rando->getVille()."Ville - ".$rando->getPays()."Pays - ";
                      echo "</a>";
                ?>    
                </li>
                <?php } ?>
            </ul>
        </body>
    </html>
        

