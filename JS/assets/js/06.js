/* ------------------------------------
            LES FONCTIONS
--------------------------------------*/

/** Déclarer une fonction
*   NB : Cette fonction ne retourne aucune valeur
*   et ne prend pas de paramètres
*/
function Bonjour() {
    /**
    * Lors de l'appel de cette fonction, les instructions ci-dessous
    * seront éxécutées...
    */
    alert('Bonjour !');
}
/**
* Je vais appeler ma fonction "Bonjour" et déclencher ses instructions.
*/
Bonjour();

function ditBonjour(Prenom, Nom) {
    document.write("<p>Bonjour <strong>" + Prenom + " " + Nom +"</strong> !</p>");
}

// -- Appeler / Utiliser une fonction avec des paramètres.
ditBonjour("Maxime", "Joyes");

/* -----------------------------------------------------------------------
    EXERCICE :
    Créez une fonction permettant d'effectuer l'addition de deux nombres
    passés en paramètre.
------------------------------------------------------------------------- */

function Addition(nb1, nb2) {
    return nb1 + nb2;
}

document.write("<p>" + Addition(10, 5) + "</p>");

/* -----------------------------------------------------------------------
    EXERCICE :
    Créez une fonction permettant d'effectuer l'addition de deux nombres
    passés en paramètre.
------------------------------------------------------------------------- */