<?php
//afficherpromenade.php
// page profil d'une promenade finir la mise en page en html et css
//liée à la liste de la première page
//problème de connexion à la base de donnée avec le formulaire create

require_once ("DataBase.php");
$database = new DataBase();
$id = $_GET["id"];
// fiche technique de la promenade
$rando = $database-> getRandoById($id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mountain Expedition</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styleindex.css">
    <link rel="stylesheet" href="styleRando.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Yeseva+One&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
    
    
    <body>
        <!--section 1 jc-->
        <section class="container-fluid background-section1">
            <div class="row">
                <div class="col-sm-12 col-lg-6 d-flex align-items-start justify-content-start">
                    <img src="image/montagne2.png" class="img-fluid logo1" alt="img">
                </div>
                <div class="col-sm-12 col-lg-6 d-flex justify-content-around align-items-end">
                    <a class="badge badge-primary btn-sm" href="formulaire-create.php"<?php echo $rando->getId(); ?>">Create</a>
                    <a class="badge badge-primary btn-sm" href="updatePromenade.php?id=<?php echo $rando->getId(); ?>">Update</a>
                </div> 
            </div>
        </section>
        <!-- fin section 1 -->

         <!-- section 2 -->
        <section class="container-fluid background-section2">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="d-flex flex-column vignette">
                            <p><?php $rando->getId()?></p> 
                            <h1> <?php echo $rando->getTitre()?></h1>
                            <img src="<?php echo $rando->getFiles()?>" alt="image promenade" class="img-fluid">
                            <h3>lieu : <?php echo $rando->getCp()?> - <?php echo $rando->getVille()?></h3>
                            <h3><?php echo $rando->getPays()?></h3>                           
                            <h3>Départ : <p><?php echo $rando->getDepart()?></p></h3>
                            <h3>Arrivée : <p><?php echo $rando->getArrivee()?></p></h3>
                            <h3>Infos : <p><?php echo $rando->getItineraire()?></p></h3> 
                            <h2>Proposé par :<?php echo $rando->getAuteur()?>
                        </div>                        
                    </div>
                </div>        
        </section>                      
          <!-- fin section 2-->  

          <!--section 3-->  
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
      

        <!--java-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    </body>

   
</html>            
                
            
    
               
                       
       
