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
      $result = "<form action='#' method='POST'>";
  
      foreach ($nomsInput as $element => $type) {
        $result .= "<label for='$element'>$element&nbsp;:</label><br>
        <input type='$type' id='$element' name='$element' /><br>";
      }
      $result .= "<br>"."</form>";
  
      return $result;
}

function radioSexe($sexe) {
    $result =
        "<form action='/exercice10.php'>";

    foreach($sexe as $choix) {
        $result .= "<input type='radio' id='$choix' name='choix' value='$choix'/>
                    <label for='$choix'>$choix</label><br>";
    }

    $result .= "</form>";
    return $result;
}
  
function deroulantFormation($intituleFormation) {
    $result = "<form action='/exercice6.php'>";   
    $result .= "<label for='genre'>Sélectionnez votre intitulé de formation :</label><br>
                <select name='genre' id='genre'>";

    foreach($intituleFormation as $intitule) {
        $result .= "<option value='$intitule'>$intitule</option>";
    }

    $result .= "</select></form>";
    return $result;
}

function afficherFormulaire($nomsInput, $sexe, $intituleFormation) {
    echo afficherInput($nomsInput);
    echo radioSexe($sexe);
    echo deroulantFormation($intituleFormation);
    
    return;
}

echo afficherFormulaire($nomsInput, $sexe, $intituleFormation);
echo "<input type='submit' name='submit' value='Envoyer'>";

?>