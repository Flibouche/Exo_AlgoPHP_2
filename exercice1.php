<?php

echo "<h1>Exercice n°1</h1>";

$texte = " Mon texte en paramètre ";

function convertirMajRouge(string $conversion)
{
    $texteMajRouge = mb_strtoupper($conversion);
    return "<font color ='red'>".$texteMajRouge."</font>";
    
}

echo convertirMajRouge($texte);