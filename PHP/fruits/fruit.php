<?php
require_once("fonction_inc.php");

foreach($_GET as $fruit)
{
    echo '<h1>' . $fruit . '</h1>';
    echo calcul($fruit, 1000);
}