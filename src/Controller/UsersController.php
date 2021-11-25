<?php
declare(strict_types=1);

namespace App\Controller;


class UsersController extends AppController
{
    
    public function index()
    {
        $users = $this->Users->find('all', [
            'conditions' => ['Users.id' =>$this->Auth->user('id') ]
        ]);

        $this->set(compact('users'));
        $this->set('users', $users);
    }

    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        $this->set(compact('user'));
    }

   
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Der Benutzer wurde gespeichert.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Der Benutzer konnte nicht gespeichert werden, versuche es erneut.'));
        }
        $this->set(compact('user'));
    }

    
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Der Benutzer wurde gespeichert.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Der Benutzer konnte nicht gespeichert werden, versuche es erneut.'));
        }
        $this->set(compact('user'));
    }

   
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('Der Benutzer wurde gelöscht.'));
        } else {
            $this->Flash->error(__('Der Benutzer konnte nicht gelöscht werden, versuche es nochmal.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login() {
        if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
        $this->Auth->setUser($user);
        return $this->redirect(['controller' => 'tasks']);
        }
        $this->Flash->error('Dein Benutzername oder dein Passwort ist falsch, versuche es nochmal.');
        }
       }

       public function logout() {
        $this->Flash->success('Du wurdest erfolgreich ausgeloggt!');
        return $this->redirect($this->Auth->logout());
       }
       public function beforeFilter(\Cake\Event\EventInterface $event) {
        $this->Auth->allow('register');
       }

       public function register() {
        if ($this->request->getData()) {
        $user = $this->Users->newEntity($this->request->getData());
        if ($this->Users->save($user)) {
        $this->Flash->success(__('Du hast dich erfolgreich registriert, logge dich gleich ein!'));
        return $this->redirect([
        'action' => 'login' ]);
        }
        else {
        $this->Flash->error(__('Du bist nicht registriert.'));
        }
        }
       }
}
