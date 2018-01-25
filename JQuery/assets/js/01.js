    /* --------------------------------------------------------------------------
                            ~ LA DISPONIBILITE DU DOM ~
        A partir du moment ou mon DOM, c'est à dire l'ensemble de l'arborescence
        de ma page HTML esy complètement chargé ; je peux commencer à utiliser
        JQuery.

        Je vais mettre l'ensemble de mon code dans une fonction, cette fonction
        sera appelée AUTOMATIQUEMENT !!! par JQuery lorsque le DOM sera
        entièrement défini.

        3 façon de faire :
    -------------------------------------------------------------------------- */


// JQuery(document).ready(function(){  
//     // -- Ici, le DOM est entièrement chargé, je peux procéder à mon code JS...
// });

// -- 2ème possibilité :
$(document).ready(function(){
    // -- Ici, le DOM est entièrement chargé, je peux procéder à mon code JS...
});

// -- 3ème possibilité :
$(function() {
    // -- Ici, le DOM est entièrement chargé, je peux procéder à mon code JS...
    alert('Bienvenue dans ce cours de JQuery !')

    // -- En JS :
    document.getElementById('TexteEnJquery').innerHTML = "<strong>Mon texte en JS</strong>";

    // -- JQ :
    // -- En JQuery, les sélecteurs sont les mêmes qu'en CSS !!!!
    $('#TexteEnJquery').html('Mon Texte en JQ');
});

// -- 4ème possibilité :
$(() => {
  
})