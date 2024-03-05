<?php

echo "<h1>Exercice n°12</h1>";

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

//===================== Marques =====================// 
$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);









?>