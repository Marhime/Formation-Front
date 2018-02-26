<?php
echo '<h2>01. PDO : Connexion BDD </h2>';
$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
// arguments : 1(serveur + bdd), 2(identifiant), 3 (mdp), 4(options)
// PDO est une classe prédéfinie en PHP permettant de se connecter à une base de données. Cette classe possède ses propres propriétés et méthodes

echo '<pre>'; var_dump($pdo); echo '</pre>';
// $pdo représente un objet issu de la classe PDO permettant d'être connecté à la BDD et de pouvoir formuler des requêtes SQL.

echo '<pre>'; print_r(get_class_methods($pdo)); echo '</pre>';
// get_class_methods est une focntion prédéfinie permettant d'afficher les méthodes issu de la classe PDO via l'obhet

echo '<h2>02. PDO : EXEC - INSERT, UPDATE, DELETE</h2>';
// Formuler une requete vous permettant de vous insérer dans la table employé
//INSERT
// $resultat = $pdo->exec("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire)VALUES('Maxime', 'JOYES', 'm', 'informatique', '2018-02-26', 3600)");
// echo "Nombre d'enregistrement affecté par l'INSERT : $resultat";

// UPDATE
// modification du salaire de l'employé 350 par 1200
$resultat = $pdo->exec("UPDATE employes SET salaire = 1200 WHERE id_employes = 350");
echo "Nombre d'enregistrement affecté par l'UPDATE : $resultat <br>";

// DELETE
// Exercice : réaliser le script permettant de supprimer l'employé 350
$resultat = $pdo->exec("DELETE FROM employes WHERE id_employes= 350");
echo "Nombre d'enregistrement affecté par le DELETE : $resultat <br>";

/*
EXEC() est une méthode issue de la classe PDO permettant  de formuler et d'éxecuter des requêtes SQL
exec() est utilisé pour la formulation de requêtes ne retournant pas de résultat
exec() renvoit le nombre de lignes affecté par la requête
*/

echo '<h2>03. PDO : QUERY - SELECT - FETCH_ASSOC (1 seul résultat)</h2>';
$resultat = $pdo->query("SELECT * FROM employes WHERE id_employes = 991");
// Lorsqu'on éxecute une requête SELECT via la méthode query sur l'objet PDO :
// Succés : on obtient un autre objet issu d'une autre class PDOStatement. Cet objet a donc des méthodes et propriétés différentes !!! 
// Echec : boolean FALSE
// $ resultat est inexploitable en l'état, nous devons lui associer une méthode, fetch(PDO::FETCH_ASSOC) qui permet de rendre le résultat exploitable sous forme de tableau ARRAY
echo '<pre>' . var_dump($resultat) . '</pre>';
echo '<pre>'; print_r(get_class_methods($resultat)); echo '</pre>';

$employe = $resultat->fetch(PDO::FETCH_ASSOC); // pour un tableau indexé avec le nom des champs
// $employe = $resultat->fetch(PDO::FETCH_BOTH); // index à la fois numériquement et avec le nom des champs
// $employe = $resultat->fetch(PDO::FETCH_OBJ); // retourne un objet avec le nom des champs comme propriété public, on va pointer avec la flêche (->) pour afficher la valeur de la propriété
echo '<pre>'; print_r($employe); echo '</pre>';

// Exercice afficher les données à l'aide d'un affichage conventionnel
foreach($employe as $indice => $valeur)
{
    echo "$indice : <strong>$valeur</strong> <br>";
}

echo '<h2>04. PDO : QUERY - WHILE + FETCH_ASSOC (plusieurs résultats)</h2>';

$resultat = $pdo->query("SELECT * FROM employes");
// echo '<pre>'; print_r($resultat); echo '</pre>';
echo 'Nombre d\'employé(s) :' . $resultat->rowCount() . '<br>'; // rowCount() est une méthode issue de la class PDOStatement qui permet de compter le nombre de ligne retournées par la requête SELECT

while($contenu = $resultat->fetch(PDO::FETCH_ASSOC)) // pour chaque tour de boucle WHILE, la variable $contenu contient un tableau ARRAY par employé, tant qu'il y a des employés la boucle continue de tourner
{
    // echo '<pre>'; print_r($contenu); echo '</pre>';
    foreach($contenu as $indice => $valeur)
    {
        echo "$indice : $valeur <br>";
    }
    echo '<hr>';
}

// Attention, il n'y a pas un tableau avec les enregistrements dedans mais un tableau ARRAY par enregistrement, un ARRAY par employé !!! 
// votre requête sort plusieurs résultat ? : UNE BOUCLE !!! 
// votre requete ne doit sortir qu'un seul et unique résultat ? : pas de boucle
// votre requête ne sort qu'un seul résultat et peu potentiellement en sortir plusieurs ? : UNE BOUCLE !!! 

echo '<h2>04. PDO : QUERY - FETCHALL + FETCH_ASSOC</h2>';
$resultat = $pdo->query("SELECT * FROM employes");
$donnees = $resultat->fetchALL(PDO::FETCH_ASSOC);
// echo '<pre>'; print_r($donnees); echo '</pre>';
// Exercice : afficher successivement les données de tous les employés à l'aide de boucle