<h1>Exercice n°4</h1>

<?php 

$tableau =
[
    "Allemagne" => [
        "capitale" => "Berlin",
        "lien wiki" => "https://fr.wikipedia.org/wiki/Berlin"
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
    foreach($capitales as $pays => $value) {
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>".ucfirst($value["capitale"])."</td>
                        <td>".($value["lien wiki"])."</td>
                        <td>".a href="($value["lien wiki"])">Lien wiki</a>"</td>
                    </tr>";
    }

    $result .= "</tbody></table>";
    return $result;
}

echo afficherTableHTML($tableau);

?>