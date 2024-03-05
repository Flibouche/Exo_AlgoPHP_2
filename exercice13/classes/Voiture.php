<?php

class Voiture {

    private string $marque;
    private string $modele;
    private int $nbPortes;
    private int $vitesseActuelle;

    public function __construct(string $marque, string $modèle, int $nbPortes, int $vitesseActuelle) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = $vitesseActuelle;
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

    public function afficherInformations() {
        return $this."Nom et modèle du véhicule : ".$this->getModele()
    }


}