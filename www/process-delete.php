<?php
// Import de la databse
require_once("database.php");
$database = new Database();

$id = $_GET["id"];
//supprime les donnee et récupre les info
$resultat = $database->deleteRando($id);
if($resultat == true){
    // Si la supression a fonctionné je redirige vers la liste.php
    // url redirection
    header('Location: listePromenade.php'); 
}else{
    // Si ca n'a pas fonctionné afficher un message
    echo "Suppression impossible";
}


?>