<?php
//listePormenade.php
//liste de vignette pour la première page
//vérification OK
// à faire HTML et CSS de mise en page

require_once ("DataBase.php");
$database = new DataBase();

$listePromenade = $database->getAllRando();
?>
    <html>
        <header>
            <link rel="stylesheet" href="style.css">
        </header>
        <body>
            <a href="process-create.php"></a>
            <br>
            
            <h1>liste des promenades</h1>
            

            <ul>
                <?php
                 foreach($listePromenade as $rando){ ?>
                <li>
                <?php echo '<a href="afficherpromenade.php?id='.$rando->getId().'">';
                      echo "promenade numéro".$rando->getId()." : ".$rando->getTitre().$rando->getFiles() .$rando->getAuteur()." Créé par - ".$rando->getVille()."Ville - ".$rando->getPays()."Pays - ";
                      echo "</a>";
                ?>    
                </li>
                <?php } ?>
            </ul>
        </body>
    </html>
        

