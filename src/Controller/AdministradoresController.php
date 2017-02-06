<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Administradores Controller
 *
 * @property \App\Model\Table\AdministradoresTable $Administradores
 */
class AdministradoresController extends AppController {

    /**
     * Login method
     *
     * @return void
     */
    public function login() {
        $this->viewBuilder()->layout('login');
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect(['controller' => 'Dashboard', 'action' => 'index']);
            }
            $this->Flash->error(__('Usuário ou senha invalidos.'));
        } else {
            if (!is_null($this->Auth->user())) {
                return $this->redirect(['controller' => 'Dashboard', 'action' => 'index']);
            }
            $this->Auth->logout();
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $administradores = $this->paginate($this->Administradores);

        $this->set(compact('administradores'));
        $this->set('_serialize', ['administradores']);
    }

    /**
     * View method
     *
     * @param string|null $id Administradore id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $administradore = $this->Administradores->get($id, [
            'contain' => []
        ]);

        $this->set('administradore', $administradore);
        $this->set('_serialize', ['administradore']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $administradore = $this->Administradores->newEntity();
        if ($this->request->is('post')) {
            $administradore = $this->Administradores->patchEntity($administradore, $this->request->data);
            if ($this->Administradores->save($administradore)) {
                $this->Flash->success(__('The administradore has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The administradore could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('administradore'));
        $this->set('_serialize', ['administradore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Administradore id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $administradore = $this->Administradores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $administradore = $this->Administradores->patchEntity($administradore, $this->request->data);
            if ($this->Administradores->save($administradore)) {
                $this->Flash->success(__('The administradore has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The administradore could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('administradore'));
        $this->set('_serialize', ['administradore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Administradore id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $administradore = $this->Administradores->get($id);
        if ($this->Administradores->delete($administradore)) {
            $this->Flash->success(__('The administradore has been deleted.'));
        } else {
            $this->Flash->error(__('The administradore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
