/* ------------------------------------
            LES CONDITIONS
--------------------------------------*/

//var MajoriteLegaleFR = 18;
//
//if(14 >= MajoriteLegaleFR) {
//    alert('Bienvenue !')
//}
//// -- Le else n'est pas OBLIGATOIRE...
//else {
//    alert('Google')
//}


/* -------------------------------------------------------------------------
                                EXERCICE 
Créer une fonction permettant de vérifier l'age d'un visiteur (prompt).
S'il a la majorité légale, alors je lui souhaite la bienvenue, 
sinon, je fait une redirection sur Google après lui avoir signalé le soucis.
---------------------------------------------------------------------------- */

var MajoriteLegaleFR = 18;
let age = prompt("Bonjour quel age as-tu?")
if(age >= MajoriteLegaleFR) {
    alert('Bienvenue !')
}
else {
    alert('Tu dégages sur Google !')
    document.location.href="https://google.fr"
}

/* ------------------------------------
            LA CORRECTION
--------------------------------------*/

// -- 1. Déclarer la Majorité Légale
var MajoriteLegaleFR = 18;

// -- 2. Créer une fonction pour demande son age.

function verifierAge(age) {
    if(age >= MajoriteLegaleFR) {
        return true;
    } else {
        return false;
    }
}

// -- 3. Je demande a l'utilisateur son age
var age = parseInt( prompt("Bonjour, Quel age avez-vous ?","<Saisissez votre Age>") );

// -- 4. Vérification de l'age de l'utilisateur...
if(verifierAge(age)) {
    // -- 4a. J'affiche un message de bienvenue
    alert("Bienvenue sur mon site internet réservé pour les majeurs...");
    document.write('0_0 !!!');
}
else {
    // -- 4b. J'effectue une redirectionù
    document.location.href = "http://fr.lmgtfy.com/?q=Majorit%C3%A9+L%C3%A9gale+en+France";
}


/* -------------------------------------------------------------------------
                    LES OPERATEURS DE COMPARAISON
                    
        L'opérateur de comparaison " == " signifie : Egal à.
        Il permet de vérifier si 2 variables sont identiques.
        
        L'opérateur de comparaison " === " signifie :
        Strictement Egal à. Il va comparer la valeur et le type.
        
        L'opérateur de comparaison " != " : Différent de.
        L'opérateur de comparaison " !== " : Strictement différent de.
        
---------------------------------------------------------------------------- */

/* -------------------------------
            EXERCICE :
J'arrive sur un Espace Sécurisé au moyen 
d'un email et d'un mot de passe.

Je doit saisir mon email et mon mot de passe afin d'être authentifié sur le site.

En cas d'échec une alert m'informe du problème.
Si tous se passe bien, un message de bienvenue m'accueil.
-------------------------------- */

// -- BASE DE DONNEES
var email, mdp;

email = "wf3@hl-media.fr";
mdp = "wf3";

var emailUtilisateur = prompt("Saississez votre email")
var mdpUtilisateur   = prompt("Saississez votre mdp")
if((emailUtilisateur === email) && (mdpUtilisateur === mdp)){
    alert("Bienvenue");
}
else{
    alert('PROBLEME')
}



