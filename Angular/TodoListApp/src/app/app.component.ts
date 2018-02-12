import {Component, OnInit} from '@angular/core';
import {Task} from './models/task';
import {TaskStorageService} from './service/task-storage.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit{

  constructor(private taskStorageService:TaskStorageService) {

  }

  /**
   * on déclare notre tableau de tâche
   * @type {any[]}
   */
  tasks: Task[] = [];

  ngOnInit(): void {
    this.tasks = this.taskStorageService.getTasks();
  }
  /**
   * Cette fonction se déclenche dans l'application lorsqu'une nouvelle tâche est créée par l'utilisateur dans le composant app-addTask.
   *
   */
  newTask(newTaskEvent){
    /**
     * On ajoute la nouvelle tâche dans le tableau de tâche
     * et on sauvegarde toutes les tâches dans le localStorage.
     */
    this.tasks.push(newTaskEvent.task);
    this.taskStorageService.save(this.tasks);
  }

  taskDone(task: Task) {
    task.status = true;
    this.taskStorageService.save(this.tasks);
  }
}
