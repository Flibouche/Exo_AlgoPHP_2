<h1>Exercice n°2</h1>

<table border=1>
    <!-- Entête du tableau -->
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>        
        </tr>
    </thead>
    <!-- Corps du tableau -->
    <tbody>
        <tr>
            <td>France</td>
            <td>Paris</td>
        </tr>
        <tr>
            <td>Allemagne</td>
            <td>Berlin</td>
        </tr>
        <tr>
            <td>USA</td>
            <td>Washington</td>
        </tr>
    </tbody>
</table>

<?php 

$capitales = [
    "France"=>"paris",
    "Allemagne"=>"berlin",
    "USA"=>"washington",
    "Italie"=>"rome"
];


// D'abord le nom du tableau ($capitales), ensuite le nom de la clé ($pays => $capitale)
foreach($capitales as $pays => $capitale) {
    echo "Le pays $pays a pour capitale : $capitale<br>";
}

function afficherTableHTML($capitales) {
    ksort($capitales); // ksort = trier le tableau dans l'ordre alphabétique (de A à Z) sur la clé. krsort pour trier mais reverse. asort pour trier alphabétiquement les capitales et arsort pour l'inverse.
    $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>        
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