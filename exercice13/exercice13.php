<?php

echo "<h1>Exercice n°13</h1>";

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

//===================== Marques =====================// 
$v1 = new Voiture(1, "Peugeot", "408", 5);
$v2 = new Voiture(2, "Citroën", "C4", 3);

$v1->demarrer();
$v1->accelerer(50);

$v2->demarrer();
$v2->stopper();
$v2->accelerer(20);

echo $v1->getVitesseActuelle();
echo $v2->getVitesseActuelle();


echo "<br>";

echo $v1->afficherInformations();
echo $v2->afficherInformations();



?>