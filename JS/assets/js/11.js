/* --
    CONSIGNE : A partir du tableau fourni, vous devez mettre en place un système d'authentification. Après avoir demandé à votre utilisateur son EMAIL et MOT DE PASSE, et après avoir vérifié ses informations, vous lui souhaiterez la bienvenue avec son nom et prénom (document.write);
            
    En cas d'échec, vous afficherez une ALERT pour l'informer de l'erreur.  
-- */
function l(e) {
    console.log(e);
}
function w(f) {
    document.write(f);
}

        var BaseDeDonnees = [
            {'prenom':'Hugo','nom':'LIEGEARD','email':'wf3@hl-media.fr','mdp':'wf3'},
            {'prenom':'Rodrigue','nom':'NOUEL','email':'rodrigue@hl-media.fr','mdp':'wf3'},
            {'prenom':'Nathanael','nom':'DORDONNE','email':'nathanael.d@hl-media.fr','mdp':'wf3'}
        ];

l(BaseDeDonnees)

var emailUser = prompt("Bonjour, Quel est votre email ?");
var mdpUser = prompt("votre mot de passe ?");

for(let i = 0 ; i < BaseDeDonnees.length ; i++){
let contact = BaseDeDonnees[i];
    //-- l(contact) 
if((emailUser === contact.email) && (mdpUser === contact.mdp)){
    w("Bienvenue " + contact.prenom + " " + contact.nom + " !");
    break;
}
}
else{
    alert('ATTENTION, email/mot de passe incorrect.')
}