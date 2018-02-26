<?php
/*
    Exercice:
    1 - Effectuer 4 liens HTML pointant sur la même page avec nom des fruits
    2 - faire en sorte d'envoyer "$fruit" dans l'URL si l'on clique sur le lien
    3 - Tenter d'afficher cerise sur la page web si l'on a cliqué dessus (si "cerise" est passé dans l'URL)
    4 - envoyer l'information à la fonction déclarée 'calcul()' afin d'afficher le prix pour 1kg de 'cerises'
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="fruit.php?fruit=cerises">Cerises</a>
    <a href="fruit.php?fruit=bananes">Bananes</a>
    <a href="fruit.php?fruit=pommes">Pommes</a>
    <a href="fruit.php?fruit=oranges">Oranges</a>
</body>
</html>