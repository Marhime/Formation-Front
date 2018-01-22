/* --
    Votre mission, que vous devez accepter !
    Réaliser une fonction permettant à un internaute de :
        - Saisir son Prénom dans un Prompt
        - Retourner à l'Utilisateur : Bonjour [PRENOM], Quel age as-tu ?
        - Saisir son Age
        - Retourner à l'Utilisateur : Tu est donc né en [ANNEE DE NAISSANCE].
        - Afficher ensuite un récapitulatif dans la page.
        Bonjour [PRENOM], tu as [AGE] ! 
-- */

var currentTime = new Date();
var year        = currentTime.getFullYear();
var prenom      = prompt("Quel est votre prénom ?");
var age         = prompt("Bonjour " + prenom + ", Quel age as-tu ?");
var annee       = alert("Tu es donc né en " + (year - age));
function PrenomAge(){
    resultat = window.prompt(texte);
    
    
    resultat = window.age(valeur);
    resultat = window.annee(valeur);
}
document.write("Bonjour " + prenom + ", tu as " + age + " !");



/* ------------------------------------
            CORRECTION
--------------------------------------*/


// -- 1. Initialisation des variables
var dateObj         = new Date();
var anneeActuelle   = dateObj.getFullYear();

// -- 2. Création d'une fonction
function Hello() {

    // 2a. Je demande à l'utilisateur son prénom
    let prenom = prompt("Hello ! What is your name ?","<Saisir votre Prénom>");
    console.log(prenom);
    console.log(typeof prenom);

    // 2b. Je lui demande son age
    let age = prompt("Hello " + prenom + " ! How old are you ?","<Saisir votre Age>");
    console.log(age);
    console.log(typeof age);

    // 2c. Déduire l'année de naissance et l'afficher dans une alerte
    alert('AMAZING ! So were born in ' + ( anneeActuelle - age )  + " !")

    // 2d. Affiche tout ça dans la page (Récapitulatif)
    document.write("Hello " + prenom + " it's AMAZING ! you're " + age + " years old !");
}

// 3. L'Execution de la Fonction
Hello();
