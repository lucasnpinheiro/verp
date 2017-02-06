<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Produtos Controller
 *
 * @property \App\Model\Table\ProdutosTable $Produtos
 */
class ProdutosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Grupos', 'UnidadesCargas', 'Icms', 'ImpostosOrigens']
        ];
        $produtos = $this->paginate($this->Produtos);

        $this->set(compact('produtos'));
        $this->set('_serialize', ['produtos']);
    }

    /**
     * View method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produto = $this->Produtos->get($id, [
            'contain' => ['Grupos', 'UnidadesCargas', 'Icms', 'ImpostosOrigens', 'Promocoes']
        ]);

        $this->set('produto', $produto);
        $this->set('_serialize', ['produto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $produto = $this->Produtos->newEntity();
        if ($this->request->is('post')) {
            $produto = $this->Produtos->patchEntity($produto, $this->request->data);
            if ($this->Produtos->save($produto)) {
                $this->Flash->success(__('The produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The produto could not be saved. Please, try again.'));
            }
        }
        $grupos = $this->Produtos->Grupos->find('list', ['limit' => 200]);
        $unidadesCargas = $this->Produtos->UnidadesCargas->find('list', ['limit' => 200]);
        $icms = $this->Produtos->Icms->find('list', ['limit' => 200]);
        $ImpostosOrigens = $this->Produtos->ImpostosOrigens->find('list', ['limit' => 200]);
        $this->set(compact('produto', 'grupos', 'unidadesCargas', 'icms', 'ImpostosOrigens'));
        $this->set('_serialize', ['produto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $produto = $this->Produtos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produto = $this->Produtos->patchEntity($produto, $this->request->data);
            if ($this->Produtos->save($produto)) {
                $this->Flash->success(__('The produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The produto could not be saved. Please, try again.'));
            }
        }
        $grupos = $this->Produtos->Grupos->find('list', ['limit' => 200]);
        $unidadesCargas = $this->Produtos->UnidadesCargas->find('list', ['limit' => 200]);
        $icms = $this->Produtos->Icms->find('list', ['limit' => 200]);
        $ImpostosOrigens = $this->Produtos->ImpostosOrigens->find('list', ['limit' => 200]);
        $this->set(compact('produto', 'grupos', 'unidadesCargas', 'icms', 'ImpostosOrigens'));
        $this->set('_serialize', ['produto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produto = $this->Produtos->get($id);
        if ($this->Produtos->delete($produto)) {
            $this->Flash->success(__('The produto has been deleted.'));
        } else {
            $this->Flash->error(__('The produto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
