<?php
// comment séparer les éléments 

require_once ("DataBase.php");
$database = new DataBase();

$listePromenade = $database->getAllRando();
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- style CSS -->
            <link rel="stylesheet" href="randoListe.css">
        <!----police------>       
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            
        </head>

        <body>
            <h1>liste des promenades</h1>
            <a href="process-create.php"></a>
            <div class="column col-3 d-flex space-around">
                <div class="row no-gutters">
                    <div class="card ">
                       <?php foreach($listePromenade as $rando){ ?>
                         <img class="image" src="<?php echo "$rando->getFiles()" ?>" alt="montagne" style="width:100%">    
                            <?php 
                                echo "<br>" ."Randonnée numéro " .$rando->getId() ."<br>" ."<h4>" .$rando->getTitre() ."<h4>";
                                echo "Créé par : " .$rando->getAuteur();?>
                                <div class="title"><?php echo "Ville " .$rando->getVille() ." Pays " .$rando->getPays();?></div>
                                <?php echo $rando->getitineraire();?> 
                            <button><a href src="afficherpromenade.php?id='<?php $rando->getId()?>'" ></a>En savoir plus</button>  
                            <?php } ?>
                    </div>
                </div>
            </div>        
        </body>
    </html>





  
  

  



    

