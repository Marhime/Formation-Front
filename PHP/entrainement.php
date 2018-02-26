<style>
    h2{
        margin: 0;
        font-size: 15px;
        background: #dedede;
        text-align: center;
        padding: 10px;
    }
    .bleu{
        color: blue;
    }
    .blanc{
        color: white;
    }
    .rouge{
        color: red;
    }
</style>
<h2>Ecriture et affichage</h2>
<!-- Nous pouvons ecrire du HTML dans un fichier PHP, l'inverse n'est pas possible -->

<?php
echo 'Bonjour'; // echo est une instruction qui permet d'afficher sur la page
echo '<h3>Bonjour</h3>'; // on peut egalement mettre du HTML qui est bien interpreté
echo '<hr><h2>Commentaires</h2>';
?>
<strong>Bonjour</strong><!-- nous voyons qu'il est également possible de fermer et ré-ouvrir php mélanger du code HTML & PHP -->
<?= "Allo" ?> <!-- le = remplace le echo -->

<?php
echo 'texte'; # commentaire
echo 'texte'; /* comment-
aire */
echo 'texte'; // commentaire
print 'Nous sommes mercredi'; // print est une autre instruction d'affichage comme echo
// Vous n'êtes pas obligé de fermer la balise PHP si nous codons seulement du PHP.

// -----------------------------
echo '<hr><h2>Variables : Types / Déclaration / Affectation </h2>';
// une variable est un espace nommé permettant de conserver une valeur.
// on déclare toujours une variable avec le signe dollars '$' suivi du nom de la variable.
// ex : $a2 -> ok ------ $2a -> erreur, jamais de chiffre après le signe dollars, pas d'accent, pas d'espace.
$a = 127; // affectation de la valeur 127 dans la variable "a".
echo gettype($a); // gettype() est une fonction prédéfinie dans le code PHP permettant de voir le type d'une variable. Il s'agit ici d'une entier : integer.
echo '<br>';
$b = 1.5;
echo gettype($b); // un nombre à virgule : double.
echo '<br>';
$c = 'une chaîne';
echo gettype($c); // une chaine de caractère : string.
echo '<br>';
$d = '127';
echo gettype($d); // une chaine de caractère à cause des 'quotes' : string.
echo '<br>';
$e = true;
echo gettype($e); // boolean.
echo '<br>';
$f = false;
echo gettype($f); // boolean.
echo '<br>';

// -----------------------------
echo '<hr><h2>Concaténation </h2>';
$x = 'bonjour';
$y = ' tout le monde';
echo $x . $y . '<br>'; // point de concaténation que l'on peut traduire 'suivi de' +;
echo "$x $y <br>"; // entre guillemets les variables sont évaluées 
echo '$x $y <br>'; // entre quotes, c'est une chaine de caractère, les variables ne sont pas évaluées.
echo 'aujourd\'hui <br>'; // avec les simples quotes, si nous envoyons une de caractère avec un apostrophe, cela génère une erreur, nous sommes obligé de placer un antislash '\' pour préciser qu'il s'agit d"une apostrophe.
echo "aujourd'hui <br>";
echo "Hey ! " . $x . $y . "<br>"; // concaténation texte et variable
echo "Hey ! " , $x , $y , "<br>"; // concaténation avec une virgule

// -----------------------------
echo '<hr><h2>Concaténation lors de l\'affectation</h2>';
$prenom1 = "Maxime";
$prenom1 = "Elodie";
echo $prenom1 . '<br>'; // cela remplace Maxime par Elodie.

$prenom2 = "Maxime";
$prenom2 .= " Elodie";
echo $prenom2 . '<br>'; // cela ajoute Elodie sans remplacer la valeur Grégory grâce à l'opérateur '.='

// -----------------------------
echo '<hr><h2>Constante et constante magique</h2>';
// une constante tout comme une variable permet de conserver une valeur, mais comme son nom l'indique, est est CONSTANTE !! c'est à dire qu'on ne pourra PAS la MODIFIER dureant l"éxecution du script, contrairement à une variable, qui elle peut VARIER !!
define('CAPITALE', 'Paris'); // par convention une constante se déclare toujours en majuscule
echo CAPITALE . "<br>"; // affichage de la constante

