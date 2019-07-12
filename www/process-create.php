

<?php
//créer une nouvelle promenade sur insertRando de la DataBase

//les infos  avec $_POST
$titre = $_POST["titre"];
$auteur = $_POST["auteur"];
$cp = $_POST["cp"];
$ville = $_POST["ville"];
$pays = $_POST["pays"];
$depart = $_POST["depart"];
$arrivee = $_POST["arrivee"];
$files = $_POST["filess"];      //voir comment intégrer l'image
$itineraire = $_POST["itineraire"];

// Importer et mettre une valeur (instencier) une database
require_once("DataBase.php");
$database = new DataBase();


$nouvelId = $database->insertRando($titre, $auteur, $cp, $ville, $pays, $depart, $arrivee, $files, $itineraire);


header('Location: classPromenade.php?id='.$nouvelId); 

?>

