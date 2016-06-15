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
        $this->loadModel('Times');
        $times = $this->Times->find()->all();
        
        foreach ($campeonato['participantes'] as $t){
            $t['campeonato_id'] = $campeonato['nome'];
            foreach($times as $time){
                if($time['id'] == $t['time_id']){
                    $t['time_id'] = $time['nome'];
                }           
            }
        }
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
    
    public function home(){
        $campeonatos = $this->paginate($this->Campeonatos);
        $this->set(compact('campeonatos'));
        $this->set('_serialize', ['campeonatos']);
    }
    
    public function completa($id = null){
        $campeonato = $this->Campeonatos->get($id, [
            'contain' => ['Participantes', 'Tags']
        ]);
        $this->loadModel('Times');
        $this->loadModel('Jogos');
        $times = $this->Times->find()->all();
        $jogos = $this->Jogos->find()->all();
        $tabela = array();
        $tabela2 = array();
        $i=0;
        foreach ($campeonato['participantes'] as $camp){
            $tabela[$i]['id'] = $camp['time_id'];
            $tabela[$i]['nome'] = null;
            $tabela[$i]['vitorias'] = null;
            $tabela[$i]['empate'] = null;
            $tabela[$i]['derrotas'] = null;
            $tabela[$i]['saldo'] = null;
            $i++;
        }
        //pr($tabela);exit;
        $tabela2 = $tabela;
        $i=0;
        foreach ($times as $time){
            foreach ($tabela2 as $t){
                if($t['id'] == $time['id']){
                    $tabela[$i]['id'] = $t['id'];
                    $tabela[$i]['nome'] = $time['nome'];
                    $tabela[$i]['vitorias'] = 0;
                    $tabela[$i]['empate'] = 0;
                    $tabela[$i]['derrotas'] = 0;
                    $tabela[$i]['saldo'] = 0;
                    $i++;
                }
            }
        }
        
        $tabela2 = $tabela;
        $i=0;
        
        foreach ($jogos as $jogo){
            foreach ($tabela2 as $t){
                if($jogo['casa'] == $t['id']){
                    $cont=0;
                    $entrei=0;
                    foreach ($tabela as $tab){
                        
                        if($tab['id'] == $t['id']){
                            $entrei=1;
                            if($jogo['golcasa'] > $jogo['golfora']){
                                    $tabela[$cont]['vitorias']++;
                            }else if($jogo['golcasa'] < $jogo['golfora']){
                                $tabela[$cont]['derrotas']++;
                            }else{
                                $tabela[$cont]['empate']++;
                            }                  
                            $tabela[$cont]['saldo'] += $jogo['golcasa']-$jogo['golfora'];        
                        }
                        $cont++;
                    }
                    if($entrei == 0){
                        $tabela[$i]['id'] = $t['id'];
                        $tabela[$i]['nome'] = $t['nome'];
                        if($jogo['golcasa'] > $jogo['golfora']){
                            $tabela[$i]['vitorias']++;
                        }else if($jogo['golcasa'] < $jogo['golfora']){
                            $tabela[$i]['derrotas']++;
                        }else{
                            $tabela[$i]['empate']++;
                        }                  
                        $tabela[$i]['saldo'] += $jogo['golcasa']-$jogo['golfora'];
                        $i++;
                    }
                }else if($jogo['fora'] == $t['id']){
                    $cont=0;
                    $entrei=0;
                    foreach ($tabela as $tab){
                        
                        if($tab['id'] == $t['id']){
                            $entrei=1;
                            if($jogo['golcasa'] < $jogo['golfora']){
                                $tabela[$cont]['vitorias']++;
                            }else if($jogo['golcasa'] > $jogo['golfora']){
                                $tabela[$cont]['derrotas']++;
                            }else{
                                $tabela[$cont]['empate']++;
                            }                  
                            $tabela[$cont]['saldo'] += $jogo['golfora']-$jogo['golcasa'];       
                        }
                        $cont++;
                    }
                    if($entrei == 0){
                        $tabela[$i]['id'] = $t['id'];
                        $tabela[$i]['nome'] = $t['nome'];
                        if($jogo['golcasa'] < $jogo['golfora']){
                            $tabela[$i]['vitorias']++;
                        }else if($jogo['golcasa'] > $jogo['golfora']){
                            $tabela[$i]['derrotas']++;
                        }else{
                            $tabela[$i]['empate']++;
                        }                  
                        $tabela[$i]['saldo'] += $jogo['golfora']-$jogo['golcasa'];
                        $i++;
                    }
                }
            }
        }
        //pr($tabela);exit;
        $this->set('campeonato', $campeonato);
        $this->set(compact('tabela'));
        $this->set('_serialize', ['campeonato']);
    }
}
