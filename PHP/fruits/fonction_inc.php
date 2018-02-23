<?php
function calcul($fruit, $poids)
{
    switch($fruit)
    {
        case 'cerises' : $prix_kg = 5.76; break;
        case 'bananes' : $prix_kg = 1.75; break;
        case 'pommes' : $prix_kg = 4.52; break;
        case 'oranges' : $prix_kg = 3.10; break;
        default: return "fruit inexistant <br>"; break;
    }
    $resultat = round(($poids*$prix_kg/1000), 2); // prix au gramme
    return "Les $fruit coutent $resultat Euros pour $poids grammes <br>";
}

// echo calcul('cerises', 30);
// echo calcul('bananes', 500);
// echo calcul('clementines', 600);
// echo calcul('oranges', 340);