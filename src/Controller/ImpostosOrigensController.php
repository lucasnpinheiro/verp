<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ImpostosOrigens Controller
 *
 * @property \App\Model\Table\ImpostosOrigensTable $ImpostosOrigens
 */
class ImpostosOrigensController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $impostosOrigens = $this->paginate($this->ImpostosOrigens);

        $this->set(compact('impostosOrigens'));
        $this->set('_serialize', ['impostosOrigens']);
    }

    /**
     * View method
     *
     * @param string|null $id Impostos Origen id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $impostosOrigen = $this->ImpostosOrigens->get($id, [
            'contain' => []
        ]);

        $this->set('impostosOrigen', $impostosOrigen);
        $this->set('_serialize', ['impostosOrigen']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $impostosOrigen = $this->ImpostosOrigens->newEntity();
        if ($this->request->is('post')) {
            $impostosOrigen = $this->ImpostosOrigens->patchEntity($impostosOrigen, $this->request->data);
            if ($this->ImpostosOrigens->save($impostosOrigen)) {
                $this->Flash->success(__('The impostos origen has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The impostos origen could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('impostosOrigen'));
        $this->set('_serialize', ['impostosOrigen']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Impostos Origen id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $impostosOrigen = $this->ImpostosOrigens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $impostosOrigen = $this->ImpostosOrigens->patchEntity($impostosOrigen, $this->request->data);
            if ($this->ImpostosOrigens->save($impostosOrigen)) {
                $this->Flash->success(__('The impostos origen has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The impostos origen could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('impostosOrigen'));
        $this->set('_serialize', ['impostosOrigen']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Impostos Origen id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $impostosOrigen = $this->ImpostosOrigens->get($id);
        if ($this->ImpostosOrigens->delete($impostosOrigen)) {
            $this->Flash->success(__('The impostos origen has been deleted.'));
        } else {
            $this->Flash->error(__('The impostos origen could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
