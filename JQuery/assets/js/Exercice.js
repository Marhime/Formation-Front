


/* CONSIGNE : Avec l'aide de jQuery, vous devrez :
    
1. A la soumission du formulaire, cacher le formulaire puis :
2. Créer un élément <p>
3. Dans cet élément, afficher : Bonjour <nomcomplet> correspondant 
   au nom saisie dans le formulaire.

Intégration de la librairie jQuery */


$(function() {
    // $('#MonFormulaire').on('submit', function() {});
    $( "#MonFormulaire" ).submit(function( event ) {
        // -- Cette fonction anonyme sera executée à la soumission du formulaire.

        // -- Permet d'annuler l'action par défaut du submit (La redirection HTML)
        event.preventDefault();

        // -- Version Courte
        // -- $(this).replaceWith(' <p>Bonjour ' + $('#nomcomplet').val() + ' !</p>');

        // -- Version Longue
        $('#MonFormulaire').hide();

        // -- Exemple 1
        $('<p>').append('Bonjour ' + $("#nomcomplet").val() + ' !').appendTo($('body'));

        // -- Exemple 2
        $(' <p>Bonjour ' + $('#nomcomplet').val() + ' !</p>').appendTo($('body'));

        // -- Ma façon
        // -- $('body').append('p').html('Bonjour ' + $("#nomcomplet").val() + ' !');
      });
});