// define('CAPITALE', 'Rome'); /!\ Erreur on ne peut pas modifier une constante.

// constante magique
echo __FILE__ . '<br>'; // chemin complet vers le fichier actuel
echo __LINE__ . '<br>'; // affiche le numéro de la ligne

// -----------------------------
// Exercice variables : afficher bleu-blanc-rouge (avec les tirets) en mettant chaque couleur dans une variable.
$bleu = '<span class="bleu">Bleu</span>';
$blanc = '<span class="blanc">Blanc</span>';
$rouge = '<span class="rouge">Rouge</span>';
echo $bleu . ' - ' . $blanc . ' - ' . $rouge . '<br>';
echo "$bleu - $blanc - $rouge";

// -----------------------------
echo '<hr><h2>Opérateurs arithmétiques</h2>';
$a = 10; $b = 2;
echo $a + $b . '<br>'; // affiche 12
echo $a - $b . '<br>'; // affiche 8
echo $a * $b . '<br>'; // affiche 20
echo $a / $b . '<br>'; // affiche 5

// opération/affectation
$a += $b; // équivaut à $a = $a + $b
echo $a . "<br>"; // affiche 12
$a -= $b; // équivaut à $a = $a - $b
echo $a . "<br>"; // affiche 10
$a *= $b; // équivaut à $a = $a * $b
echo $a . "<br>"; // affiche 20
$a /= $b; // équivaut à $a = $a / $b
echo $a . "<br>"; // affiche 10

// -----------------------------
echo '<hr><h2>Structure conditionnelle (if / else)</h2>';
// isset et empty
$var1 = 0;
$var2 = "121";

if(empty($var1))
{
    echo '0, vide ou non définie';
}
// empty test si une variable a la valeur '0', si elle est vide ou si elle n'est pas définie

if(isset($var2))
{
    echo '<br> $var2 existe mais est défini par rien <br>';
}
// isset test l'existence d'une variable, si elle existen si elle esr déclarée, si elle est définie
if(isset($var2) && !empty($var2))
{
    echo '$var2 existe est n\'est pas vide <br>';
}

// opérateur de comparaison
/*
=   est égal à / affectation
==  comparaison de la valeur
=== comparaison de la valeur et type
>   strictement supérieur
<   strictement inférieur
=>  supérieur ou égal
=<  inférieur ou égal
!=  différent de
!   n'est pas
&& AND et
|| OR ou
XOR exclusif
*/

$a = 10; $b = 5; $c = 2;
if($a > $b)
{
    echo "A est bien supérieur à B <br>";
} else {
    echo "non c'est B qui est supérieur à A <br>";
}
//--------------------------
if($a > $b && $b > $c)
{
    echo "OK pour les 2 conditions <br>";
}
if($a == 9 || $b > $c)
{
    echo "ok pour au moins une des 2 conditions <br>";
} else {
    echo "Nous sommes dans le else <br>";
}
//--------------------------
$a = 10; $b = 5; $c = 2;
if($a == 10)
{
    echo "1 - A est égal à 10 <br>";
}
elseif($b == 5)
{
    echo "2 - A est égal à 5 <br>";
}
else
{
    echo "3 - tout le monde a faux <br>";
}
// si la première condition est respectée, avec le elseif stop le script malgrés que la deuxieme condition soit respectée. On peut déclarer uen condition avec plusieurs elseif, en revanche il n'y a qu'un seul cas par d"faut "else"

// -----------------------------
// condition exclusive
if($a == 10 XOR $b == 6)
{
    echo "ok condition exclusive <br>"; // Il faut que l'une des 2 soit bonne. Si les 2 conditions sont bonnes ou si les 2 conditions sont mauvaises, nous ne rentrons pas ici.
}

//----------------------------- 
// forme contractée : 2ème possibilité d'écriture d'un if
echo ($a == 10) ? "A est égal à 10 <br>" : "A n'est pas égal à 10 <br>"; // le ? remplace le if et les 2 points ':' le else.

//----------------------------- 
// comparaison
$vara = 1;
$varb = "1";
if($vara === $varb){
    echo "il s'agit de la même chose <br>";
}
// Avec la présence du triple égal, la condition n'est pas respectée car les valeurs sont les mêmes mais les types sont différents.
// Avec le double égal, le test focntionne puisque les valeurs sont les mêmes.
// == comparaison de la valeur
// === comparaison de la valeur et du type

