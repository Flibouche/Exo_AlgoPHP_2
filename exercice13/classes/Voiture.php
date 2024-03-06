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

    public function getIdVehicule(): int
    {
        return $this->idVehicule;
    }

    public function setIdVehicule($idVehicule)
    {
        $this->idVehicule = $idVehicule;

        return $this;
    }
    
//===================== Marque =====================// 

    public function getMarque(): string
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

    public function setNbPortes(int $nbPortes)
    {
        $this->nbPortes = $nbPortes;

        return $this;
    }

//===================== Vitesse Actuelle =====================// 

    public function getVitesseActuelle()
    {
        echo "La vitesse actuelle du véhicule est de : ";
        return $this->vitesseActuelle." km / h <br>";
    }

    public function setVitesseActuelle(int $vitesseActuelle)
    {
        $this->vitesseActuelle = $vitesseActuelle;
        
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
        if($this->estDemarre) {
            return "demarré";
        } else {
            return "est à l'arrêt";
        }
    }
    
//============= Méthodes démarrer/stopper/accélérer/ralentir =============// 
    
    public function demarrer() {
        $this->estDemarre = true;
        echo "La voiture ".$this." démarre<br>";

        return $this;
    }

    public function stopper() {
        $this->estDemarre = false;
        $this->vitesseActuelle = 0;
        echo "La voiture ".$this." est stoppé<br>";

        return $this;
    }

    public function accelerer(int $vitesse) {
        if(!$this->estDemarre) {
            echo "Le véhicule veut accélérer de $vitesse km / h <br>
            Pour accélérer, il faut démarrer le véhicule $this ! <br>";
        } else {
            $this->vitesseActuelle += $vitesse;
            echo "La voiture $this accélère de $this->vitesseActuelle km / h <br>";
        }
        
        return $this;
    }
    
    public function ralentir(int $vitesse) {
        if(!$this->estDemarre) {
            echo "Le véhicule veut ralentir de $vitesse km / h <br> Pour ralentir, il faut démarrer le véhicule $this ! <br>";
        } else {
            $this->vitesseActuelle -= $vitesse;
            echo "La voiture $this ralenti de $this->vitesseActuelle km / h<br>";
        }
        
        return $this;
    }

    public function afficherInformations() {
        return "Infos véhicule $this->idVehicule<br>
            ********************<br>
            Nom et modèle du véhicule : $this <br>
            Nombre de portes : $this->nbPortes <br>
            Le véhicule $this->marque est ".$this->getEtat()."<br>
            Sa vitesse actuelle est de : $this->vitesseActuelle km / h <br><br>";
    }

    public function __toString() {
        return $this->marque." ".$this->modele;
    }

}