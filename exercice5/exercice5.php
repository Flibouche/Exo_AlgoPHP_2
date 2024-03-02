<?php

echo "<h1>Exercice n°5</h1>";

$nomsInput = ["Nom", "Prénom", "Ville"];


function afficherInput($nomsInput){
    $result = "<form action="/ma-page-de-traitement" method="post">
    <ul>
      <li>
        <label for="name">Nom&nbsp;:</label>
        <input type="text" id="name" name="user_name" />
      </li>
      <li>
        <label for="mail">E-mail&nbsp;:</label>
        <input type="email" id="mail" name="user_mail" />
      </li>
      <li>
        <label for="msg">Message&nbsp;:</label>
        <textarea id="msg" name="user_message"></textarea>
      </li>
    </ul>
  </form>
  "
    // $nom = $_POST["Nom"];
    
    // $prenom = $_POST["Prénom"];

    return $result;
}

echo afficherInput($nomsInput);