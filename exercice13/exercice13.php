<?php

echo "<h1>Exercice n°12</h1>";

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

//===================== Marques =====================// 
$v1 = new Voiture(1, "Peugeot", "408", 5, 0,);
$v2 = new Voiture(2, "Citroën", "C4", 3, 0,);

echo $v1->afficherInformations();
echo $v2->afficherInformations();







?>