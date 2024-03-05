<?php

echo "<h1>Exercice n°5</h1>";

$nomsInput = [
  "Nom" => "text", 
  "Prénom" => "text", 
  "Ville" => "text", 
  "Email" => "email",
  "Date de naissance" => "date" 
];

function afficherInput($nomsInput){
    $result = "<form action='#' method='POST'>";

    foreach ($nomsInput as $element => $type) {
      $result .= "<label for='$element'>$element&nbsp;:</label><br>
      <input type='$type' id='$element' name='$element' /><br>";
    }
    $result .= "<input type='submit' name='submit' value='Envoyer'></form>";

    return $result;
}

echo afficherInput($nomsInput);

?>