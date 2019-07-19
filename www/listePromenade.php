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
             
        <div class="card">
           <div class="row">
                <div class="col-md" 
           <a href="process-create.php"> </a>
            <?php foreach($listePromenade as $rando){            
        
                     echo "<div class='liste'>";
                     echo '<a href="afficherpromenade.php?id='.$rando->getId().'"></a>'; ?>
                     <div class="card">
                     <img src=<?php echo $rando->getFiles()?> img.jpg" alt="montagne" style="width:100%">
                     <h1><?php echo $rando->getTitre()?></h1>
                     <p><?php  echo "Lieu: " .$rando->getVille() ." " .$rando->getPays()?></p>
                     <p><?php echo $rando->getItineraire()?></p>
                     <p class="auteur"><?php echo "Créé par: " .$rando->getAuteur()?></p> 
                    
                     <p><button>Choisir</button></p>
                   </div> 
           <?php } ?>

                </div> 
            </div>
        </div>
        <!-- fin section 2 -->
 
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
      
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   
    </body>
</html>








