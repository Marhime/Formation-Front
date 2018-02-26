<h1>les SESSIONS</h1>
<?php
session_start(); // permet de créer un fichier session ou de l'ouvrir s'il existe deja
$_SESSION['pseudo'] = "marhime"; // la présence de crochets rappel l'utilisation de tableau ARRAY, dans le fichier session représenté par la superglob $_SESSION, on définit un indice 'pseudo' auquel on affecte la valeur 'marhime'
$_SESSION['prenom'] = "Maxime";
$_SESSION['nom'] = "JOYES";
//unset($_SESSION['nom']); // unset permet de vider une partie de la session

//session_destroy(); // permet de supprimer la session

echo '<pre>'; print_r($_SESSION); echo '</pre>';
