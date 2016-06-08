<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Noticias Controller
 *
 * @property \App\Model\Table\NoticiasTable $Noticias
 */
class NoticiasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function dashboardNoticia()
    {
        $this->paginate = [
            'contain' => ['Times', 'Campeonatos']
        ];
        $noticias = $this->paginate($this->Noticias);

        $this->set(compact('noticias'));
        $this->set('_serialize', ['noticias']);
    }

    /**
     * View method
     *
     * @param string|null $id Noticia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function visualizar($id = null)
    {
        $noticia = $this->Noticias->get($id, [
            'contain' => ['Times', 'Campeonatos']
        ]);

        $this->set('noticia', $noticia);
        $this->set('_serialize', ['noticia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function adicionar()
    {
        $noticia = $this->Noticias->newEntity();
        if ($this->request->is('post')) {
            //pr($this->request->data);exit;
            $noticia = $this->Noticias->patchEntity($noticia, $this->request->data);
            if ($this->Noticias->save($noticia)) {
                $this->Flash->success(__('The noticia has been saved.'));
                return $this->redirect(['action' => 'dashboardNoticia']);
            } else {
                $this->Flash->error(__('The noticia could not be saved. Please, try again.'));
            }
        }
        $campeonatos2 = $this->Noticias->Campeonatos->find()->all();
        $times2 = $this->Noticias->Times->find()->all();
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
        $this->set(compact('noticia', 'times', 'campeonatos'));
        $this->set('_serialize', ['noticia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Noticia id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $noticia = $this->Noticias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $noticia = $this->Noticias->patchEntity($noticia, $this->request->data);
            if ($this->Noticias->save($noticia)) {
                $this->Flash->success(__('The noticia has been saved.'));
                return $this->redirect(['action' => 'dashboardNoticia']);
            } else {
                $this->Flash->error(__('The noticia could not be saved. Please, try again.'));
            }
        }
        $times = $this->Noticias->Times->find('list', ['limit' => 200]);
        $campeonatos = $this->Noticias->Campeonatos->find('list', ['limit' => 200]);
        $this->set(compact('noticia', 'times', 'campeonatos'));
        $this->set('_serialize', ['noticia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Noticia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $noticia = $this->Noticias->get($id);
        if ($this->Noticias->delete($noticia)) {
            $this->Flash->success(__('The noticia has been deleted.'));
        } else {
            $this->Flash->error(__('The noticia could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'dashboardNoticia']);
    }
}
