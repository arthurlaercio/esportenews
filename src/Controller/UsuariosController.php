<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Usuarios Controller
 *
 * @property \App\Model\Table\UsuariosTable $Usuarios
 */
class UsuariosController extends AppController
{
    
    public function view($id = null)
    {
        
        $usuario = $this->Usuarios->get($id, [
            'contain' => []
        ]);

        $this->set('usuario', $usuario);
        $this->set('_serialize', ['usuario']);
    }

    
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuario = $this->Usuarios->get($id);
        if ($this->Usuarios->delete($usuario)) {
            $this->Flash->success(__('O usuário foi excluído.'));
        } else {
            $this->Flash->error(__('O usuário não pôde ser excluído, tente novamente.'));
        }
        return $this->redirect(['action' => 'dashboardUsuario']);
    }
    
    public function login(){
        
    }
    
    public function dashboardUsuario(){
        $usuarios = $this->paginate($this->Usuarios);
       // pr($usuarios->toList()['0']['id']);exit;
        $this->set(compact('usuarios'));
        $this->set('_serialize', ['usuarios']);
    }
    
    public function visualizar($id = null){
        $usuario = $this->Usuarios->get($id, [
            'contain' => []
        ]);
        
        $this->set('usuario', $usuario);
        $this->set('_serialize', ['usuario']);
    }
    
    public function editar($id = null){
        $usuario = $this->Usuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->data);
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('Alterações feitas com sucesso.'));
                return $this->redirect(['action' => 'dashboardUsuario']);
            } else {
                $this->Flash->error(__('Alterações não puderam ser realizadas, tente novamente!'));
            }
        }
        $this->set(compact('usuario'));
        $this->set('_serialize', ['usuario']);
    }
    
    public function adicionar(){
        $usuario = $this->Usuarios->newEntity();
        if ($this->request->is('post')) {           
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->data);
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('Usuário adicionado.'));
                return $this->redirect(['action' => 'dashboardUsuario']);
            } else {
                $this->Flash->error(__('Usuário não adicionado devido a algum problema.'));
            }
        }
        $this->set(compact('usuario'));
        $this->set('_serialize', ['usuario']);
    }
}
