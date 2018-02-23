<?php
echo '<pre>'; print_r($_POST); echo '</pre>';

foreach($_POST as $indice => $valeur)
{
    echo $indice . ' : ' . $valeur . '<br>';

}

$myfile = fopen("names.txt", "a");

fwrite($myfile, 'Pseudo : ' . $_POST["pseudo"] . " - " . 'Email : ' . $_POST["email"] . "\r\n");

fclose($myfile);

// écriture dans un fichier crée dynamiquement
?>