<h1>Exercice n°4</h1>

<?php 

$capitales = [
     "France"=>"paris"=>"lol",
    "Allemagne"=>"berlin",
    "USA"=>"washington",
    "Italie"=>"rome",
    "Espagne"=>"madrid"
];

function afficherTableHTML($capitales) {
    asort($capitales); // ksort = trier le tableau dans l'ordre alphabétique (de A à Z) sur la clé. krsort pour trier mais reverse. asort pour trier alphabétiquement les capitales et arsort pour l'inverse.
    $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                        <th>Lien wiki</th>        
                    </tr>
                </thead>
            <tbody>";
    foreach($capitales as $pays => $capitale) {
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>".ucfirst($capitale)."</td>
                    </tr>";
    }

    // .= rajouter du contenu à la variable
    // .= pour les string (chaine de caractère)
    // += pour les valeurs numériques (int/float)
    $result .= "</tbody></table>";
    return $result;
}

echo afficherTableHTML($capitales);

?>