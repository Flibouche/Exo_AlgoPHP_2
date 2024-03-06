<?php

class Voiture {

    protected string $marque; 
    protected string $modele;

    public function __construct(string $marque, string $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
    }

//===================== Marque =====================// 

    public function getMarque(): string 
    {
        return $this->marque;
    }

    public function setMarque(string $marque)
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

//===================== Infos =====================// 

    public function getInfos() {
        return $this;
    }

    public function __toString() {
        return $this->marque." ".$this->modele;
    }

}