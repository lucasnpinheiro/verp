<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Embalagens Controller
 *
 * @property \App\Model\Table\EmbalagensTable $Embalagens
 */
class EmbalagensController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $embalagens = $this->paginate($this->Embalagens);

        $this->set(compact('embalagens'));
        $this->set('_serialize', ['embalagens']);
    }

    /**
     * View method
     *
     * @param string|null $id Embalagen id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $embalagen = $this->Embalagens->get($id, [
            'contain' => []
        ]);

        $this->set('embalagen', $embalagen);
        $this->set('_serialize', ['embalagen']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $embalagen = $this->Embalagens->newEntity();
        if ($this->request->is('post')) {
            $embalagen = $this->Embalagens->patchEntity($embalagen, $this->request->data);
            if ($this->Embalagens->save($embalagen)) {
                $this->Flash->success(__('The embalagen has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The embalagen could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('embalagen'));
        $this->set('_serialize', ['embalagen']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Embalagen id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $embalagen = $this->Embalagens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $embalagen = $this->Embalagens->patchEntity($embalagen, $this->request->data);
            if ($this->Embalagens->save($embalagen)) {
                $this->Flash->success(__('The embalagen has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The embalagen could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('embalagen'));
        $this->set('_serialize', ['embalagen']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Embalagen id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $embalagen = $this->Embalagens->get($id);
        if ($this->Embalagens->delete($embalagen)) {
            $this->Flash->success(__('The embalagen has been deleted.'));
        } else {
            $this->Flash->error(__('The embalagen could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
