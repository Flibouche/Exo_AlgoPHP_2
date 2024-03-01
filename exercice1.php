<?php

$texte = " Mon texte en paramètre ";

function convertirMajRouge(string $conversion)
{
    $texteMajRouge = mb_strtoupper($conversion);
    return "<font color ='red'>".$texteMajRouge."</font>";
    
}

echo convertirMajRouge($texte);