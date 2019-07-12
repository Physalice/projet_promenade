<?php
// PAGE INTERMEDIARE => QUE du PHP

// Récupérer avec $_POST
$titre = $_POST["titre"];
$auteur = $_POST["auteur"];
$cp = $_POST["cp"];
$ville = $_POST["ville"];
$pays = $_POST["pays"];
$depart = $_POST["depart"];
$arrivee = $_POST["arrivee"];
$files = $_POST["files"];      //voir comment intégrer l'image
$itineraire = $_POST["itineraire"];

// Importer et instancier une database
require_once("database.php");
$database = new Database();

// Appeler la fonction updateDog en lui passant les infos du formulaire
// updateDog($id, $nom, $age, $race)
$database->updateRando($titre, $auteur, $cp, $ville, $pays, $depart, $arrivee, $files, $itineraire);

// Rediriger l'utilisateur vers la page de profil du chien
header('Location: classPromenade.php?id='.$id); 

?>