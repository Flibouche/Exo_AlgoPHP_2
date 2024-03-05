<?php

class Voiture {

    private int $idVehicule;
    private string $marque;
    private string $modele;
    private int $nbPortes;
    private int $vitesseActuelle;
    private bool $demarrer = false;
    
    private static $nbVoitures = 0;

    public function __construct(int $idVehicule, string $marque, string $modele, int $nbPortes, int $vitesseActuelle,) {
        self::$nbVoitures++;
        $this->idVehicule = self::$nbVoitures;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = $vitesseActuelle;
    }

    public function getIdVehicule()
    {
        return $this->idVehicule;
    }

    public function setIdVehicule($idVehicule)
    {
        $this->idVehicule = $idVehicule;

        return $this;
    }
    
    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    public function getNbPortes()
    {
        return $this->nbPortes;
    }

    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;

        return $this;
    }

    public function getVitesseActuelle()
    {
        return $this->vitesseActuelle;
    }

    public function setVitesseActuelle($vitesseActuelle)
    {
        $this->vitesseActuelle = $vitesseActuelle;
        
        return $this;
    }
    
    public function demarrer(int $vitesse) {
        if($vitesseActuelle > 1) {
            $this->demarrer = true;
            echo "demarré";
        }

        return $this;
    }

    public function stopper(int $vitesse) {
        if($vitesseActuelle == 0) {
            $this->demarrer = false;
            echo "à l'arrêt";
        }

        return $this;
    }

    public function accelerer(int $vitesse) {
        $this->accelerer(50);

        return $this;
    }

    // public function ralentir($vitesse) {
        
    // }

    public function afficherInformations() {
        return "Infos véhicule ".$this->getIdVehicule()."<br>"."********************"."<br>"."Nom et modèle du véhicule : ".$this."<br>"."Nombre de portes : ".$this->getNbPortes()."<br>"."Le véhicule ".$this->getMarque()." est ".demarrer()."<br>"."Sa vitesse actuelle est de : ".$this->getVitesseActuelle()." km / h"."<br><br>";
    }

    public function __toString() {
        return $this->marque." ".$this->modele;
    }

}