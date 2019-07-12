<?php

//import de la database
require_once ("DataBase.php");
//creation de la connexion
$database = new Database();
//recuperer l'id depuis l'url
$id = $_GET["id"];
//var_dump($id);
// recuperation de la liste d'une promenade
$ = $database->getChienById($id);

?>
<html>
<!--Affiche les info de forme agreable-->
    <header>
        <link rel="stylesheet" href="style.css">
    </header>
    <body>
        <h1>Informations chien</h1>      
            <p>Nom : <?php echo $chien->getNom() ?></p><br>           
            <p>Race : <?php echo $promenade->getRace() ?></p><br>
            <p>Age : <?php echo $promenade->getAge() ?></p><br>
        <h1>Informations maitre</h1>   
            <p>Nom : <?php echo $promenade->getNomMaitre() ?></p><br>
            <p>Tel : <?php echo $promenade->getTelephone() ?></p><br>   
        <br><br>
            <a class="buttonDelete" href="process-delete.php?id=<?php echo $promenade->getid(); ?>">Delete</a>
            <a class="buttonDelete" href="update-promenade.php?id=<?php echo $chien->getid(); ?>">Update</a>
    </body>
</html>
