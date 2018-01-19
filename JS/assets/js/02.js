// -- Déclarer un Tableau Numérique
var monTableau = [];
var MyArray    = new Array;

monTableau[0] = "Adeline";
monTableau[1] = "Hugo";
monTableau[2] = "Arnaud";

console.log(monTableau); // -- Affiche ttes les données.
console.log(monTableau[0]); // -- Adeline
console.log(monTableau[2]); // -- Arnaud

var NosPrenoms = ["Hana", "John", "Maxime", "Adnane", "Jonathan"];
console.log(NosPrenoms);

// -- Déclarer et Affecter des Valeurs à un Objet.
// ⛔ PAS DE TABLEAU ASSOCIATIF EN JAVASCRIPT ⛔

var Coordonnee = {
    prenom : "Hugo",
    nom    : "LIEGEARD",
    age    : 28
};

console.log(Coordonnee);
console.log(Coordonnee['prenom']);
console.log(Coordonnee.nom);

// -- Je vais créer 2 tableaux numériques
var listeDePrenoms = ["Maxime", "Lionel", "Elodie"];
var listeDeNoms    = ["JOYES", "NOEL", "AMADIEU"];

// -- Je vais créer un tableau à 2 dimensions à partir de mes 2 tableaux.
var Annuaire = [ listeDePrenoms, listeDeNoms ];

// -- Afficher un Nom et un Prenom sur ma Page HTML !
document.write( Annuaire[0][1] );
document.write( ' ' );
document.write( Annuaire[1][1] );


/* ---------------------------------------------------------------------------------------------------\
|                                            EXERCICE                                                 |
|                                                                                                     |
|                  Créez un Tableau à 2 dimensions appelé "AnnuaireDesStagiaires" qui                 |
|                contiendra toutes les données pour chaque stagiaire.                                 |
|                                                                                                     |
|                                                                                                     |
| ----------------------------------------------------------------------------------------------------*/



var nomsStagiaires      = ["Joyes", "Amadieu", "Noel"];
var prenomsStagiaires   = ["Maxime", "Elodie", "Lionel"];
var telStagiaire        = ['0658211366', '0657221477', '0669459436'];

var AnnuaireDesStagiaires = [nomsStagiaires, prenomsStagiaires, telStagiaire];
console.log(AnnuaireDesStagiaires);

/* ---------------------------------------------------------------------------------------------------\
|                                           AJOUTER UN ELEMENT                                        |
|                                                                                                     |
| ----------------------------------------------------------------------------------------------------*/

var Couleurs = ['Rouge', 'Jaune', 'Vert'];

// -- Si je souhaite ajouter un élément dans mon tableau
// -- Je fais appel à la fonction push() qui me renvoit le nombre d'éléments.
console.log(Couleurs);
var nombreElementsDeMonTableau = Couleurs.push('Orange');
console.log(Couleurs);
console.log(nombreElementsDeMonTableau);

// -- NB : La fonction unshift() permet d'ajouter un ou plusieurs éléments en début de tableau.

/* ---------------------------------------------------------------------------------------------------\
|                                   RECUPERER ET SORTIR LE DERNIER ELEMENT                            |
|                                                                                                     |
| ----------------------------------------------------------------------------------------------------*/

/* La fonction pop() me permet de supprimer un ou plusieurs éléments de mon tableau et d'en récupérer la valeur.
Je peux accessoirement récuperer cette valeur dans une variable. */


var monDernierElement = Couleurs.pop();
console.log(Couleurs);
console.log(monDernierElement);

// -- La même chose est possible avec le premier élément en utilisant la fonction shift();
// -- NB: La fonction splice() vous permet de faire sortir un ou plusieurs éléments de votre tableau.












