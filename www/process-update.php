<?php
//process-update.php
// PAGE INTERMEDIARE => QUE du PHP

// Récupérer avec $_POST
$id = $_POST["id"];
$titre = $_POST["Titre"];
$auteur = $_POST["Auteur"];
$cp = $_POST["Cp"];
$ville = $_POST["Ville"];
$pays = $_POST["Pays"];
$depart = $_POST["Dpart"];
$arrivee = $_POST["Arrivee"];
$files = $_POST["Files"];      //voir comment intégrer l'image
$itineraire = $_POST["Itineraire"];

// Importer et instancier une database
require_once("DataBase.php");
$database = new Database();

// Appeler la fonction updateDog en lui passant les infos du formulaire
// updateRando($id, $titre, $auteur, $cp, $ville, $pays, $depart, $arrivee, $img_pass, $itineraire)
$database->updateRando($id, $titre, $auteur, $cp, $ville, $pays, $depart, $arrivee, $files, $itineraire);

// Rediriger l'utilisateur vers la page de profil du chien
header('Location: afficherpromenade.php?id='.$id); 

?>