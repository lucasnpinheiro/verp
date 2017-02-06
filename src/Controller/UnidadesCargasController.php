<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UnidadesCargas Controller
 *
 * @property \App\Model\Table\UnidadesCargasTable $UnidadesCargas
 */
class UnidadesCargasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $unidadesCargas = $this->paginate($this->UnidadesCargas);

        $this->set(compact('unidadesCargas'));
        $this->set('_serialize', ['unidadesCargas']);
    }

    /**
     * View method
     *
     * @param string|null $id Unidades Carga id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $unidadesCarga = $this->UnidadesCargas->get($id, [
            'contain' => ['Produtos']
        ]);

        $this->set('unidadesCarga', $unidadesCarga);
        $this->set('_serialize', ['unidadesCarga']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $unidadesCarga = $this->UnidadesCargas->newEntity();
        if ($this->request->is('post')) {
            $unidadesCarga = $this->UnidadesCargas->patchEntity($unidadesCarga, $this->request->data);
            if ($this->UnidadesCargas->save($unidadesCarga)) {
                $this->Flash->success(__('The unidades carga has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The unidades carga could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('unidadesCarga'));
        $this->set('_serialize', ['unidadesCarga']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Unidades Carga id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $unidadesCarga = $this->UnidadesCargas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $unidadesCarga = $this->UnidadesCargas->patchEntity($unidadesCarga, $this->request->data);
            if ($this->UnidadesCargas->save($unidadesCarga)) {
                $this->Flash->success(__('The unidades carga has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The unidades carga could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('unidadesCarga'));
        $this->set('_serialize', ['unidadesCarga']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Unidades Carga id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $unidadesCarga = $this->UnidadesCargas->get($id);
        if ($this->UnidadesCargas->delete($unidadesCarga)) {
            $this->Flash->success(__('The unidades carga has been deleted.'));
        } else {
            $this->Flash->error(__('The unidades carga could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
