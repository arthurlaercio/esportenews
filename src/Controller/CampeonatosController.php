<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Campeonatos Controller
 *
 * @property \App\Model\Table\CampeonatosTable $Campeonatos
 */
class CampeonatosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $campeonatos = $this->paginate($this->Campeonatos);

        $this->set(compact('campeonatos'));
        $this->set('_serialize', ['campeonatos']);
    }

    /**
     * View method
     *
     * @param string|null $id Campeonato id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $campeonato = $this->Campeonatos->get($id, [
            'contain' => ['Participantes', 'Tags']
        ]);

        $this->set('campeonato', $campeonato);
        $this->set('_serialize', ['campeonato']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $campeonato = $this->Campeonatos->newEntity();
        if ($this->request->is('post')) {
            $campeonato = $this->Campeonatos->patchEntity($campeonato, $this->request->data);
            if ($this->Campeonatos->save($campeonato)) {
                $this->Flash->success(__('The campeonato has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The campeonato could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('campeonato'));
        $this->set('_serialize', ['campeonato']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Campeonato id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $campeonato = $this->Campeonatos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $campeonato = $this->Campeonatos->patchEntity($campeonato, $this->request->data);
            if ($this->Campeonatos->save($campeonato)) {
                $this->Flash->success(__('The campeonato has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The campeonato could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('campeonato'));
        $this->set('_serialize', ['campeonato']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Campeonato id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $campeonato = $this->Campeonatos->get($id);
        if ($this->Campeonatos->delete($campeonato)) {
            $this->Flash->success(__('The campeonato has been deleted.'));
        } else {
            $this->Flash->error(__('The campeonato could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
