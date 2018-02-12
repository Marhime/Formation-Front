import {Component, EventEmitter, OnInit, Output} from '@angular/core';
import {Task} from '../models/task';

@Component({
  selector: 'app-add-task',
  templateUrl: './add-task.component.html',
  styleUrls: ['./add-task.component.css']
})
export class AddTaskComponent implements OnInit {

  /**
   * Permet d'émettre un évèvement lors de la création d'une nouvelle tâche.
   *
   */
  @Output() newTaskEvent = new EventEmitter();

  /** La tâche a créer
   *
  * @type {Task}
   */

  task: Task = new Task();
  active:boolean = true;

  constructor() { }

  ngOnInit() {
  }

  /** Fonction appelée lors de la création d'une tâche :
   *
   */

  addTask() {
    /**
     * Lorsque l'utilisateur soumet sa tâche,
     * j'émets l'évènement avec la nouvelle tâche.
     */
    this.newTaskEvent.emit({task: this.task});
    this.task = new Task();
    this.active = false;
    setTimeout(()=> this.active = true, 0);
  }

}
