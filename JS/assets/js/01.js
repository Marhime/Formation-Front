// alert('Wsh ma caille!')

// Deux slash pour faire un commentaire uniligne.

/*
    Ici, sur plusieurs
    lignes je peux le faire

   RACCOURCI : CTRL + /
          ou : CTRL + SHIFT + /

 */

// -- 1 : Déclarer une variable en JS
var Prenom;

// -- 2 : Affecter une valeur
Prenom = "Maxime";

// -- 3 : Afficher la valeur de ma variable dans la console.
console.log(Prenom);

/*--------------------------------------------------
| ~ ~ ~ ~ ~ ~   LES TYPES DE VARIABLES   ~ ~ ~ ~ ~ |
-------------------------------------------------- */

// -- Ici, typeof me permet de connaitre le type de ma variable.
console.log(typeof Prenom);

// -- Déclaration d'un nombre
var Age = 40;

// -- Afficher dans la console
console.log(Age);

// -- Connaitre son type
console.log(typeof Age);



    /* ---------------------------------------------------------------------------------------------------\
    |                                       LA PORTÉE DES VARIABLES                                       |
    |                                                                                                     |
    |   Les variables déclarées directement à la racine du fichier JS sont appelés variables GLOBALES.    |
    |                                                                                                     |
    |   Elles sont disponibles dans l'ensemble de votre document, y compris dans les fonctions.           |
    |                                                                                                     |
    |   ###                                                                                               |
    |                                                                                                     |
    |                                                                                                     |
    |   Les variables déclarées à l'intérieur d'une fonction sont appelés variables LOCALES.              |
    |   ###                                                                                               |
    |                                                                                                     |
    |   Depuis ECMA 6; vous pouvez déclarer une variable avec le mot-clé "let".                           |
    |                                                                                                     |
    |   Votre variable sera alors accessible uniquement dans le bloc dans lequel, elle est contenu.       |
    |   Cad, déclaré.                                                                                     |
    |                                                                                                     |
    |   Si elle est déclarée dans une conditon, elle sera disponible uniquement dans le bloc de la        |
    |   condition                                                                                         |
    |                                                                                                     |
    | ----------------------------------------------------------------------------------------------------*/

// --- Les variables FLOAT
var uneDecimale = -2.984;
console.log(uneDecimale);
console.log(typeof uneDecimale);

// ** Les Booléens (VRAI / FAUX)
var  unBooleen = false; // true
console.log(unBooleen);
console.log(typeof unBooleen);

// -- Les constantes

/**
 * La déclaration CONST permet de créer une constante accessible
 * uniquement en lecture. Sa valeur ne pourra pas être modifiée par
 * des réaffectations ultérieures. Une constante ne peut pas être declarée
 * à nouveau..
 *
 * Généralement, par convention, les constantes sont en majuscules.
 */

 const HOST = "localhost";
 const USER = "root";
 const PASSWORD = "mysql";

 // -- Je ne peux pas faire cela...
// USER = "Hugo";
// Uncaught TypeError: Assignment to constant variable


/* ---------------------------------------------------------------------------------------------------\
|                                       LA MINUTE INFO                                                |
|                                                                                                     |
|                  Au fur et à mesure que l'on affecte ou ré-affecte des valeurs                      |
|                à une variable, celle-ci prend la nouvelle valeur et le nouveau type.                |
|                                                                                                     |
|                     En Javascript, (ECMA Script) ; Les variables sont auo-typées.                   |
|                                                                                                     |
|               Pour convertir une variable de type NUMBER en STRING et STRING en NUMBER              |
|                        je peux utiliser les fonctions natives de javascript                         |
| ----------------------------------------------------------------------------------------------------*/

var unNombre = "24";
console.log(unNombre);
console.log(typeof unNombre);

/*
* LA fonction parseInt() pour retourner un Entier
* à partir de la chaine de caractère.
*/
unNombre = parseInt(unNombre)
console.log(unNombre);
console.log(typeof unNombre);

// -- Je ré-affecte une valeur à ma variable
unNombre = "12.55";
console.log(unNombre);
console.log(typeof unNombre);



unNombre = parseFloat(unNombre)
console.log(unNombre);
console.log(typeof unNombre);

// -- Conversion d'un nombre en String avec toString()
unNombre = 10;
var maChaineDeCaractere = unNombre.toString();
console.log(typeof unNombre);
console.log(typeof maChaineDeCaractere);