// -----------------------------
echo '<hr><h2>Condition switch</h2>';
$couleur = "jaune";
switch($couleur)
{
    case 'bleu':
    echo "Vous aimez le bleu";
    break; // permet de stopper le script

    case 'rouge':
    echo "Vous aimez le rouge";
    break;

    case 'vert':
    echo "Vous aimez le vert";
    break;

    default:
    echo "Vous n'aimez rien <br>";
    break;
}
// les case ici représente les différents cas dans lesquels nous pouvons potentiellement tomber, break stop l'éxecution du script si un des cas est vérifié
// Si aucun des cas n'est vérifié, nous tombons dans le cas par défaut "default"

// Exercice : pouvez vous faire la même chose que le switch avec des if/else

if($couleur == 'bleu'){
    echo "Vous aimez le bleu"; 
}
elseif($couleur == 'rouge'){
    echo "Vous aimez le rouge";
}
elseif($couleur == 'vert'){
    echo "Vous aimez le vert";
}
else{
    echo "Vous n'aimez rien";
}

// -----------------------------
echo '<hr><h2>Fonction prédéfinie : traitement des chaines</h2>';
// une fonction prédéfinie permet de réaliser un traitement spécifique
echo "Date: ";
echo date("d/m/y") . "<br>"; // exemple de fonction prédéfinie retournant la date du jour.
// toujours penser à consulter la documentation pour les paramêtres et savoir ce qu'elle retourne

//------------------------------
$email1 = "maxime.joyes@gmail.com";
echo strpos($email1, "@"); // retourner la position du caractère "@" dans la chaine de caractère
// strpos est une fonction prédéfinie permettant de trouver un caractère spécifique dans une chaine
/*
    arguments :
    1 - nous devons lui fournir la chaine dans laquelle nous souhaitons chercher
    2- nous lui dennons l'info à chercher
*/
echo '<br>';
$email2 = "bonjour";
echo strpos($email2, "@"); // cette ligne ne sort rien pourtant il y a bien quelque chose à l'intérieur : False
var_dump(strpos($email2, "@")); // Grace à var_dump on apercoit le FALSE si le caractère "@" n'est pas trouvé. var_dump est donc une instruction d'affichage améliorée, on l'utilise régulierement en phase de developpement. 

//------------------------------
echo '<br>';
$phrase = "Mettez du texte à cet endroit";
echo iconv_strlen($phrase);
/*
iconv_strlen() est une fonction prédéfinie permettant de retourner la taille d'une chaine
Succés : INT
Echec : boolean FALSE
Contexte : nous pourrons l'utiliser pour savoir si le pseudo et le mdp lors d'une inscription ont des tailles conformes.
*/

//------------------------------
echo '<br>';
$texte = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum asperiores repellendus suscipit praesentium ea, aut voluptates vitae iste eaque! Totam eum minus accusamus iusto ullam eveniet quisquam beatae magni mollitia.";
echo substr($texte, 0, 20) . "... <a href=''> Lire la suite </a>";
/*
    substr() est une fonction qui permet de retourner une partie de la chaîne
    arguments : 
    1- chaine à traiter
    2- position du depart
    3- position de fin 
    contexte : certains articles , on a une accroche puis un lien permettant de voir le reste de l'article
*/

// -----------------------------
echo '<hr><h2>Fonction utilisateur</h2>';
// Les fonctions qui ne sont prédéfinies dans le langage sont déclarés puis executé par l'utilisateur
function separation() // déclaration d'une fonction prévu pour ne pas recevoir d'arguments
{
    echo "<hr><hr><hr>"; // voici une simple fonction permettant de tirer 3 traits sur la page web
}
separation(); // éxecution de la fontion

// -----------------------------
// fonctions avec arguments

function bonjour($qui)
{
    echo "Bonjour $qui <br>";
}

bonjour("Maxime");

// -----------------------------
function joursemaine()
{
    $jour = "Jeudi";
    return $jour;
    echo 'ALLO';
}
echo joursemaine();
echo $jour; // /!\ ne fonctionne pas car cette variable n'est connu qu'à l'intérieur de la fonction

