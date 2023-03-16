<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PuntosInteres Controller
 *
 * @property \App\Model\Table\PuntosInteresTable $PuntosInteres
 *
 * @method \App\Model\Entity\PuntosIntere[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PuntosInteresController extends AppController
{

    public function isAuthorized($user)
    {

        if(isset($user['role']) and $user['role'] === 'user')
        {
            if(in_array($this->request->getParam('action'), ['index', 'add', 'edit']))
            {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $puntosInteres = $this->paginate($this->PuntosInteres);

        $this->set(compact('puntosInteres'));
    }

    /**
     * View method
     *
     * @param string|null $id Puntos Intere id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $puntosIntere = $this->PuntosInteres->get($id, [
            'contain' => [],
        ]);

        $this->set('puntosIntere', $puntosIntere);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $puntosIntere = $this->PuntosInteres->newEntity();
        if ($this->request->is('post')) {
            $puntosIntere = $this->PuntosInteres->patchEntity($puntosIntere, $this->request->getData());
            if ($this->PuntosInteres->save($puntosIntere)) {
                $this->Flash->success(__('The puntos intere has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The puntos intere could not be saved. Please, try again.'));
        }
        $this->set(compact('puntosIntere'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Puntos Intere id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit()
    {

        $data_url = $this->request->getQuery();
        $context = $data_url['Context'];
        $categoria= $data_url['Categoria'];
        $id = $data_url['id'];

        $puntosIntere = $this->PuntosInteres->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $puntosIntere = $this->PuntosInteres->patchEntity($puntosIntere, $this->request->getData());
            if ($this->PuntosInteres->save($puntosIntere)) {
                $this->Flash->success(__('The puntos intere has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The puntos intere could not be saved. Please, try again.'));
        }
        $this->set(compact('puntosIntere'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Puntos Intere id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $puntosIntere = $this->PuntosInteres->get($id);
        if ($this->PuntosInteres->delete($puntosIntere)) {
            $this->Flash->success(__('The puntos intere has been deleted.'));
        } else {
            $this->Flash->error(__('The puntos intere could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
