<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\File;

/**
 * Configuraciones Controller
 *
 */
class ConfiguracionesController extends AppController
{


    public function isAuthorized($user)
    {

        if(isset($user['role']) and $user['role'] === 'user')
        {
            if(in_array($this->request->getParam('action'), ['addImageSlider', 'showInSlider']))
            {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }


    public function addImageSlider()
    {
        $slider_home_model = $this->loadModel('SliderHome');

        //Recupero los datos de la URL
        $data_url = $this->request->getQuery();
        $categoria= $data_url['Categoria'];

        $slider_home = $slider_home_model->newEntity();
        $data = $this->request->getData();


        $destination = SLIDER;

        if ($this->request->is('post')) {

            if(!empty($data['file'])){

                $file = $data['file'];
                $new_name = $file['name']. date("F j, Y, g:i a");
                $name_sha = hash('sha256' , $new_name) . '_' . $file['name'];

                if (move_uploaded_file($file['tmp_name'], $destination.$name_sha)) {

                    $slider_home->titulo = $data['titulo'];
                    $slider_home->descripcion = $data['descripcion'];
                    $slider_home->photo = $name_sha;
                    $slider_home->photo_dir = $destination;


                    if ($slider_home_model->save($slider_home)){

                        $this->Flash->success(__('La Imagen se ha almacenado con éxito'));

                        return $this->redirect(['action' => 'viewImageSlider', '?' => ['Categoria' => 'Configuraciones', 'Context' => 'Admin']]);
                    }

                }

            }
        }

        $this->set('slider_home', $slider_home);
        $this->set('categoria', $categoria);
    }

    public function viewImageSlider()
    {

        $slider_home_model = $this->loadModel('SliderHome');

        //Recupero los datos de la URL
        $data_url = $this->request->getQuery();
        $categoria= $data_url['Categoria'];


        $slider_home = $this->paginate($slider_home_model);

        //debug($slider_home);

        $this->set(compact('slider_home'));


    }

    public function editImageSlider()
    {

        $slider_home_model = $this->loadModel('SliderHome');
        //Recupero los datos de la URL
        $data_url = $this->request->getQuery();
        $context = $data_url['Context'];
        $categoria= $data_url['Categoria'];
        $id = $data_url['id'];

        $slider_home = $slider_home_model->get($id, [
            'contain' => []
        ]);


        if ($this->request->is(['patch', 'post', 'put'])) {

            $data = $this->request->getData();


            //COnsulto si la imagen que traigo no viene vacia
            if($data['file']['tmp_name'] != '')
            {
                //elimino la imagen de la carpeta y reemplazo con la nueva

                try{
                    $destination = SLIDER;

                    $file = new File($slider_home->photo_dir.$slider_home->photo);

                    if($file->exists()){
                        if ($file->delete()){
                            $file->close();

                            if ($this->saveLoadImage($this->request, $slider_home_model, $slider_home, $destination)){

                                $this->Flash->success(__('La Imagen se ha actualizado con éxito'));
                                return $this->redirect(['action' => 'viewImageSlider', '?' => ['Categoria' => 'Configuraciones', 'Context' => 'Admin']]);
                            } else {
                                //Mensaje de Error

                                $this->Flash->error(__('La Imagen no pudo ser eliminada. Intente nuevamente.'));
                            }

                        }
                    } else {
                        $file->close();
                        if ($this->saveLoadImage($this->request, $slider_home_model, $slider_home, $destination)){

                            $this->Flash->success(__('La Imagen se ha actualizado con éxito'));
                            return $this->redirect(['action' => 'viewImageSlider', '?' => ['Categoria' => 'Configuraciones', 'Context' => 'Admin']]);
                        } else {
                            //Mensaje de Error
                            $this->Flash->error(__('La Imagen no pudo ser eliminada. Intente nuevamente.'));
                        }
                    }

                } catch (Exception $e){
                    $this->Flash->error(__($e->getMessage()));
                    $this->Flash->error(__('La Imagen no pudo ser editada. Intente nuevamente.'));
                }

            } else {
                //NO selecciono ninguna imageny guardo
            }

        }

        $this->set(compact('slider_home'));
        $this->set('_serialize', ['slider_home']);


    }

    private function saveLoadImage($request = null, $model = null, $entity = null, $destination = null)
    {

        $data = $request->getData();
        $file = $data['file'];
        $new_name = $file['name']. date("F j, Y, g:i a");
        $name_sha = hash('sha256' , $new_name) . '_' . $file['name'];

        if (move_uploaded_file($file['tmp_name'], $destination.$name_sha)) {

            $entity->titulo = $data['titulo'];
            $entity->descripcion = $data['descripcion'];
            $entity->photo = $name_sha;
            $entity->photo_dir = $destination;

            if ($model->save($entity)){
                return true;
            } else {
                return false;
            }
        }

    }




    public function deleteImageSlider($id = null)
    {
        $slider_home_model = $this->loadModel('SliderHome');

        $this->request->allowMethod(['post', 'delete']);

        $slider_home = $slider_home_model->get($id);

        try{
            if ($slider_home_model->delete($slider_home)) {

                //Necesito eliminar tmb el archivo
                $file = new File($slider_home->photo_dir.$slider_home->photo);
                if($file->exists()){
                    $file->delete();
                }
                $file->close();

                $this->Flash->success(__('La Imagen ha sido eliminada.'));

                return $this->redirect(['action' => 'viewImageSlider', '?' => ['Categoria' => 'Configuraciones', 'Context' => 'Admin']]);
            } else {
                $this->Flash->error(__('La Imagen no pudo ser eliminada. Intente nuevamente.'));
            }
        }catch(\PDOException $e){
            $this->Flash->error(__($e->getMessage()));
            $this->Flash->error(__('La Imagen no pudo ser eliminada. Intente nuevamente.'));

            return $this->redirect(['action' => 'viewImageSlider', '?' => ['Categoria' => 'Configuraciones', 'Context' => 'Admin']]);
        }

    }

    public function showInSlider($id = null)
    {
        $slider_home_model = $this->loadModel('SliderHome');
        $this->request->allowMethod(['post', 'put', 'delete']);
        //Realizo un count de los activos para agregar al slider

        $query = $slider_home_model->find();
        $query->select(['count' => $query->func()->count('*')])
            ->where(['is_show' => true]);

        $res_count_slider = $query->toArray();
        $slider_count = $res_count_slider[0]['count'];

        $slider_home = $slider_home_model->get($id);
        //Solo procesa si es menor a 50
        if($slider_count < 50)
        {
            //AGREGAR a true
            $slider_home->is_show = true;
            if ($slider_home_model->save($slider_home)){
                $this->Flash->success(__('Se ha agregado la imagen al Slider'));
            } else {
                $this->Flash->error(__('Error. Intenta nuevamente'));
            }
        } else {
            $this->Flash->error(__('Solo se permiten 50 imágenes en el Slider'));
        }
        return $this->redirect(['action' => 'viewImageSlider', '?' => ['Categoria' => 'Configuraciones', 'Context' => 'Admin']]);
    }

    public function hideInSlider($id = null)
    {
        $slider_home_model = $this->loadModel('SliderHome');
        $this->request->allowMethod(['post', 'put', 'delete']);
        //Realizo un count de los activos para agregar al slider

        $query = $slider_home_model->find();
        $query->select(['count' => $query->func()->count('*')])
            ->where(['is_show' => true]);

        $res_count_slider = $query->toArray();
        $slider_count = $res_count_slider[0]['count'];

        $slider_home = $slider_home_model->get($id);

        $slider_home->is_show = false;
        if ($slider_home_model->save($slider_home)){
            $this->Flash->success(__('Se ha quitado la imagen al Slider'));
        } else {
            $this->Flash->error(__('Error. Intenta nuevamente'));
        }

        return $this->redirect(['action' => 'viewImageSlider', '?' => ['Categoria' => 'Configuraciones', 'Context' => 'Admin']]);

    }






}
