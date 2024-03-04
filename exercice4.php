<h1>Exercice n°4</h1>

<?php 

$tableau =
[
    "Allemagne" => [
        "capitale" => "Berlin",
        "lien_wiki" => "https://fr.wikipedia.org/wiki/Berlin"
    ],
    "Espagne" => [
        "capitale" => "Madrid",
        "lien_wiki" => "https://fr.wikipedia.org/wiki/Madrid"
    ],
    "France" => [
        "capitale" => "Paris",
        "lien_wiki" => "https://fr.wikipedia.org/wiki/Paris"
    ],
    "Italie" => [
        "capitale" => "Rome",
        "lien_wiki" => "https://fr.wikipedia.org/wiki/Rome"
    ],
    "USA" => [
        "capitale" => "Washington",
        "lien_wiki" => "https://fr.wikipedia.org/wiki/Washington"
    ],
];

function afficherTableHTML($capitales) {
    asort($capitales);
    $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                        <th>Lien wiki</th>        
                    </tr>
                </thead>
            <tbody>";
    // Attention à la concaténation (notamment pour le lien hypertexte)
    foreach($capitales as $pays => $value) {
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>".ucfirst($value["capitale"])."</td>
                        <td><a href=".($value["lien_wiki"])." target='_blank'>Lien</a></td> 
                    </tr>";
    }

    $result .= "</tbody></table>";
    return $result;
}

echo afficherTableHTML($tableau);

?>

<?php

function afficherTableHTML2($capitales) {
    asort($capitales);
    $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                        <th>Lien wiki</th>        
                    </tr>
                </thead>
            <tbody>";
    // Attention à la concaténation (notamment pour le lien hypertexte)
    foreach($capitales as $pays => $value) {
        $capitaleUpper = ucfirst($value["capitale"]);
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>$capitaleUpper</td>
                        <td><a href='https://fr.wikipedia.org/wiki/$capitaleUpper' target='_blank'>Lien</a></td> 
                    </tr>";
    }

    $result .= "</tbody></table>";
    return $result;
}

echo afficherTableHTML2($tableau);