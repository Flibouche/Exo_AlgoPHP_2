<?php

echo "<h1>Exercice n°9</h1>";

$elements = [
    "Monsieur",
    "Madame",
    "Mademoiselle"
];

function afficherRadio($elements) {
    $result =
        "<form action='/exercice9.php'>";

    foreach($elements as $choix) {
        $result .= "<input type='radio' id='$choix' name='choix' value='$choix'/>
                    <label for='$choix'>$choix</label><br>";
    }

    $result .= "</form>";
    return $result;
}

echo afficherRadio($elements);

?>