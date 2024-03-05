<?php

echo "<h1>Exercice n°6</h1>";

$elements = [
    "Monsieur",
    "Madame",
    "Mademoiselle"
];

function alimenterListeDeroulante($elements) {
    $result = "<form action='/exercice6.php'>";   
    $result .= "<label for='genre'>Vous êtes :</label><br>
                <select name='genre' id='genre'>";

    foreach($elements as $genre) {
        $result .= "<option value='$genre'>$genre</option>";
    }

    $result .= "</select></form>";
    return $result;
}

echo alimenterListeDeroulante($elements);

?>