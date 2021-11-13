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
        
        $query = $this->Tasks->find('all', [
            'conditions' => ['Tasks.Completed' => '0']
        ]);
        $number = $query->count();
        $this->set('number', $number);
    }
    public function add(){
        $task = $this->Tasks->newEmptyEntity();

        if ($this->request->is('post')){
            $task = $this->Tasks->patchEntity($task, $this->request->getData());
            $task->Owner=$this->Auth->user('name');
            $task->user_id=$this->Auth->user('id');
            if($this->Tasks->save($task)){
                $this->Flash->success("Deine Aufgabe wurde notiert!");
                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error("Deine Aufgabe konnte nicht gespeichert werden!");

        }
        $this->set('task', $task);
    }

    public function view ($TaskId=null){
        $task=$this->Tasks->get($TaskId, [
            'contain' => []
        ]);
        $this->set('task', $task);
    }

    public function edit($TaskId = null)
    {

        $task = $this->Tasks->get($TaskId, [
            'contain' => []
        ]);
       if( $task->user_id!==$this->Auth->user('id')) {
            $this->Flash->error('Du kannst nur deine eigenen Aufgaben bearbeiten!');
            return $this->redirect(['action' => 'index']);
       }
       

        if ($this->request->is(['patch', 'post', 'put'])) {
            $task = $this->Tasks->patchEntity($task, $this->request->getData());
            if ($this->Tasks->save($task)) {
                $this->Flash->success('Deine Aufgabe wurde gespeichert.');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Deine Aufgabe konnte nicht gespeichert werden.');
        }
        $this->set(compact('task'));
    }
       
    public function delete($TaskId = null)
    {

        $task = $this->Tasks->get($TaskId);

        if( $task->user_id!==$this->Auth->user('id')) {
            $this->Flash->error('Du kannst nur deine eigenen Aufgaben löschen!');
            return $this->redirect(['action' => 'index']);
       }

        $this->request->allowMethod(['post', 'delete']);
        if ($this->Tasks->delete($task)) {
            $this->Flash->success(__('Die Aufgabe wurde gelöscht.'));
        } else {
            $this->Flash->error(__('Die AUfgabe konnte nicht gelöscht werden.'));
        }

        return $this->redirect(['action' => 'index']);
    }


}