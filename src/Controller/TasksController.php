<?php

namespace App\Controller;

class TasksController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }



    public function index()
    {
        $tasks = $this->Paginator->paginate($this->Tasks->find());

        $this->set('tasks', $tasks);
    }
    public function add(){
        $task = $this->Tasks->newEmptyEntity();

        if ($this->request->is('post')){
            $task = $this->Tasks->patchEntity($task, $this->request->getData());
        
            if($this->Tasks->save($task)){
                $this->Flash->success("Deine Aufgabe wurde notiert!");
                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error("Deine Aufgabe konnte nicht gespeichert werden!");

        }
        $this->set('task', $task);
    }


}