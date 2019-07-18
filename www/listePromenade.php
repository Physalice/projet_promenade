<?php
//listePormenade.php
//liste pour la première page essayer de faire des vignettes
//vérification OK
// à faire HTML et CSS de mise en page

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
            <link rel="stylesheet" href="styleRando.css">
        <!----police------>       
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">       
            <title>formulaire-create</title>
    </head>

    <body>
                    
        <section>
           <a href="process-create.php"> </a>
            <?php foreach($listePromenade as $rando){ ?>
                <div class='card'>
                    <div class='row'>
                        <div class='col-md liste' >
                           
                            <img src="<?php echo $rando->getFiles() ?>" alt='montagne' style="w-70">
                            <h1><?php echo $rando->getTitre() ?></h1>
                            <p>Lieu: <?php echo $rando->getVille() .'/' .$rando->getPays()?></p>
                            <p class='auteur'> Créé par: <?php echo $rando->getAuteur()?> </p>
                            <a href='afficherpromenade.php?id=' <?php $rando->getId()?> ><p><button>Choisir</button></p></a>
                             
                       </div> 
                    </div> 
                </div>
             <?php } ?>
            
            </section>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   
    </body>
</html>








