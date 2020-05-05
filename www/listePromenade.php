<?php
//listePormenade.php



require_once ("DataBase.php");
//créer un nouvel objet qui fait appel au constructeur database
$database = new DataBase();
//créé une variable qui va prendre en compe la fonction get de la database
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
                <div class="col-sm-12 col-lg-6 d-flex align-items-start justify-content-start">
                    <img src="image/montagne2.png" class="img-fluid logo1" alt="img">
                </div>
                <div class="col-sm-12 col-lg-6 d-flex justify-content-around align-items-end">
                    <a class="badge badge-primary btn-sm" href="formulaire-create.php">Create</a>                   
                </div>  
            </div>    
        </section>
          <!-- fin section 1 jc-->  
           <!--  section 2 --> 
             
        <section class="d-flex flex-row flex-wrap justify-content-center">
        <a href="process-create.php"> </a>
        <!----boucle pour efficher les élément de la base de donnée------>
        <?php foreach($listePromenade as $rando){ ?>
        <!----crée un containaire pour afficher les élément 1 à 1 et non en liste------>    
            <div class='card col-sm-6 col-md-4 m-3 p-3'>   
                <div class='row'>
                    <div class=' liste' >
                        <!----sortir les get demandé enrobé dans le html-CSS----->
                        <img src="<?php echo $rando->getFiles() ?>" alt='montagne' style="w-70">
                        <h1><?php echo $rando->getTitre() ?></h1>
                        <p>Lieu: <?php echo $rando->getVille() .'/' .$rando->getPays() ?></p>
                        <p class='auteur'> Créé par: <?php echo $rando->getAuteur() ?> </p>
                        <a href="afficherpromenade.php?id=<?php echo $rando->getId() ?>" ><p><button>Choisir</button></p></a>
                            
                    </div> 
                </div> 
            </div>
            <?php } ?>
        
        </section>
        <!-- fin section 2 -->
 
         <!--section 3-->  
         <section>
                <div class="container-fluid menu">
                    <div class="d-flex flex-column align-content-center">       
                        <ul>
                            <li class="nav-item dropdown contact">
                                        <a class="nav-link dropdown-toggle dp1" data-toggle="dropdown" href="#">Contact us</a>
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
                        <ul>
                            <li class="nav-item dropdown contact">
                                        <a class="nav-link dropdown-toggle dp1" data-toggle="dropdown" href="#">Contactez-nous</a>
                                <div class="dropdown-menu"> 
                                    <form class="mx-3">
                                        <h2>enregistrement</h2>
                                        prénom:<br>
                                        <input type="text" name="firstname" value="">
                                        <br>
                                        nom:<br>
                                        <input type="text" name="lastname" value="">
                                        <br><br>
                                        mail:<br>
                                        <input type="text" name="mail" value="">
                                        <br><br>
                                        <input type="submit" value="envoyer" class="bouton" onclick="alert('un mail vous à été envoyé')">
                                    </form> 
                                </div>
                            </li>
                        </ul>
                        <ul>
                            <li class="nav-item dropdown contact">
                                        <a class="nav-link dropdown-toggle dp1" data-toggle="dropdown" href="#">kontaktiere uns</a>
                                <div class="dropdown-menu"> 
                                    <form class="mx-3">
                                        <h2>Einloggen</h2>
                                        Vorname:<br>
                                        <input type="text" name="firstname" value="">
                                        <br>
                                        Nachname:<br>
                                        <input type="text" name="lastname" value="">
                                        <br><br>
                                        mail:<br>
                                        <input type="text" name="mail" value="">
                                        <br><br>
                                        <input type="submit" value="einreichen" class="bouton" onclick="alert('Eine E-Mail wird an Sie gesendet')">
                                    </form> 
                                </div>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-start align-items-center logo">
                            <!--- i = icones---->
                            <a href="https://facebook.com/" target="_blank"><i class='fab fa-facebook-square' style='font-size:30px'></i></a>
                            <a class="youtubeL" href="https://youtube.com/" target="_blank"><i class='fab fa-twitter-square' style='font-size:30px'></i></a>
                            <a class="twitterL" href="https://twitter.com/" target="_blank"><i class='fab fa-youtube-square' style='font-size:30px'></i></a>            
                        </div>
                    </div>
                </div>
        </section>            
         <!-- fin section 3-->               
      
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   
    </body>
</html>
