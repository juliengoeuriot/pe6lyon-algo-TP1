<?php

/*

FONCTION estBissextile(var annee)
DÉBUT
        1600 => bissextile
        1700 => PAS bissextile
        1704 => bissextile
        1705 => PAS bissextile
    SI annee divisible par 400 ALORS
        Renvoyer VRAI
    FINSI
    SI annee divisible par 100 ALORS
        Renvoyer FAUX
    FINSI
    SI annee divisible par 4 ALORS
        Renvoyer VRAI
    FINSI
    Renvoyer FAUX
FIN
*/

function estBissextile($annee)
{
    if (
        ($annee % 400) == 0
    ) {
        return true;
    }
    if (
        ($annee % 100) == 0
    ) {
         return false;
    }
    if (
        ($annee % 4) == 0) 
    {
        return true;
    }

    return false;
}

echo "Test de 1600 : ";
// var test <- estBissextile(1600)
$test = estBissextile(1600);
var_dump($test);
echo "Test de 1700 : ";
var_dump(estBissextile(1700));
echo "Test de 1704 : ";
var_dump(estBissextile(1704));
echo "Test de 1705 : ";
var_dump(estBissextile(1705));

/*FONCTION estValideJour(var annee, var mois, var jour)
DÉBUT
    SI jour < 1 ALORS
        Renvoyer FAUX
    FINSI
    SI (mois = 4
        OU mois = 6
        OU mois = 9
        OU mois = 11)
        ET jour <= 30 ALORS
        Renvoyer VRAI
    FINSI
    SI mois = 2 ALORS
        SI (estBissextile(annee) ET jour <= 29)
            OU jour <= 28 ALORS
            Renvoyer VRAI
        FINSI
    FINSI
    SI jour <= 31 ALORS
        Renvoyer VRAI
    FINSI
    Renvoyer FAUX
FIN*/

function estValideJour($annee, $mois, $jour)
{
    if ($jour < 1)
    {
        return false;
    }

    if (($mois == 4
        || $mois == 6
        || $mois == 9
        || $mois == 11)
        && $jour <= 30)

    {
        return true;
    }

    if ($mois == 2)
    {
        if (estBissextile($annee) && $jour <= 29)
        || ($jour <= 28) {
            return true;
        } else {
            return false;
        }
    }

    if ($jour <= 31)
    {
        return true;
    }

    
        return false;
    
}

echo "test 15/02/2022";
var_dump(estValideJour(2022, 02, 15));



