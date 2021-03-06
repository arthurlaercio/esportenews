<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mensagens Controller
 *
 * @property \App\Model\Table\MensagensTable $Mensagens
 */
class MensagensController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mensagens = $this->paginate($this->Mensagens);

        $this->set(compact('mensagens'));
        $this->set('_serialize', ['mensagens']);
    }

    /**
     * View method
     *
     * @param string|null $id Mensagen id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mensagen = $this->Mensagens->get($id, [
            'contain' => []
        ]);

        $this->set('mensagen', $mensagen);
        $this->set('_serialize', ['mensagen']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mensagen = $this->Mensagens->newEntity();
        if ($this->request->is('post')) {
            $mensagen = $this->Mensagens->patchEntity($mensagen, $this->request->data);
            if ($this->Mensagens->save($mensagen)) {
                $this->Flash->success(__('The mensagen has been saved.'));
                return $this->redirect(['controller'=>'Noticias','action' => 'home']);
            } else {
                $this->Flash->error(__('The mensagen could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mensagen'));
        $this->set('_serialize', ['mensagen']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mensagen id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mensagen = $this->Mensagens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mensagen = $this->Mensagens->patchEntity($mensagen, $this->request->data);
            if ($this->Mensagens->save($mensagen)) {
                $this->Flash->success(__('The mensagen has been saved.'));
                return $this->redirect(['action' => 'dashboardMensagem']);
            } else {
                $this->Flash->error(__('The mensagen could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mensagen'));
        $this->set('_serialize', ['mensagen']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mensagen id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mensagen = $this->Mensagens->get($id);
        if ($this->Mensagens->delete($mensagen)) {
            $this->Flash->success(__('The mensagen has been deleted.'));
        } else {
            $this->Flash->error(__('The mensagen could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'dashboardMensagem']);
    }
    
    public function dashboardMensagem(){
        $mensagens = $this->paginate($this->Mensagens);

        $this->set(compact('mensagens'));
        $this->set('_serialize', ['mensagens']);
    }
}
