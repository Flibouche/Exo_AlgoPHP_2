<?php

echo "<h1>Exercice n°12</h1>";

$tableauValeurs =
[
    true,
    "texte",
    10,25.369,
    [
        "valeur1",
        "valeur2"
    ]
];

function afficherValeurs($tableauValeurs) {
    foreach($tableauValeurs as $valeurs) {
        $result = var_dump($valeurs);
        echo "<br>";
    }

    return $result;
}

echo afficherValeurs($tableauValeurs);

?>