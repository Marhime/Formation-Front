<?php
echo '<pre>'; print_r($_GET); echo '</pre>';

// afficher les données de chaque produit avec un affichage conventionnel
if($_GET)
{
    echo '<h1>Voici le détail du produit n° ' . $_GET['id_produit'] . ' :</h1>';

    foreach($_GET as $indice => $caracteristique)
    {
        if($indice != 'id_produit')
        {
            echo $indice . ' : ' . $caracteristique . ' <br> ';
        }
    }
}
?>