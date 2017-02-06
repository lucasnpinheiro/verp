<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Vendedores Controller
 *
 * @property \App\Model\Table\VendedoresTable $Vendedores
 */
class VendedoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $vendedores = $this->paginate($this->Vendedores);

        $this->set(compact('vendedores'));
        $this->set('_serialize', ['vendedores']);
    }

    /**
     * View method
     *
     * @param string|null $id Vendedore id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vendedore = $this->Vendedores->get($id, [
            'contain' => []
        ]);

        $this->set('vendedore', $vendedore);
        $this->set('_serialize', ['vendedore']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vendedore = $this->Vendedores->newEntity();
        if ($this->request->is('post')) {
            $vendedore = $this->Vendedores->patchEntity($vendedore, $this->request->data);
            if ($this->Vendedores->save($vendedore)) {
                $this->Flash->success(__('The vendedore has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vendedore could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('vendedore'));
        $this->set('_serialize', ['vendedore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vendedore id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vendedore = $this->Vendedores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vendedore = $this->Vendedores->patchEntity($vendedore, $this->request->data);
            if ($this->Vendedores->save($vendedore)) {
                $this->Flash->success(__('The vendedore has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vendedore could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('vendedore'));
        $this->set('_serialize', ['vendedore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vendedore id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vendedore = $this->Vendedores->get($id);
        if ($this->Vendedores->delete($vendedore)) {
            $this->Flash->success(__('The vendedore has been deleted.'));
        } else {
            $this->Flash->error(__('The vendedore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
