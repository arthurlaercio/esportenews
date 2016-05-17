<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Times Controller
 *
 * @property \App\Model\Table\TimesTable $Times
 */
class TimesController extends AppController
{

    public function view($id = null)
    {
        $time = $this->Times->get($id, [
            'contain' => ['Participantes', 'Tags']
        ]);

        $this->set('time', $time);
        $this->set('_serialize', ['time']);
    }

    public function add()
    {
        $time = $this->Times->newEntity();
        //pr($this->request->data);exit;
        if ($this->request->is('post')) {
            $time = $this->Times->patchEntity($time, $this->request->data);
            if ($this->Times->save($time)) {
                $this->Flash->success(__('Time salvo.'));
                return $this->redirect(['action' => 'dashboardTime']);
            } else {
                $this->Flash->error(__('Time não pôde ser criado devido a um erro.'));
            }
        }
        $this->set(compact('time'));
        $this->set('_serialize', ['time']);
    }

    public function edit($id = null)
    {
        $time = $this->Times->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $time = $this->Times->patchEntity($time, $this->request->data);
            if ($this->Times->save($time)) {
                $this->Flash->success(__('Dados alterados.'));
                return $this->redirect(['action' => 'dashboardTime']);
            } else {
                $this->Flash->error(__('Algo aconteceu de errado, tente novamente.'));
            }
        }
        $this->set(compact('time'));
        $this->set('_serialize', ['time']);
    }

    public function delete($id = null)
    {
        //$this->request->allowMethod(['post', 'delete']);
        $time = $this->Times->get($id);
        //pr($time);exit;
        if ($this->Times->delete($time)) {
            $this->Flash->success(__('O time foi excluído.'));
        } else {
            $this->Flash->error(__('O time não pôde ser excluído, tente novamente.'));
        }
        return $this->redirect(['action' => 'dashboardTime']);
    }
    
    public function dashboardTime($id = null){
        $times = $this->paginate($this->Times);

        $this->set(compact('times'));
        $this->set('_serialize', ['times']);
    }
}
