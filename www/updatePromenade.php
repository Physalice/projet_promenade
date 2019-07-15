<?php
//updatePromenade.php
//À L'AIR DE FONCTIONNER
require_once ("DataBase.php");
$database = new Database();
$id = $_GET["id"];
$rando = $database->getRandoById($id);
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
    <form action="process-update.php" method="post"enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $rando->getId() ?>"><br>
        <div class="button">
            <input type="submit" value="Mettre à jour">
        </div>
        <h1>Mise à jour promenade</h1>
        <p>Vous avez des changements à apporter à cette randonnée?</p>
            <div class="container">
                <div class="row">
                    <div class="col-25">
                        <label for="files">Changez l'image</label>
                    </div>
                    <div class="col-75">
                        <input type="file" id="filesRando" name="files"required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="Titre">Nom: </label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="Titre" name="Titre" value="<?php echo $rando->getTitre() ?>" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="Auteur">Proposé par: </label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="Auteur" name="Auteur"  value="<?php echo $rando->getAuteur() ?>" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="Cp">Lieu </label>
                    </div>
                    <div class="col-75 d-flex align-content around">
                        <input class="col-sm-2 col-md-2 cp mr-2" type="text" id="Cp" name="Cp" value="<?php echo $rando->getCp() ?>" required>
                        <input class="col-sm-4 col-md-10 mr-2" type="text" id="Ville" name="Ville" value="<?php echo $rando->getVille() ?>" required>
                    </div>
                    <div class="col-25">
                        <label for="Pays"></label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="Pays" name="Pays"  value="<?php echo $rando->getPays() ?>" required><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="Depart">au départ de </label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="Depart" name="Depart" value="<?php echo $rando->getDepart() ?>" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="Arrivee">et se termine à  </label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="Arrivee" name="Arrivee" value="<?php echo $rando->getArrivee() ?>" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="Itineraire">Descriptif</label>
                    </div>
                    <div class="col-75">
                    <textarea type="text" id="Itineraire" name="Itineraire" value="<?php echo $rando->getItineraire() ?>" required></textarea>
                    </div>
                </div>
            </div>
        </form> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   
    </body>
</html>








