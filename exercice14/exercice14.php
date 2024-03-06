<?php

echo "<h1>Exercice n°14</h1>";

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

//===================== Marques =====================// 

$v1 = new Voiture ("Peugeot", "408");
$ve1 = new VoitureElec ("BMW","I3 150",100);

echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";

// var_dump($v1, $ve1);