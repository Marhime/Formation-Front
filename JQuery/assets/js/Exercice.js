


/* CONSIGNE : Avec l'aide de jQuery, vous devrez :
    
1. A la soumission du formulaire, cacher le formulaire puis :
2. Créer un élément <p>
3. Dans cet élément, afficher : Bonjour <nomcomplet> correspondant 
   au nom saisie dans le formulaire.

Intégration de la librairie jQuery */


$(function() {
    $( "#MonFormulaire" ).submit(function( event ) {
        $('#MonFormulaire').hide(200000);
        event.preventDefault();
        $("body").append('p').html('Bonjour ' + $("#nomcomplet").val() + ' !');
      });
});