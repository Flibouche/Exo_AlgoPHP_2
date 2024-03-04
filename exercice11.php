<?php

echo "<h1>Exercice n°11</h1>";

setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set('Europe/Paris');

$date = new DateTime("");

function formaterDateFr(string $date) {
    echo $date->format('l d F o');

    return $date;
}

echo formaterDateFr("2024-03-24");


?>