<?php
 //import des ficiers nécessaire aux test
require_once("DataBase.php");                  
require_once("classPromenade.php");

//affiche le titre de la page
echo "<h1> Test de la database promenade : </h1>";
//créer un objet  avec le constructeur du ficier DataBase.php         
$database = new DataBase();                      
                             
if($database->getConnexion() == null){
    echo "<p>La connexion à échoué</p>";
}else{
    echo "<p>Connexion réussie, Bravo!!!</p>";
}


//créer une nouvelle promenade = class Promenade->page formulaire de création
$idpromenade = $database->insertRando("Col du fut", "Nelson", 1027, "Nyon", "Suisse", "Bassin", "antenne de la Dôle", "URL_image", "blablablablalba");
    echo "<p>Une nouvelle promenade n° : $idRando proposée.</p>";
    echo "<p>Intitulée : $titre</p>";
    echo "<p>testée par: $auteur</p>";

//changemwent de donnée  = classPromenade-> page de formulaire de modification
 //les rentrées sont impérativement dans l'ordre du tableau (array de la database)
$resultat = $database->updateRando("Moleson", "Nelson", 1027, "Nyon", "Suisse", "Bassin", "Col du fut", "URL_image", "blablablablalba");
if(resultat == true){
    echo "la randonnée a bien été mise à jour";
}else{
    echo "Impossible de de mettre à jour cette randonnée"; 
}

//effacer une promenade = class promenade
$resultat = $database->deleteRando(2);
if($resultat == true){
    echo "la promenade a bien été supprimée";
}else{
    echo "Problème, impossible de supprimer la promenade";
}

//affiche la liste des promenades = listePromenade-> première page
$listePromenade = $database-> getAllRando();
    echo "<ul>";
    foreach($listePromenade as $rando){
       
        echo "<li>";
        echo "promenade numéro".$rando->getId()." : ".$rando->getTitre().$rando->getFiles() .$rando->getAuteur()." Créé par - ".$rando->getVille()."Ville - ".$rando->getPays()."Pays - ";
        echo "</li>";
        
    }
    echo "</ul>";


?>

