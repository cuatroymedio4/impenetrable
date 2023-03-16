<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\EventInterface;

/**
 * Timeline Controller
 *
 * @property \App\Model\Table\TimelineTable $Timeline
 */
class TimelineController extends AppController
{

    public function beforeFilter(EventInterface  $event)
    {

        $this->Auth->allow(['view']);
    }

    public function isAuthorized($user)
    {

        if(isset($user['role']) and $user['role'] === 'user')
        {
            if(in_array($this->request->getParam('action'), ['index', 'add']))
            {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }

    public function index()
    {
        //Recupero los datos de la URL
        $data_url = $this->request->getQuery();
        $categoria= $data_url['Categoria'];


        $timeline = $this->paginate($this->Timeline);
        $this->set(compact('timeline'));


        $this->set('categoria', $categoria);

    }

    public function view()
    {
        //Recupero los datos de la URL
        $data_url = $this->request->getQuery();
        $categoria= $data_url['Categoria'];

        $timeline = $this->Timeline->find('all', [])
            ->orderDesc('fecha');


        $this->set('timeline', $timeline);
        $this->set('categoria', $categoria);
    }


    public function add()
    {

        $timeline = $this->Timeline->newEntity();

        //Recupero los datos de la URL
        $data_url = $this->request->getQuery();


        $categoria= $data_url['Categoria'];

        if ($this->request->is('post')) {


            $user = $this->Timeline->patchEntity($timeline, $this->request->getData());


            if ($this->Timeline->save($timeline)) {

                $this->Flash->success(__('El registro se ha almacenado con éxito'));

                return $this->redirect(['action' => 'index', '?' => ['Categoria' => 'Timeline', 'Context' => 'Admin']]);
            }
            $this->Flash->error(__('Error al guardar el registro.'));
        }
        $this->set(compact('timeline'));
        $this->set('_serialize', ['timeline']);


        $this->set('categoria', $categoria);

    }

    public function edit()
    {
        $timeline = $this->Timeline->newEntity();

        //Recupero los datos de la URL
        $data_url = $this->request->getQuery();


        $categoria = $data_url['Categoria'];
        $context = $data_url['Context'];
        $id = $data_url['id'];

        $timeline = $this->Timeline->get($id, [
            'contain' => []]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $timeline = $this->Timeline->patchEntity($timeline, $this->request->getData());

            if ($this->Timeline->save($timeline)) {

                $this->Flash->success(__('El registro se ha actualizado con éxito'));

                return $this->redirect(['action' => 'index', '?' => ['Categoria' => 'Timeline', 'Context' => 'Admin']]);
            }
            $this->Flash->error(__('Error al guardar el registro.'));

        }

        $this->set(compact('timeline'));
        $this->set('_serialize', ['timeline']);

        $this->set('categoria', $categoria);

    }



    public function delete($id  = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $time = $this->Timeline->get($id);

        try{
            if ($this->Timeline->delete($time)) {
                $this->Flash->success(__('El Registro ha sido eliminado.'));
                return $this->redirect(['action' => 'index', '?' => ['Categoria' => 'Timeline', 'Context' => 'Admin']]);
            } else {
                $this->Flash->error(__('El Registro no pudo ser eliminada. Intente nuevamente.'));
            }
        }catch(\PDOException $e){
            $this->Flash->error(__($e->getMessage()));
            $this->Flash->error(__('El Usuario no pudo ser eliminado. Intente nuevamente.'));
            return $this->redirect(['action' => 'index', '?' => ['Categoria' => 'Timeline', 'Context' => 'Admin']]);
        }


    }


}