// -----------------------------
$pays = "France"; // variable déclarée dans l'espace global, cad à l'exterieur d'une fonction, c'est l'espace par défaut
function affichagePays()
{
    global $pays; // pour importer une variable déclarée en global vers l'espace local, nous devons utiliser le mot clé 'global'
    echo $pays;
}
affichagePays(); // execution de la fonction
// on ne peut pas déclarer 2 fois une fonction avec le meme nom.
echo '<br>';
// -----------------------------
function appliqueTva($nombre)
{
    return $nombre*1.2;
}
echo appliqueTva(650). " euros";
echo '<br>';
// Exercie : pourriez vous améliorer cette fonction afin que l'on puisse calculé un nombre avec le taux de notre choix
function appliqueTva1($nombre, $taux = 20) // argument initialisé par défaut à 20%
{
    return $nombre* (1+$taux/100);
}
echo appliqueTva1(650). " euros" . "<br>"; // $taux à une valeur par défaut il n'est pas nécessaire de lui envoyer un 2e argument
echo appliqueTva1(650, 7). " euros <br>"; // le deuxième argument écrase la valeur par défaut.

// -----------------------------
meteo("Hiver", -15);
function meteo($saison, $temperature)
{
    echo "Nous sommes en $saison et il fait $temperature degré(s) <br>";
}

// Exercice : gérer le S de degré avec des if/else
function exoMeteo($saison, $temperature)
{
    if($temperature > 1 || $temperature < -1)
    {       
        echo "Nous sommes en $saison et il fait $temperature degrés <br>";
    }
    else 
    {
        echo "Nous sommes en $saison et il fait $temperature degré <br>";
    }
}
exoMeteo("Été", 35);

// -----------------------------
echo '<hr><h2>Boucle : structure itérative</h2>';
$i = 0;
while($i < 3) // tant que la variable $i est inférieur à 3
{
    echo "$i---"; // pour chaque tour , on affiche $i + '---'
    $i++; // équivaut à $i = $i + 1; l'incrémentation du "compteur" est effectuée à chaque tour de boucle
}
echo "<br>";

// Exercice faites en sorte de ne pas avoir les tirets à la fin :
$i = 0;
while($i < 3)
{ 
    echo "$i---";
    $i++;
    
    if($i >= 2){
        echo "$i";
        break;
    }
    
}
echo "<br>";

$i = 0;
while($i < 3)
{     
    if($i == 2)
        echo "$i"; // je ne rentre qu'une seule fois ici
    else 
        echo "$i---";   
    $i++;
}
echo "<br>";
// quand il y a une seule instruction dans le if, else : les acolades sont facultatives

// -----------------------------
// boucle for
for($k = 0; $k < 16; $k++) // valeur de départ; condition d'entrée; incrémentation
{
    echo "$k ";
}
echo "<br>";
// Exercice : afficher 30 options via une boucle
echo "<select>";
for($k = 0; $k < 31; $k++)
{
    echo "<option>$k</option>";
}
echo "</select>";
echo "<br>";

// -----------------------------

// Exercice : Faites une boucle de 0 à 9 sur la même ligne dans un tableau HTML
$z = 0;
echo "<table border=1>";
for($ligne = 0; $ligne < 10; $ligne++)
{
    echo '<tr>';
    for($cellule = 0; $cellule <10; $cellule++) // tant que ligne est à zéro, cellule d'uncrémente 10 fois, ligne est à 1, cellule s'incrémente 10 fois etc ...
    {
        echo '<td>' . $z . '</td>'; // $z ne reviens jamais à 0 puisqu'on l'incrémente à chaque tour de boucle
        $z++;
    }
    echo '</tr>';
}
echo "</table>";
echo "<br>";

// -----------------------------
echo '<hr><h2>Boucle : tableau de données ARRAY</h2>';
$liste = array("Maxime","John","Andrei","Elodie");
echo $liste; // /!\ Attention erreur, on ne peut pas afficher les données d'un tableau avec une instruction d'affichage classique
echo '<pre>'; var_dump($liste); echo '</pre>';
echo '<pre>'; print_r($liste); echo '</pre>';
// var_dump et print_r sont des instructions d'affichage améliorées. pre est une balise HTML permettant de formater le texte, cela nous permet de mettre en forme la sortie du print_r
// contexte : lorsqu'on récupère des informations en BDD, nous les retrouverons sous forme d'ARRAY

