<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Localidades Controller
 *
 * @property \App\Model\Table\LocalidadesTable $Localidades
 */
class LocalidadesController extends AppController
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


    public function index()
    {
        //Recupero los datos de la URL
        $data_url = $this->request->getQuery();
        $categoria= $data_url['Categoria'];

        $localidades = $this->Localidades->find('all', []);


        $this->set('localidades', $localidades);
        $this->set('categoria', $categoria);


    }

    public function add()
    {

        $localidades = $this->Localidades->newEntity();

        if ($this->request->is('post')) {


            $localidades = $this->Localidades->patchEntity($localidades, $this->request->getData());


            if ($this->Localidades->save($localidades)) {

                $this->Flash->success(__('El registro se ha almacenado con éxito'));

                return $this->redirect(['action' => 'index', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']]);
            }
            $this->Flash->error(__('Error al guardar el registro.'));
        }

        $this->set('localidades', $localidades);



    }


    public function edit()
    {
        $data_url = $this->request->getQuery();
        $context = $data_url['Context'];
        $categoria= $data_url['Categoria'];
        $id = $data_url['id'];

        $localidad = $this->Localidades->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            //COnsulto si el file que traigo no viene vacia
            $data_url = $this->request->getData();

            $localidad = $this->Localidades->patchEntity($localidad, $data_url);


            if ($this->Localidades->save($localidad)) {

                $this->Flash->success(__('El registro se ha almacenado con éxito'));

                return $this->redirect(['action' => 'index', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']]);
            }
            $this->Flash->error(__('Error al guardar el registro.'));



        }

        $this->set('localidad', $localidad);

    }


}
