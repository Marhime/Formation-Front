// -- Initialisation de jQuery
$(() => {


    // -- J'écoute à quel moment les valeurs de mon formulaires changent
    $('#formulaire').on('change', e => {

        // -- Supprimer les différentes erreurs
            $('#formulaire .has-error').removeClass('has-error');
            $('#formulaire .text-danger').remove();
    
    });

    // -- J'écoute à quel moment le formulaire est soumis
    $('#formulaire').on('submit', e => {

        // -- Neutraliser la redirection HTML5
        e.preventDefault();

        // Supprimer les erreurs
        $('#formulaire .has-error').removeClass('has-error');
        $('#formulaire .text-danger').remove();

        // -- Déclarer les variables à vérifier
        var select     = $('#select');
        var message    = $('#message');

        // -- Vérification de chaque champ

            // -- 1. Vérification du sélecteur de chat
            if(select.val() == 0) {
                select.parent().addClass('has-error');
                $('<p class="text-danger">N\'oubliez de sélectionner un chat</p>').appendTo(select.parent());
            } else {
                select.parent().addClass('has-success');
            };

            // -- 2. Vérification du message
            if(message.val().length < 15) {
                message.parent().addClass('has-error');
                $('<p class="text-danger">Ce champs doit comporter 15 caractères.</p>').appendTo(message.parent());
            } else {
                message.parent().addClass('has-success');
            };

            // -- 3. Je check si le formulaire est valide
            if($('#formulaire').find('.has-error').length === 0) {

                $('#formulaire').replaceWith(`
                    <div class="alert alert-success">
                        Félicitations vous avez adopté un chat !
                        Vous le recevrez dans 30 minutes !
                    </div>
                `);

            }; // Fin de if

    }); // Fin de l'écoute

}); // Fin de jQuery