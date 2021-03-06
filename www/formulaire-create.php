<?php
//formulaire-create.php
//formulaire de création d'une nouvelle promenade
//HTML / CSS de fond ajout JO


require_once("DataBase.php");
//créé un nouvel objet qui fait appel au contructeur database
$database = new DataBase();
//créé une variable qui va prendre en compe la fonction get de la database
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
            <link rel="stylesheet" href="styleindex.css">
        <!----police------>       
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">             
            <title>formulaire-create</title>
    </head>

    <body>
         <!--section 1 jc-->
         <section class="container-fluid background-section1">
            <div class="row">
                <div class="col-sm-12 d-flex align-items-start justify-content-start">
                    <img src="image/montagne2.png" class="img-fluid logo1" alt="img">
                </div>
                </div>
                <div class="col-sm-12 d-flex justify-content-end mr-3">
                    <a class="badge badge-primary btn-sm" href="listePromenade.php">Create</a>                   
                </div>  
            </div>
        </section>
        <!-- fin section 1 -->
        <!-- debut section 2 -->
    <form action="process-create.php" method="POST" enctype="multipart/form-data">
        
        <div class="text-justify text-center">
        <h1>Proposez une randonnée</h1>
        <p>Vous avez vécu une aventure extraordinaire, partagez-la...</p>
        </div>
        
            <div class="container">

                <div class="row">
                    <div class="button col-sm-12">
                        <input type="submit" value="Submit">
                    </div>
                </div>

                <div class="row ">
                    <div class="col-25">
                        <label for="files">Choisissez votre image</label>
                    </div>
                    <div class="col-75">
                        <input type="file" id="files" name="files"required>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-25">
                        <label for="titre">Nom: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="titreRando" name="titre" placeholder="titre de la randonnée" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="auteur">Proposé par: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="auteurRando" name="auteur" placeholder="votre pseudo" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25 d-flex align-self-end">
                        <label for="cp">Lieu </label>
                    </div>
                    <div class="col-75 d-flex align-items-end mb-2">
                        <input type="text" class="col-sm-1 cp" id="cpRando" name="cp" placeholder="cp" required>
                        <?php echo "--" ?>
                        <input type="text" class="col-sm ville" id="villeRando" name="ville" placeholder="ville" required>
                    </div>
                    <div class="col-25">
                        <label for="pays"></label>
                    </div>
                    <div class="col-75">
                        <input type="text" class= "col-sm-12" id="paysRando" name="pays" placeholder="pays" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25 ">
                        <label for="depart">au départ de </label>
                    </div>
                    <div class="col-75  df-flex align-self-end mb-3 ">
                        <input type="text" id="departRando" name="depart" placeholder="début de l'aventure" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="arrivee">et se termine à  </label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="arriveeRando" name="arrivee" placeholder="fin de l'aventure" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="itineraire">Descriptif</label>
                    </div>
                    <div class="col-75">
                        <textarea id="itineraire" name="itineraire" placeholder="les points forts de votre aventure" style="height:200px"></textarea>
                    </div>
                </div>
                
            </div><!-----fin container---->
            
        </form> 
        <!-- Fin section 2 -->
         <!-- debut section 3-->  
         <section>
                <div class="container-fluid jumbotron jumbotron-fluid mmenu">
                    <div class="row col-sm-12 col-lg-6">       
                        <ul style="list-style-type:none;">
                            <li class="nav-item dropdown contact col-sm-12 col-lg-6">
                                        <a class="nav-link dropdown-toggle dp1" data-toggle="dropdown" href="#">Contact</a>
                                <div class="dropdown-menu"> 
                                    <form class="mx-3">
                                        <h2>Sign in</h2>
                                        firstname:<br>
                                        <input type="text" name="firstname" value="">
                                        <br>
                                        lastname:<br>
                                        <input type="text" name="lastname" value="">
                                        <br><br>
                                        mail:<br>
                                        <input type="text" name="mail" value="">
                                        <br><br>
                                        <input type="submit" value="submit" class="bouton" onclick="alert('an email is sent to you')">
                                    </form> 
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-end align-items-end logo">
                        <a href="https://facebook.com/" target="_blank"><i class='fab fa-facebook-square' style='font-size:30px'></i></a>
                        <a class="youtubeL" href="https://youtube.com/" target="_blank"><i class='fab fa-twitter-square' style='font-size:30px'></i></a>
                        <a class="twitterL" href="https://twitter.com/" target="_blank"><i class='fab fa-youtube-square' style='font-size:30px'></i></a>            
                    </div>
                </div>    
        </section>                    
         <!-- fin section 3-->               
      


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   
    </body>
</html>








