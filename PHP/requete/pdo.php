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

echo '<h2>05. PDO : QUERY - FETCHALL + FETCH_ASSOC</h2>';
$resultat = $pdo->query("SELECT * FROM employes");
$donnees = $resultat->fetchALL(PDO::FETCH_ASSOC);
echo '<pre>'; print_r($donnees); echo '</pre>';
// Exercice : afficher successivement les données de tous les employés à l'aide de boucle
foreach($donnees as $indice => $array)
{
    foreach($array as $info => $valeur)
    {
        echo "$info : <strong>$valeur</strong><br>";
    }
    echo '<hr>';
}

echo '<h2>06. PDO : QUERY - FETCH + BDD</h2>';
// Exercice : afficher la liste des bases de données, puis la mettre dans une liste ul li
$resultat = $pdo->query("SHOW DATABASES");
echo '<ul> Base de données :<hr>';
while($bdd = $resultat->fetch(PDO::FETCH_ASSOC))
{
    foreach($bdd as $array => $valeur)
    {
        echo "<li>$valeur</li>";
    }
}
echo '</ul>';

echo '<h2>07. PDO : QUERY - TABLE</h2>';
$resultat = $pdo->query("SELECT * FROM employes");

echo '<table border=20><tr>';
for($i = 0; $i < $resultat->columnCount(); $i++) // columnCount() est une méthode issu de la classe PDOStatement qui retourne le nombre de champs/colonnes de la table, tant qu'il y a des colonnes, on boucle
{
    $colonne = $resultat->getColumnMeta($i); // getColumnMeta() est une méhtode issu de la class PDOStatement qui récolte les informations des champs/colonnes de la table, pour chaque tour de boucle, $ colonne contient un tableau ARRAY avec les infos d'une colonne
    echo '<pre>'; print_r($colonne); echo '</pre>';
    echo '<td><strong>' . $colonne['name'] . '</strong></td>'; // on va crocheter à l'indice 'name' pour afficher le nom des colonnes
}
echo '</tr>';
while($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) // on associe la méthode fetch() au résultat, $ligne contient un tableau ARRAY avec les informations d'un employé à chaque tour de boucle
    {
        echo '<tr>'; // on crée une nouvelle ligne du tableau pour chaque employé
        foreach($ligne as $informations) // passe en revu le tableau ARRAY D4UN EMPLOY2
    {
        echo "<td>$informations</td>"; // on affichge successivement les valeurs dans des cellules !
    }
    echo '</tr>';
    }
echo '</table>';
// on peut associer 2 fois la même méthode sur le même résultat, on ne peux pas associer 2 fetch(PDO::FETCH_ASSOC) sur le même résultat


echo '<h2>08. PDO : PREPARE + BINDVALUE + EXECUTE</h2>';

$nom = "JOYES";
$resultat = $pdo->prepare('SELECT * FROM employes WHERE nom = :nom');
// Préparation de la requête :
// Soulage le serveur et la BDD à l'éxecution, previens pour les injections SQL et les failles XSS
// ':nom' est un marqueur nominatif, on prépare la requête mais on ne l'éxecute pas 

echo '<pre>'; print_r($resultat); echo '</pre>';
echo '<pre>'; print_r(get_class_methods($resultat)); echo '</pre>';

$resultat->bindValue(':nom', $nom, PDO::PARAM_STR); // bindValue() est une méthode permettant d'associer une valeur au marqueur ':nom' . nom du marqueur/valeur du marqueur/type de données  

$resultat->execute();// execution de la requête
// on formule la requête une seule fois à tout moment dans le script nous pouvons l'éxécuter

$donnees = $resultat->fetch(PDO::FETCH_ASSOC); // une fois exécuté, on associe une méthode pour rendre le résultat exploitable
echo '<pre>'; print_r($donnees); echo '</pre>';

// --------------------------------------------------------- 
$resultat->bindValue(':nom', 'Amadieu', PDO::PARAM_STR); // on associe une nouvelle valeur au marqueur

$resultat->execute(); // on éxecute la requête

$donnees = $resultat->fetch(PDO::FETCH_ASSOC); // une fois exécuté, on associe une méthode pour rendre le résultat exploitable
echo '<pre>'; print_r($donnees); echo '</pre>';