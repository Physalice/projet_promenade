<?php

class Promenade{
    //Attributs
    private $id;              //les ajout et les modification vont se fair sur id
    private $titre;
    private $auteur;
    private $cp;
    private $ville;
    private $pays;
    private $depart;
    private $arrivee;
    private $files;
    private $itineraire;
  
// Constructeur par default

// fonctions
    public function set($name, $value){}
    public function getId(){
        return $this->id;
    
}
    public function getTitre(){return $this->titre;}
    public function getAuteur(){return $this->auteur;}
    public function getCp(){return $this->cp;}
    public function getVille(){return $this->ville;}
    public function getPays(){return $this->pays;}
    public function getDepart(){return $this->depart;}
    public function getArrivee (){return $this->arrivee;}
    public function getFiles(){return $this->files;}
    public function getItineraire(){return $this->itineraire;}
}
?>