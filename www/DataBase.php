<?php
//DataBase.php 
require_once ("classPromenade.php");

class DataBase{
//création de la connexion base de donnée    
    private $connexion;
    
    public function __construct(){                               //inclure l'user et l'admin
        $PARAM_hote="mariadb";                     
        $PARAM_port="3306";                       
        $PRAM_nom_bd="PMDDatabase";           
        $PARAM_utilisateur="adminPMD";          
        $PARAM_mot_passe="Calder@Vu@";         

        try {
            $this->connexion = new PDO(                        //connexion à la base de donnée avec la classe PDO
            "mysql:host=".$PARAM_hote.";dbname=".$PRAM_nom_bd.";charset=utf8", //option de la base de donneé ne pas oublier charset pour lire les accens
            $PARAM_utilisateur,                                 //connexion avec les paramètres untilisateur et mot de passe
            $PARAM_mot_passe);
        } catch(Exception $e) {                                 //si try echoue je stock l'exception dans $e
            echo "Erreur : ".$e->getMessage()."<br/>";         //affiche le message d'erreur avec le code
            echo "N° : ".$e->getCode();                        //affiche la ligne de code de l'erreur
        }   
    }
    //lis les objet dans les colonne de la base de donnée
    public function getDBName(){
        return $this->connexion->query("SELECT DataBase()")->fetchColumn();
    }
     //retourner (stock en back) cette connexion
    public function getConnexion(){                 
        return $this->connexion;
    }

    //paramettrage des valeurs pour l'insertion d'une nouvelle promenade
    public function insertRando($titre, $auteur, $cp, $ville, $pays, $depart, $arrivee, $files, $itineraire){
        $pdoStatement = $this-> connexion-> prepare("INSERT INTO Promenades (titre, auteur, cp, ville, pays, depart, arrivee, files, itineraire)  
                                                     VALUES (:paramTitre, :paramAuteur, :paramCp, :paramVille, :paramPays, :paramDepart, :paramArrivee, :paramFiles, :paramItineraire);"); //crée des variable des requête SQL
        $pdoStatement-> execute(array("paramTitre"=>$titre,      //défini les valeur aux variable par un tableau assiociatif de la clé et la variable SQL
                                        "paramAuteur"=>$auteur, 
                                        "paramCp"=>$cp, 
                                        "paramVille"=>$ville, 
                                        "paramPays"=>$pays, 
                                        "paramDepart"=>$depart, 
                                        "paramArrivee"=>$arrivee, 
                                        "paramFiles"=>$files, 
                                        "paramItineraire"=>$itineraire));
    //récupère l'id qui a été créer avec l'entrée d'une nouvelle promenade
        $idRAndo = $this->connexion->lastInsertId();             
 
    //var_dump($pdoStatement->errorInfo()); 
        return $idRAndo;
    }

    // changer les donnée de classPromenade  
    public function updateRando($id, $titre, $auteur, $cp, $ville, $pays, $depart, $arrivee, $files, $itineraire){
        $pdoStatement = $this-> connexion-> prepare("UPDATE Promenades 
                                                     SET titre = :titreRando, auteur =:auteurRando, cp = :cpRando, ville =:villeRando, pays =:paysRando, depart =:departRando, arrivee =:arriveeRando, files =:filesRando, itineraire =:itineraireRando 
                                                     WHERE id = :idRando");
    //execution de la requête et mapping des valeurs
        $pdoStatement-> execute(array("titreRando"=>$titre, 
                                        "auteurRando"=>$auteur, 
                                        "cpRando"=>$cp, 
                                        "villeRando"=>$ville, 
                                        "paysRando"=>$pays, 
                                        "departRando"=>$depart, 
                                        "arriveeRando"=>$arrivee, 
                                        "filesRando"=>$files, 
                                        "itineraireRando"=>$itineraire,
                                        "idRando" => $id));
        //var_dump($pdoStatement->errorInfo());    
    }

//effacer une promenade
     public function deleteRando($id){
        $pdoStatement = $this->connexion->prepare( "DELETE FROM Promenades 
                                                     WHERE id = :idRando");
        $pdoStatement->execute( array("idRando" => $id));
    }

//récupérer toutes les promenades
    public function getAllRando(){
            $pdoStatement = $this->connexion->prepare(
            "SELECT id, titre, files, auteur, ville, pays, itineraire
             FROM Promenades");
        $pdoStatement->execute();
        $listePromenade = $pdoStatement->fetchAll(PDO::FETCH_CLASS, "Promenade"); //Récupère une ligne depuis un jeu de résultats associé à l'objet PDOStatement. 
                                                                                 //Le paramètre fetch_style détermine la façon dont PDO retourne la ligne. 
        return $listePromenade;
    }
    //affiche le profil d'une promenade -> récupération de la liste
    public function getRandoById($id){
        $pdoStatement = $this->connexion->prepare(
            "SELECT *
             FROM Promenades 
             WHERE id = :idRando"
        );
        $pdoStatement->execute(array("idRando" => $id));
        $maRando = $pdoStatement->fetchObject("Promenade");                     //idem fetchAll mais pour un seul objet

        return $maRando;
    }

}//fin de classe
?>