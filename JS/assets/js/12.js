/* ----------------------------------------------
                    LE DOM
-------------------------------------------------

Le DOM est une interface de développement en JS
pour HTML. Grâce au DOM, je vais être en mesure
d'accéder / modifier mon HTML.

L'objet "document" : c'est le point d'entrée
vers mon contenu HTML.

Chaque page chargée dans mon navigateur à un objet
"document".                

------------------------------------------------*/


/* Comment puis-je faire pour récuperer
*  les différentes informations de ma page HTML
*/

/* ----------------------------------------------
 ~ ~ ~ ~ ~ ~ document.getElementById ~ ~ ~ ~ ~ ~  
-------------------------------------------------

document.getElementById() est une fonction qui
va permettre de récuperer un élément HTML à
partir de son identifiant unique : ID.

-----------------------------------------------*/

var bonjour = document.getElementById('bonjour');
console.log(bonjour)

/* ----------------------------------------------
 ~ ~ ~ ~ document.getElementByClassName ~ ~ ~ ~ ~
-------------------------------------------------

document.getElementByClassName() est une fonction
qui va permettre de récuperer un ou plusieurs
élément (une liste) HTML à partir de leur class.

-----------------------------------------------*/

var bonjour = document.getElementsByClassName('contenu');
console.log(contenu)

/* Cette fonction me renvoit un tableau JS avec 
 mes éléments HTML (Collection HTML). */

/* ----------------------------------------------
 ~ ~ ~ ~ ~ document.getElementByTagName ~ ~ ~ ~ ~
-------------------------------------------------

document.getElementByTagName() est une fonction
qui va permettre de récuperer un ou plusieurs
élément (une liste) HTML à partir de leur * nom
de balise *.

-----------------------------------------------*/

var span = document.getElementsByTagName('span');
console.log(span)