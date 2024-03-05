<?php

class Voiture {

    private int $idVehicule;
    private string $marque;
    private string $modele;
    private int $nbPortes;
    private int $vitesseActuelle;
    private bool $estDemarre = false;
    
    private static $nbVoitures = 0;

    public function __construct(int $idVehicule, string $marque, string $modele, int $nbPortes) {
        self::$nbVoitures++;
        $this->idVehicule = self::$nbVoitures;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = 0;
    }

//===================== ID Véhicule =====================// 

    public function getIdVehicule()
    {
        return $this->idVehicule;
    }

    public function setIdVehicule($idVehicule)
    {
        $this->idVehicule = $idVehicule;

        return $this;
    }
    
//===================== Marque =====================// 

    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

//===================== Modèle =====================// 

    public function getModele()
    {
        return $this->modele;
    }

    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

//===================== Nombre de portes =====================// 

    public function getNbPortes()
    {
        return $this->nbPortes;
    }

    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;

        return $this;
    }

//===================== Vitesse Actuelle =====================// 

    public function getVitesseActuelle()
    {
        return $this->vitesseActuelle;
    }

    public function setVitesseActuelle($vitesseActuelle)
    {
        $this->vitesseActuelle = $vitesseActuelle;
        if($this->$vitesseActuelle > 1) {
            $this->accelerer();
        } else {
            $this->stopper();
        }
        
        return $this;
    }

//===================== Demarrer =====================// 

    public function getestDemarrer()
    {
        return $this->estDemarre;
    }

    public function setestDemarrer($demarrer)
    {
        $this->estDemarre = $demarrer;

        return $this;
    }

//===================== Etat =====================// 

    public function getEtat() {
        if($this->estDemarre == true) {
            return "demarré";
        } else {
            return "est à l'arrêt";
        }
    }
    
//============= Méthodes démarrer/stopper/accélérer/ralentir =============// 
    
    public function demarrer() {
        $this->estDemarre = true;
        echo "La voiture ".$this." démarre<br><br>";

        return $this;
    }

    public function stopper() {
        $this->estDemarre = false;
        echo "La voiture ".$this." est stoppé<br><br>";

        return $this;
    }

    public function accelerer(int $vitesse) {
        $this->vitesseActuelle+=$vitesse;
        echo "La voiture ".$this." accélère de ".$this->vitesseActuelle." km / h<br><br>";

        if($this->estDemarre == false) {
            echo "Le véhicule veut accélérer de XX km / h <br> Pour accélérer, il faut démarrer le véhicule ".$this." ! <br>";
        } else {
            return;
        }


        return $this;
    }

    // public function ralentir($vitesse) {
        
    // }

    public function afficherInformations() {
        return "Infos véhicule ".$this->getIdVehicule()."<br>"."********************"."<br>"."Nom et modèle du véhicule : ".$this."<br>"."Nombre de portes : ".$this->getNbPortes()."<br>"."Le véhicule ".$this->getMarque()." est ".$this->getEtat()."<br>"."Sa vitesse actuelle est de : ".$this->getVitesseActuelle()." km / h"."<br><br>";
    }

    public function __toString() {
        return $this->marque." ".$this->modele;
    }

}