// -----------------------------
echo '<hr><h2>Boucle : boucle foreach pour les tableaux ARRAY</h2>';
$tab[] = "France";
$tab[] = "Italie";
$tab[] = "Espagne";
$tab[] = "Allemagne";
$tab[] = "Portugal";
$tab[] = "Roumanie";
$tab[] = "Ukraine"; // autre moyen de déclarer un tableau ARRAY, à l'aide des crochets '[]'

echo '<pre>'; print_r($tab); echo '</pre>';

// Exercice : tenter de sortir "Italie" en passant par le tableau ARRAY sans faire un echo "italie"

echo $tab[1]; // on va crocheter à l'indice 1 du tableau de données ARRAY
echo "<br>";

foreach($tab as $info) // le mot AS fait parti du langage et est obligatoire. $info vient parcourir la colonne des valeurs du tableau de donnéees AARAY, pour chaque boucle, elle possede une valeur différente
{
    echo $info . "<br>"; // on affiche successivement les éléments du tableau
}

//-------------------------------
foreach($tab as $indice => $info)
{
    echo $indice . ' => ' . $info . '<br>'; // on affiche successivement l'indice en fonction de la valeur
}

$couleur = array("j" => "jaune", "r" => "rouge", "v" => "vert", "b" => "bleu"); // il est possible de définir les indices du tableau de donnée ARRAY
echo '<pre>'; print_r($couleur); echo '</pre>';

// Exercice : afficher successivement les données (indice, valeur) du tableau représenté par la variable $couleur
foreach($couleur as $indice => $valeur)
{
    echo $indice . ' => ' . $valeur . '<br>'; // on affiche successivement l'indice en fonction de la valeur
}

echo 'Taille du tableau : ' . count($couleur) . "<br>"; // affiche 4
echo 'Taille du tableau : ' . sizeof($couleur) . "<br>"; // sizeof est pareil que count pas de différence, se sont des focntions prédéfinies

echo implode("-", $couleur); // implode() rassemble les éléments d'un tableau en 1 chaine (séparé par un symbole à définir)

// -----------------------------
echo '<hr><h2>Tableaux de données ARRAY multidimensionnel</h2>';

$tab_multi = array(
    0 => array("prenom" => "Maxime", "nom" => "Joyes"),
    1 => array("prenom" => "Elodie", "nom" => "Amadieu")
);

echo '<pre>'; print_r($tab_multi); echo '</pre>';

// Exercice : tenter de sortir "Amadieu" en passant par les tableaux ARRAY et sans faire de echo "Amadieu"

echo $tab_multi[1]["nom"];
echo '<hr>';

// Exercice: toutes les valeurs des tableaux multi à l'aide de boucle

foreach($tab_multi as $indice1 => $tableau)
{
    foreach($tableau as $indice2 => $valeurs)
    {
        echo $valeurs . ' ';
    }
    echo '<hr>';
}

echo '<h2>Classe et objet</h2>';
// un objet est un autre type de donnée. Un peu à la manière d'un ARRAY, il permet de regrouper des inforamtions.
// cependant cela va beaucoup plus loin car on pezut y déclarer des variables (propriétés, attributs) mais aussi des fonctions (méthodes)

class Etudiant
{
    public $prenom  = "Maxime"; // public permet de préciser que l'élément sera visible partout (il y  a aussi protected et private)
    public $age     = 24; // déclaration d'une propriété public
    public function pays() // déclaration d'une fonction public
    {
        return "France";
    }
}

$objet = new Etudiant(); // new est un mot clé permettant d'instancier la classe et d'en faire un objet. c'est ce qui nous permet de le deployer afin que l'on puisse s'en servir. On se sert de ce qui est dans la classe via l'objet
echo '<pre>'; var_dump($objet); echo '</pre>'; echo '<br>';
echo $objet->prenom . '<br>'; // nous pouvons piocher dans un ARRAY avec les crochets, nous devons piocher dans un OBJET avec une fleche
echo $objet->age . '<br>';
echo $objet->pays() . '<br>'; // appel d'une méthode toujours avec une parenthèse