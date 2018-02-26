<h1>Votre langue :</h1>
<ul>
    <li><a href="?pays=fr">Français</a></li>
    <li><a href="?pays=es">Espagnol</a></li>
    <li><a href="?pays=de">Allemand</a></li>
    <li><a href="?pays=it">Italie</a></li>
</ul>

<?php
if(isset($_GET['pays'])) // si un pays est passé dans l'url c'est que nous avons cliqué sur un lien
{
    $pays = $_GET['pays']; // on stock l'info dans une variable
}
elseif(isset($_COOKIE['pays'])) // on ne rentre que dans le elseif uniquement si la condition if n'est pas passé et qu'un cookie existe
{
    $pays = $_COOKIE['pays'];
}
else // sinon cest la premiere visite sur le site
{
    $pays = 'fr';
}

// un cookie est sauvegardé sur le pc de l'internaute et on y mettra des informations d'importance mineur, des préférences, des traces de visite. Parce que le cookie est directement conservé sur le pc de l'internaute et qu'il peut se le faire voler, nous ne mettrons pas des informations importantes (type mot de passe)
//echo tiem();
$un_an = 365*24*3600; // cookie en seconde par an
setCookie("pays", $pays, time()+$un_an); // dans tous les cas un cookie est crée car ce morceau de code n'est pas dans une condition.
// setCookie() permet de créer un cookie . setCookie("nom", "valeur", "durée de vie").

switch($pays)
{
    case 'fr': echo "Bonjour beau gosse!";
    break;

    case 'de': echo "Allo Stück!";
    break;

    case 'es': echo "Hola muchacho!";
    break;

    case 'it': echo "Ciao bello!";
    break;
}