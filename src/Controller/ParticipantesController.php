<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Participantes Controller
 *
 * @property \App\Model\Table\ParticipantesTable $Participantes
 */
class ParticipantesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Campeonatos', 'Times']
        ];
        $participantes = $this->paginate($this->Participantes);

        $this->set(compact('participantes'));
        $this->set('_serialize', ['participantes']);
    }

    /**
     * View method
     *
     * @param string|null $id Participante id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $participante = $this->Participantes->get($id, [
            'contain' => ['Campeonatos', 'Times']
        ]);

        $this->set('participante', $participante);
        $this->set('_serialize', ['participante']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $participante = $this->Participantes->newEntity();
        if ($this->request->is('post')) {
            $participante = $this->Participantes->patchEntity($participante, $this->request->data);
            //pr($this->request->data);exit;
            if ($this->Participantes->save($participante)) {
                $this->Flash->success(__('The participante has been saved.'));
                return $this->redirect(['controller' => 'Campeonatos','action' => 'dashboardCampeonato']);
            } else {
                $this->Flash->error(__('The participante could not be saved. Please, try again.'));
            }
        }
        //$campeonatos = $this->Participantes->Campeonatos->find('list');
        $campeonatos2 = $this->Participantes->Campeonatos->find()->all();
        $times2 = $this->Participantes->Times->find()->all();
        $times =array();
        $i=0;
        foreach($times2 as $t){
            $times[$i][$t['id']] = $t['nome'];
            $i++;
        }
        $i=0;
        foreach($campeonatos2 as $c){
            $campeonatos[$i][$c['id']] = $c['nome'];
            $i++;
        }
        //pr($times);exit;
        $this->set(compact('participante', 'campeonatos', 'times'));
        $this->set('_serialize', ['participante']);
        //pr($campeonatos);exit;
    }

    /**
     * Edit method
     *
     * @param string|null $id Participante id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $participante = $this->Participantes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $participante = $this->Participantes->patchEntity($participante, $this->request->data);
            if ($this->Participantes->save($participante)) {
                $this->Flash->success(__('The participante has been saved.'));
                return $this->redirect(['controller' => 'Campeonatos','action' => 'dashboardCampeonato']);
            } else {
                $this->Flash->error(__('The participante could not be saved. Please, try again.'));
            }
        }
        $campeonatos = $this->Participantes->Campeonatos->find('list', ['limit' => 200]);
        $times = $this->Participantes->Times->find('list', ['limit' => 200]);
        $this->set(compact('participante', 'campeonatos', 'times'));
        $this->set('_serialize', ['participante']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Participante id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $participante = $this->Participantes->get($id);
        if ($this->Participantes->delete($participante)) {
            $this->Flash->success(__('The participante has been deleted.'));
        } else {
            $this->Flash->error(__('The participante could not be deleted. Please, try again.'));
        }
        return $this->redirect(['controller' => 'Campeonatos','action' => 'dashboardCampeonato']);
    }
}
