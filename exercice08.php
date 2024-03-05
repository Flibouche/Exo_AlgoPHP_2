<?php

echo "<h1>Exercice n°8</h1>";

$url = "<img src='http://my.mobirise.com/data/userpic/764.jpg'>";


function repeterImage(string $url, int $nbRepetitions) {
    $resultat = "";
    foreach(range(1, $nbRepetitions) as $valeur) {
        $resultat .= $url;
    }
    
    return $resultat;
}

echo repeterImage($url, 4);

?>