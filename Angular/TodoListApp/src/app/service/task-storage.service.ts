import { Injectable } from '@angular/core';

@Injectable()
export class TaskStorageService {

  constructor() { }

// -- Récuperer la liste des tâches
  getTasks() {

    /**
     * Avant de retourner les données, je m'assure qu'il y a bien
     * les données dans le localStorage, s'il
     * @type {any}
     */
    const tasks = JSON.parse(localStorage.getItem('tasks'));
    if(tasks != null) {
      return tasks;
    } else {
      return[];
    }
  }

// -- Sauvegarder les tâches
save(tasks) {
    localStorage.setItem('tasks', JSON.stringify(tasks));
}
}
