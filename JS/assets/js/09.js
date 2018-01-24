/* -------------------------------------
              LES BOUCLES
---------------------------------------*/

// -- La Boucle FOR

for(let i = 0 ; i <= 10 ; i++){
    document.write('<p>Instruction executée : <strong>' + i + '</strong></p>')
}

document.write('<hr>');

var j = 1;
while(j <= 10){
    document.write('<p>Instruction executée : <strong>' + j + '</strong></p>')
    
    // -- ATTENTION A NE PAS OUBLIER L'INCREMENTATION!
    j++;
}
document.write('<hr>');
/* -------------------------------------
                EXERCICE
---------------------------------------*/

// -- Supposons le tableau suivant
var Prenoms = ['Jean', 'Marc', 'Matthieu', 'Luc', 'Pierre', 'Paul', 'Jacques', 'Hugo'];

/* -- CONSIGNE : Grâce à une boucle FOR ou WHILE, affichez la liste des prénoms
 * du tableau ci-dessus dans la console, ou sur votre page.
 */

for(let i = 0 ; i < Prenoms.length; i++){
    document.write('<p>Instruction executée : <strong>' + Prenoms[i] + '</strong></p>')
}
document.write('<hr>');

var j = 0;
while(j < Prenoms.length){
    document.write('<p>Instruction executée : <strong>' + Prenoms[j] + '</strong></p>')
    j++;
}
document.write('<hr>');

// -- La Boucle ForEach
// -- ATTENTION A LA PERFORMANCE !!!

Prenoms.forEach()