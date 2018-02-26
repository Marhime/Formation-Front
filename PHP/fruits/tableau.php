<?php
/*
Exercice :
    1 - Déclarer un tableau ARRAY avec tout les fruits
    2 - Déclarer un tableau ARRAY avec les poids suivants : 100, 500, 1000, 1500, 2000, 3000, 5000, 10000
    3 - Afficher les 2 tableaux
    4 - Sortir le fruit "cerises" et le poids 500 en passant par vos tableaux pour transmettre à la fonction calcul et obtenir le prix
    5 - Sortir tous les prix pour les cerises avec tous les poids (indice : boucle)
    6 - Sortir tous les prix avec tous les poids (indice : boucle imbriquée)
    7 - Faire un affichage dans un tableau HTML pour une meilleur présentation
*/
require_once("fonction_inc.php");
$tab_fruits = array("cerises","pommes","oranges","bananes");
$tab_poids = array(100, 500, 1000, 1500, 2000, 3000, 5000, 10000);
echo '<pre>'; print_r($fruits); echo '</pre>'; echo '<br>';
echo '<pre>'; print_r($poids); echo '</pre>'; echo '<br>';
echo calcul($fruits[0], $poids[1]); echo '<br>';

foreach($tab_poids as $poids)
{
    echo calcul($tab_fruits[0], $poids);
    echo '<br>';
}

foreach($tab_fruits as $fruit)
{
    foreach($tab_poids as $poids)
{
    echo calcul($fruit, $poids);
    echo '<br>';
}
}

echo "<table border=1>";
echo '<th></th>';
foreach($tab_poids as $poids)
{
    echo '<th>' . $poids;
}
foreach($tab_fruits as $fruit)
{
    echo '<tr>';
    echo '<th>' . $fruit;
    foreach($tab_poids as $poids)
{
    echo '<td>' . calcul($fruit, $poids) . '</td>';
}
echo '</tr>';
}
echo '</tab>';

echo '<br><br><br>';
echo "<table border =1><tr>"; // µµµµµµµµµµµµµµµµµµµµµµµµµµµ     TABLEAU IMPORTANT A CONNAITRE
echo"<th>POIDS</th>";

foreach($tab_fruits as $indice_fruit => $fruit)
{
    echo "<th>$fruit</th>";
}
echo '</tr>';
foreach($tab_poids as $poids)
{
    echo '<tr>';
    echo "<th>$poids g </th>";
    foreach ($tab_fruits as $fruit)
{
    echo '<td>'. calcul ($fruit, $poids) . "</td>";

}
echo '<tr>';
}
echo '</table>';

?>