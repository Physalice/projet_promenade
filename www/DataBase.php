<?php
require_once ("classPromenade.php");

class DataBase{
    
    private $connexion;
    

    public function __construct(){
        $PARAM_hote="mariadb";                     //en dehors de docker mettre localhost
        $PARAM_port="3306";                        //code de port de mariadb
        $PRAM_nom_bd="PMDDatabase";             //nom de la base de donnée
        $PARAM_utilisateur="adminPMD";          //nom de l'utilisateur crée dans initialscript.sql
        $PARAM_mot_passe="Calder@Vu@";         //mot de passe créée dans initialscript.sql

        try{$this->connexion =new PDO(                         //utilisé l'attribut connection pour créer un nouveau PDO
            "mysql:host=".$PARAM_hote.";dbname=".$PRAM_nom_bd,
            $PARAM_utilisateur,                               //essaye de faire le code qui est dans le TRY
            $PARAM_mot_passe);
        }catch(Exception $e){                                  //si try echoue je stock l'exception dans $e
            echo "Erreur : ".$e->getMessage()."<br/>";         //affiche le message d'erreur avec le code
            echo "N° : ".$e->getCode();                        //affiche le code de l'erreur
        }   
    }

    public function getDBName(){
        return $this->connexion->query("SELECT DataBase()")->fetchColumn();
    }
     //accèder en lecture à un attribut
    public function getConnexion(){                 
        //var_dump($connexion->connexion());
        return $this->connexion;
    }
    
    
     
    //paramettrage des valeur pour l'insertion d'une nouvelle promenade
    public function insertRando($titre, $auteur, $cp, $ville, $pays, $depart, $arrivee, $img_pass, $itineraire){
        $pdoStatement = $this-> connexion-> prepare("INSERT INTO Promenade (titre, auteur, cp, ville, pays, depart, arrivee, img_pass, itineraire)  
                                                     VALUES (:paramTitre, :paramAuteur, :paramCp, :paramVille, :paramPays, :paramDepart, :paramArrivee, :paramImg_pass, :paramItineraire)");
        $pdoStatement-> execute(array("paramTitre"=>$titre, 
                                        "paramAuteur"=>$auteur, 
                                        "paramCp"=>$cp, 
                                        "paramVille"=>$ville, 
                                        "paramPays"=>$pays, 
                                        "paramDepart"=>$depart, 
                                        "paramArrivee"=>$arrivee, 
                                        "paramImg_pass"=>$img_pass, 
                                        "paramItineraire"=>$itineraire));
    //récupère l'id qui a été créer avec l'entrée d'une nouvelle promenade
        $idRAndo = $this->connexion->lastInsertId();             
 
    var_dump($pdoStatement->errorInfo()); 
    }
// changer les donnée de classPromenade  
    public function updateRando($titre, $auteur, $cp, $ville, $pays, $depart, $arrivee, $img_pass, $itineraire){
        $pdoStatement = $this-> connexion-> prepare("UPDATE Promenade SET titre = :titreRando, auteur =:auteurRando, cp = :cpRando, ville =:villeRando, pays =:paysRando, depart =:departRando, arrivee =:arriveeRando, img_pass =:img_passRando, itineraire =:itineraireRando WHERE id = :idRando");
        //execution de la requête et mapping des valeurs
        $pdoStatement-> execute(array("paramTitre"=>$titre, 
                                        "paramAuteur"=>$auteur, 
                                        "paramCp"=>$cp, 
                                        "paramVille"=>$ville, 
                                        "paramPays"=>$pays, 
                                        "paramDepart"=>$depart, 
                                        "paramArrivee"=>$arrivee, 
                                        "paramImg_pass"=>$img_pass, 
                                        "paramItineraire"=>$itineraire));
        var_dump($pdoStatement->errorInfo());
      
        
    }
//effacer une promenade par classPromenade    
     public function deleteRando($id){
        $pdoStatement = $this->connexion->prepare( "DELETE FROM Promenades WHERE id = :idRando");
        $pdoStatement->execute( array("idRando" => $id));
    }

    //récupérer une promenade par son id de la listePromenade
    public function getAllRando($id){
            $pdoStatement = $this->connexion->prepare(
            "SELECT p.id, p.titre, p.files, p.auteur, p.ville, p.pays
             FROM Promenade p WHERE p.id = :idRAndo");
        $pdoStatement->execute(array("idRando" => $id));
    }



    

}//fin de classe



    


?>