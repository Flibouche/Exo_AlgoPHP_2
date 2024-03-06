<?php

echo "<h1>Exercice n°10</h1>";

$nomsInput = [
    "Nom" => "text", 
    "Prénom" => "text",
    "Email" => "email",
    "Ville" => "text", 
];

$sexe = [
    "Homme",
    "Femme",
];

$intituleFormation = [
    "Développeur Logiciel",
    "Designer web",
    "Intégrateur",
    "Chef de projet"
];

function afficherInput($nomsInput) {
      $result = "";
  
      foreach ($nomsInput as $element => $type) {
        $result .= "<label for='$element'>$element&nbsp;:</label><br>
        <input type='$type' id='$element' name='$element' /><br>";
      }
      $result .= "<br>";
  
      return $result;
}

function radioSexe($sexe) {
    $result = "";

    foreach($sexe as $choix) {
        $result .= "<input type='radio' id='$choix' name='choix' value='$choix'/>
                    <label for='$choix'>$choix</label><br>";
    }

    return $result;
}
  
function deroulantFormation($intituleFormation) {  
    $result = "<label for='genre'>Sélectionnez votre intitulé de formation :</label><br>
                <select name='genre' id='genre'>";

    foreach($intituleFormation as $intitule) {
        $result .= "<option value='$intitule'>$intitule</option>";
    }

    $result .= "</select><br>";
    return $result;
}

function afficherFormulaire($nomsInput, $sexe, $intituleFormation) {
    $result = "<form action='#' method='POST'>";
        $result .= afficherInput($nomsInput);
        $result .= radioSexe($sexe);
        $result .= deroulantFormation($intituleFormation);
        $result .= "<input type='submit' name='submit' value='Envoyer'>";
    $result .= "</form>";
    return $result;
}

echo afficherFormulaire($nomsInput, $sexe, $intituleFormation);


?>