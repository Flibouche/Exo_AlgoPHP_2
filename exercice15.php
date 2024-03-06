<?php

echo "<h1>Exercice n°15</h1>";

$emails = [
    "elan@elan-formation.fr",
    "contact@elan",
    "contact@elan-formation.fr",
    "contact@formation"
];

echo verifMails($emails);

function verifMails(array $emails) {
    $result = "";
    foreach($emails as $email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result .= "L'adresse $email est une adresse e-mail valide.<br><br>";
        } else {
            $result .= "L'adresse $email n'est pas une adresse e-mail valide.<br><br>";
        }
    }
    return $result;
}