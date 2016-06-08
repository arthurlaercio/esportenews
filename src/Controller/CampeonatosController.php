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

   
    public function visualizar($id = null)
    {
        $campeonato = $this->Campeonatos->get($id, [
            'contain' => ['Participantes', 'Tags']
        ]);
        //pr($campeonato);exit;
        $this->set('campeonato', $campeonato);
        $this->set('_serialize', ['campeonato']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function adicionar()
    {
        $campeonato = $this->Campeonatos->newEntity();
        
        if ($this->request->is('post')) {
            $campeonato = $this->Campeonatos->patchEntity($campeonato, $this->request->data);
            
            if ($this->Campeonatos->save($campeonato)) {
                $this->Flash->success(__('Campeonato Salvo.'));
                return $this->redirect(['action' => 'dashboardCampeonato']);
            } else {
                $this->Flash->error(__('Algo aconteceu de errado, tente novamente.'));
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
    public function editar($id = null)
    {
        $campeonato = $this->Campeonatos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $campeonato = $this->Campeonatos->patchEntity($campeonato, $this->request->data);
            if ($this->Campeonatos->save($campeonato)) {
                $this->Flash->success(__('Campeonato salvo.'));
                return $this->redirect(['action' => 'dashboardCampeonato']);
            } else {
                $this->Flash->error(__('Algo ocorreu de errado, tente novamente.'));
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
            $this->Flash->success(__('Campeonato deletado.'));
        } else {
            $this->Flash->error(__('Erro ao deletar o campeonato, tente novamente.'));
        }
        return $this->redirect(['action' => 'dashboardCampeonato']);
    }
    
    public function dashboardCampeonato(){
        $campeonatos = $this->paginate($this->Campeonatos);
        $this->set(compact('campeonatos'));
        $this->set('_serialize', ['campeonatos']);
    }
}
