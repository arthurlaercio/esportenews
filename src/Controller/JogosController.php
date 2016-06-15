<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Jogos Controller
 *
 * @property \App\Model\Table\JogosTable $Jogos
 */
class JogosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $jogos = $this->paginate($this->Jogos);
        $this->loadModel('Times');
        $this->loadModel('Campeonatos');
        $campeonatos2 = $this->Campeonatos->find()->all();
        $times2 = $this->Times->find()->all();
        $times =array();
      
        foreach ($jogos as $jogo){
            foreach($times2 as $t){
                if($jogo['casa'] == $t['id']){
                    $jogo['casa'] = $t['nome'];
                }
                if($jogo['fora'] == $t['id']){
                    $jogo['fora'] = $t['nome'];
                }         
            }
            foreach($campeonatos2 as $c){
                if($jogo['rodada'] == $c['id']){
                    $jogo['rodada'] = $c['nome'];
                }
           
             }
        }
        //pr($jogos);exit;
        $this->set(compact('jogos','times','campeonatos'));
        $this->set('_serialize', ['jogos']);
    }

    /**
     * View method
     *
     * @param string|null $id Jogo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jogo = $this->Jogos->get($id, [
            'contain' => []
        ]);

        $this->set('jogo', $jogo);
        $this->set('_serialize', ['jogo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        
        $jogo = $this->Jogos->newEntity();
        if ($this->request->is('post')) {
            $jogo = $this->Jogos->patchEntity($jogo, $this->request->data);
            if ($this->Jogos->save($jogo)) {
                $this->Flash->success(__('The jogo has been saved.'));
                return $this->redirect(['controller'=> 'Campeonatos','action' => 'dashboardCampeonato']);
            } else {
                $this->Flash->error(__('The jogo could not be saved. Please, try again.'));
            }
        }
        $this->loadModel('Times');
        $this->loadModel('Campeonatos');
        $campeonatos2 = $this->Campeonatos->find()->all();
        $times2 = $this->Times->find()->all();
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
        
        $this->set(compact('jogo','times','campeonatos'));
        $this->set('_serialize', ['jogo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Jogo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jogo = $this->Jogos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jogo = $this->Jogos->patchEntity($jogo, $this->request->data);
            if ($this->Jogos->save($jogo)) {
                $this->Flash->success(__('The jogo has been saved.'));
                return $this->redirect(['controller'=> 'Campeonatos','action' => 'dashboardCampeonato']);
            } else {
                $this->Flash->error(__('The jogo could not be saved. Please, try again.'));
            }
        }
        $this->loadModel('Times');
        $this->loadModel('Campeonatos');
        $campeonatos2 = $this->Campeonatos->find()->all();
        $times2 = $this->Times->find()->all();
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
        $this->set(compact('jogo','campeonatos','times'));
        $this->set('_serialize', ['jogo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Jogo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jogo = $this->Jogos->get($id);
        if ($this->Jogos->delete($jogo)) {
            $this->Flash->success(__('The jogo has been deleted.'));
        } else {
            $this->Flash->error(__('The jogo could not be deleted. Please, try again.'));
        }
        return $this->redirect(['controller'=> 'Campeonatos','action' => 'dashboardCampeonato']);
    }
}
