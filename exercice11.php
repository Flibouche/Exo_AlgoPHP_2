<?php

echo "<h1>Exercice n°11</h1>";

$date = new DateTime("2018-02-23");

function formaterDateFr($date) {
    $fmt = new IntlDateFormatter(
        'fr-FR',
        IntlDateFormatter::FULL,
        IntlDateFormatter::NONE,
        'Europe/Paris',
        IntlDateFormatter::GREGORIAN
    );
        
    echo 'La date affiché devrait être : ' . $fmt->format($date);
    return;
}

echo formaterDateFr($date);

?>