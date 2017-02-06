<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fornecedores Controller
 *
 * @property \App\Model\Table\FornecedoresTable $Fornecedores
 */
class FornecedoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $fornecedores = $this->paginate($this->Fornecedores);

        $this->set(compact('fornecedores'));
        $this->set('_serialize', ['fornecedores']);
    }

    /**
     * View method
     *
     * @param string|null $id Fornecedore id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fornecedore = $this->Fornecedores->get($id, [
            'contain' => []
        ]);

        $this->set('fornecedore', $fornecedore);
        $this->set('_serialize', ['fornecedore']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fornecedore = $this->Fornecedores->newEntity();
        if ($this->request->is('post')) {
            $fornecedore = $this->Fornecedores->patchEntity($fornecedore, $this->request->data);
            if ($this->Fornecedores->save($fornecedore)) {
                $this->Flash->success(__('The fornecedore has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fornecedore could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('fornecedore'));
        $this->set('_serialize', ['fornecedore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fornecedore id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fornecedore = $this->Fornecedores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fornecedore = $this->Fornecedores->patchEntity($fornecedore, $this->request->data);
            if ($this->Fornecedores->save($fornecedore)) {
                $this->Flash->success(__('The fornecedore has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fornecedore could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('fornecedore'));
        $this->set('_serialize', ['fornecedore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fornecedore id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fornecedore = $this->Fornecedores->get($id);
        if ($this->Fornecedores->delete($fornecedore)) {
            $this->Flash->success(__('The fornecedore has been deleted.'));
        } else {
            $this->Flash->error(__('The fornecedore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
