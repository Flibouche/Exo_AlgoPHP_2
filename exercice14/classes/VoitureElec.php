<?php

class VoitureElec extends Voiture {

    private int $_autonomie;

    public function __construct(string $marque, string $modele, int $_autonomie) {
        parent::__construct($marque, $modele);
        $this->_autonomie = $_autonomie;
    }

//===================== Autonomie =====================// 

public function get_autonomie(): int
{
    return $this->_autonomie;
}

public function set_autonomie(int $_autonomie)
{
    $this->_autonomie = $_autonomie;

    return $this;
}

public function getInfos() {
    return parent::getInfos()." ".$this->get_autonomie();
}

}
