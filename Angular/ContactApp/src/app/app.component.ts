/**
 * Pour déclarer une class comme composant
 * de notre application, on importe "component"
 * via @angular/core
 */

import { Component } from '@angular/core';
import { Contact } from './shared/models/contact';

/**
 * @Component est ce qu'on appelle un décorateur.
 * il va nous permettre de définir 3 paramètres
 * essentiels à notre application
 */

@Component({
  /**
   * Le sélecteur (selector) détermine la manière dont
   * le composant sera affiché dans votre HTML.
   * on écrira dans notre HTML : <app-root></app-root>
   * vous devez OBLIGATOIREMENT avoir la balise d'ouverture
   * et de fermeture
   */
  selector: 'app-root',
  /**
   * "templateUrl" ou "template" est la partie visible
   * du composant. C'est ce qui s'affiche à l'écran
   * lorsque le composant est utilisé.
   */
  templateUrl: './app.component.html',
  // template: `
  // <h1>Hello Arnaud !</h1>
  // `,
  /**
   * La déclaration des styles avec "styleUrls" ou "styles"
   */
  styleUrls: ['./app.component.css']
})
/**
 * La classe contient les données du composant, mais aussi
 * son comportement. Dans le contexte MV VM, notre classe
 * correspond au ViewModel.
 */

export class AppComponent {
  // -- Déclaration du Variable titre
  title: string = 'Gestionnaire de Contacts';

  // -- Contact choisi par mon utilisateur
  contactActif: Contact;

  // -- Déclaration d'un Objet Contact
  unContact: Contact = {
    id        : 1,
    name      : 'Maxime JOYES',
    username  : 'marhime',
    email     : 'maxime.joyes@gmail.com',
  };

  mesContacts: Contact[] = [
    {
      id        : 1,
      name      : 'Maxime JOYES',
      username  : 'marhime',
      email     : 'maxime.joyes@gmail.com',
    },
    {
      id        : 2,
      name      : 'Elodie AMADIEU',
      username  : 'elodio',
      email     : 'elodie.amadieu@gmail.com',
    },
    {
      id        : 3,
      name      : 'Dominique JOYES',
      username  : 'micdom',
      email     : 'dominique.joyes@gmail.com',
    },
    {
      id        : 4,
      name      : 'Laurence LECOCQ',
      username  : 'noush',
      email     : 'laurence.lecocq@gmail.com',
    },
    {
      id        : 5,
      name      : 'Léa JOYES',
      username  : 'lilou',
      email     : 'lea.joyes@gmail.com'
    }
  ];

  /**
   * Ma fonction choisir contact, prend un contact
   * en paramètre et le transmet a la variable contactActif
   * @param contactCliqueParMonUtilisateur
   */

  choisirContact(contactCliqueParMonUtilisateur) {
    this.contactActif = contactCliqueParMonUtilisateur;
  }

}
