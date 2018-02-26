<?php
session_start(); // lorsque j'éffectue un session_start(), la session n'est pas recrée car elle existe déjà (grace au session_start() du fichier session1).
echo '<pre>'; print_r($_SESSION); echo '</pre>'; // affiche des informations contenu dans la session

/*
Les informations d'une session sont enregistrées dans la session côté serveur, cela crée (dans le même temps) un cookie précisement à l'identifiant de la session, sur le pc du client.
Il ne pourra pas être modifié par l'internaute car il s'agit d'un fichier enregistré directement dans le serveur.
Les sessions permettent d'avoir une connexion constante à un site, sans elle on ne pourrait pas naviguer sur le site, on serait constament déconnecter.
*/