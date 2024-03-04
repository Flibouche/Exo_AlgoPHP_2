<?php

echo "<h1>Exercice n°7</h1>";

$elements = [
    "Choix 1" => "",
    "Choix 2" => "checked",
    "Choix 3" => ""
];

function genererCheckbox($elements) {
    $result =
        "<form action='/exercice7.php'>";

    foreach($elements as $choix => $check) {
        $result .= "<input type='checkbox' name='$choix' value='$choix' $check/>
                    <label for='.$choix'>$choix</label><br>";
    }

    $result .= "</form>";
    return $result;
}

echo genererCheckbox($elements);

?>