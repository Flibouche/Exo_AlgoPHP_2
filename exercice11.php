<?php

echo "<h1>Exercice n°11</h1>";

$date = new DateTime("2018-02-23");

function formaterDateFr($date) {
    $fmt = new IntlDateFormatter(
        'fr_FR', //locale
        IntlDateFormatter::FULL, // date
        IntlDateFormatter::NONE, // heure
        'Europe/Paris', // fuseau horaire
        IntlDateFormatter::GREGORIAN // type calendrier
    );
        
    echo 'La date affiché devrait être : ' . $fmt->format($date);
    return;
}

echo formaterDateFr($date);

?>