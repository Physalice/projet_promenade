<?php
//DataBase.php 
require_once ("classPromenade.php");

class DataBase{
//création de la connexion base de donnée    
    private $connexion;
    
    public function __construct(){
        $PARAM_hote="mariadb";                     
        $PARAM_port="3306";                       
        $PRAM_nom_bd="PMDDatabase";           
        $PARAM_utilisateur="adminPMD";          
        $PARAM_mot_passe="Calder@Vu@";         

        try {
            $this->connexion = new PDO(                         //utilisé l'attribut connection pour créer un nouveau PDO et ajouter que je travaille sur la charset=utf8
            "mysql:host=".$PARAM_hote.";dbname=".$PRAM_nom_bd.";charset=utf8",
            $PARAM_utilisateur,                               //essaye de faire le code qui est dans le TRY
            $PARAM_mot_passe);
        } catch(Exception $e) {                                  //si try echoue je stock l'exception dans $e
            echo "Erreur : ".$e->getMessage()."<br/>";         //affiche le message d'erreur avec le code
            echo "N° : ".$e->getCode();                        //affiche le code de l'erreur
        }   
    }
//visuel de la base de donnée
    public function getDBName(){
        return $this->connexion->query("SELECT DataBase()")->fetchColumn();
    }
     //accèder en lecture à un attribut
    public function getConnexion(){                 
        return $this->connexion;
    }

    //paramettrage des valeur pour l'insertion d'une nouvelle promenade
    public function insertRando($titre, $auteur, $cp, $ville, $pays, $depart, $arrivee, $files, $itineraire){
        $pdoStatement = $this-> connexion-> prepare("INSERT INTO Promenades (titre, auteur, cp, ville, pays, depart, arrivee, files, itineraire)  
                                                     VALUES (:paramTitre, :paramAuteur, :paramCp, :paramVille, :paramPays, :paramDepart, :paramArrivee, :paramFiles, :paramItineraire)");
        $pdoStatement-> execute(array("paramTitre"=>$titre, 
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
        $listePromenade = $pdoStatement->fetchAll(PDO::FETCH_CLASS, "Promenade");
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
        $maRando = $pdoStatement->fetchObject("Promenade");

        return $maRando;
    }
    /*
    //affiche un élément de la liste 
    public function getRando($id){
        $pdoStatement = $this->connexion->prepare(
        "SELECT id, titre, files, auteur, ville, pays, itineraire
        FROM Promenades");
        $pdoStatement->execute();
        $listePromenade = $pdoStatement->fetchObject("Promenade");
        return $listePromenade;
    }
    */


    

}//fin de classe



    


?>