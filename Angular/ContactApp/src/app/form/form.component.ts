import {Component, EventEmitter, OnInit, Output} from '@angular/core';
import {Contact} from '../shared/models/contact';

@Component({
  selector: 'app-form',
  templateUrl: './form.component.html',
  styleUrls: ['./form.component.css']
})
export class FormComponent implements OnInit {

  @Output() unContactEstCree = new EventEmitter();
  nouveauContact: Contact = new Contact();
  active: boolean = true;

  constructor() { }

  ngOnInit() {
  }

  // -- Fonction appelée après le submit du formulaire
  addContact() {
    /**
     * Lorsque mon formulaire est soumis, j'émets un évenement
     * qui sera écouté par mon application ; et qui récupérera
     * les données du nouveau contact.
     */
    this.unContactEstCree.emit({leContact:this.nouveauContact });

    // -- Je réinitialise le nouveau contact
    this.nouveauContact = new Contact();

    this.active = false;
    setTimeout(() => this.active = true, 0);
  }

}
