<?php

function debug ($var, $mode = 1)
{
    echo '<div style = "background: orange; padding:5px;">';
    $_trace = debug_backtrace(); // fonction prédéfinie retourne un ARRAY contenant des infos telle que la ligne et le fichier où est exécuté la fonction.
    // echo '<pre>'; print_r($_trace); echo '</pre>';
    $_trace = array_shift($_trace);
    // echo '<pre>'; print_r($_trace); echo '</pre>';
    echo "Debug demandé dans le fichier : $_trace[file] à la ligne $_trace[line]. <hr>";
    
    if($mode === 1)
    {
        echo '<pre>'; print_r($var); echo '</pre>';
    }
    else
    {
        echo '<pre>'; var_dump($var); echo '</pre>';
    }
    echo '</div>';
}
// debug();

//----------------------------
function internauteEstConnecte()
{
    if(!isset($_SESSION['membre']))
    {
        return false;
    }
    else
    {
        return true;
    }

}

//----------------------------
function internauteEstConnecteEtEstAdmin()
{
    if(internauteEstConnecte() && $_SESSION['membre']['statut'] == 1) // si la session du membre est définie et que son statut est égal à 1, cela veut dire qu'il est admin, on retourne true
    {
        return true;
    }
    else
    {
        return false;
    }
}
?>