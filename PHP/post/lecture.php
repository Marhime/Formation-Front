<?php
$nom_fichier = 'names.txt';
$fichier = file($nom_fichier);

foreach($fichier as $informations)
{
echo $informations . '<br>';
}