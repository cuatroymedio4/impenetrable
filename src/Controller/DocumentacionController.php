<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Event\EventInterface;
use Cake\Filesystem\File;
use Cassandra\Date;

/**
 * Documentacion Controller
 *
 * @property \App\Model\Table\DocumentacionTable $Documentacion
 */



class DocumentacionController extends AppController
{

    public function beforeFilter(Event  $event)
    {

        $this->Auth->allow(['index']);
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

        $documentacion = $this->paginate($this->Documentacion);
        $this->set(compact('documentacion'));

        $this->set('categoria', $categoria);
    }

    //INdex del admin
    public function view()
    {
        //Recupero los datos de la URL
        $data_url = $this->request->getQuery();
        $categoria= $data_url['Categoria'];

        $documentacion = $this->paginate($this->Documentacion);
        $this->set(compact('documentacion'));


        $this->set('categoria', $categoria);

    }

    public function add()
    {
        $documentacion = $this->Documentacion->newEntity();
        $destination = DOCS_FILES;

        if ($this->request->is('post')) {

            if ($this->saveFile($this->request, $this->Documentacion, $documentacion, $destination)) {
                $this->Flash->success(__('EL archivo se ha almacenado con éxito'));
                return $this->redirect(['action' => 'view', '?' => ['Categoria' => 'Documentacion', 'Context' => 'Admin']]);
            } else {
                $this->Flash->error(__('El Archivo no pudo ser almacenado. Intente nuevamente.'));
            }
        }

        $this->set('documentacion', $documentacion);
    }

    public function edit()
    {
        $data_url = $this->request->getQuery();
        $context = $data_url['Context'];
        $categoria= $data_url['Categoria'];
        $id = $data_url['id'];

        $documentacion = $this->Documentacion->get($id, [
            'contain' => []
        ]);


        if ($this->request->is(['patch', 'post', 'put'])) {
            //COnsulto si el file que traigo no viene vacia
            $data_url = $this->request->getData();

            if (!empty($data_url['file']))
            {

                if($data_url['file']['tmp_name'] != '')
                {
                    try{
                        $destination = DOCS_FILES;
                        $file = new File($documentacion->folder.$documentacion->name);

                        debug($documentacion->folder.$documentacion->name);
                        if($file->exists()){
                            if ($file->delete()){
                                $file->close();
                                if ($this->saveFile($this->request, $this->Documentacion, $documentacion, $destination)){

                                    $this->Flash->success(__('El Documento se ha actualizado con éxito'));
                                    return $this->redirect(['action' => 'view', '?' => ['Categoria' => 'Documentacion', 'Context' => 'Admin']]);
                                } else {
                                    //Mensaje de Error
                                    $this->Flash->error(__('El Documento no pudo ser eliminada. Intente nuevamente.'));
                                }

                            }

                        } else {



                            $file->close();
                            if ($this->saveFile($this->request, $this->Documentacion, $documentacion, $destination)){

                                $this->Flash->success(__('El Documento se ha actualizado con éxito'));
                                return $this->redirect(['action' => 'view', '?' => ['Categoria' => 'Documentacion', 'Context' => 'Admin']]);
                            } else {
                                //Mensaje de Error
                                $this->Flash->error(__('El Documento no pudo ser eliminada. Intente nuevamente.'));
                            }
                        }

                    } catch (Exception $e){
                        $this->Flash->error(__($e->getMessage()));
                        $this->Flash->error(__('EL Archivo no pudo ser almcenado. Intente nuevamente.'));
                    }
                } else {
                    //Vino vacio, almaceno los demas datos
                    //COnsulto si hay alguna imagen

                    $entity = $this->Documentacion->patchEntity($documentacion, $this->request->getData());

                    if ($this->Documentacion->save($entity)){
                        $this->Flash->success(__('El Documento se ha actualizado con éxito'));
                        return $this->redirect(['action' => 'view', '?' => ['Categoria' => 'Documentacion', 'Context' => 'Admin']]);
                    } else {
                        $this->Flash->error(__('El Documento no pudo ser eliminada. Intente nuevamente.'));
                    }

                }
            } else {
                $entity = $this->Documentacion->patchEntity($documentacion, $this->request->getData());

                if ($this->Documentacion->save($entity)){
                    $this->Flash->success(__('El Documento se ha actualizado con éxito'));
                    return $this->redirect(['action' => 'view', '?' => ['Categoria' => 'Documentacion', 'Context' => 'Admin']]);
                } else {
                    $this->Flash->error(__('El Documento no pudo ser eliminada. Intente nuevamente.'));
                }
            }


        }
        $this->set('documentacion', $documentacion);

    }


    private function saveFile($request = null, $model = null, $entity = null, $destination = null)
    {

        $data = $request->getData();
        $file = $data['file'];

        $new_name = $file['name']. date("F j, Y, g:i a");
        $name_sha = hash('sha256' , $new_name) . '_' . $file['name'];
        $format = $file['type'];

        if (move_uploaded_file($file['tmp_name'], $destination.$name_sha)) {


            $entity = $model->patchEntity($entity, $request->getData());

            $entity->format = $format;
            $entity->name = $name_sha;
            $entity->folder = $destination;
            $entity->size = $file['size'];

            if ($model->save($entity)){
                return true;
            } else {
                return false;
            }
        }

    }


    public function fileDownload($id)
    {
        $this->autoRender = false;
        $archivo = $this->Documentacion->get($id, [
            'contain' => [],
        ]);

        try{
            $file_path = $archivo->folder.$archivo->name;
            $mime = mime_content_type($file_path);
            $this->response = $this->response->withHeader('Content-Type', $mime);
            $this->response = $this->response->withFile($file_path, [
                'download' => true,
                'name' => $archivo->name
            ]);
            return $this->response;
        } catch (Exception $e){
            $this->Flash->error(__('Error al descargar'));

        }

    }


}
