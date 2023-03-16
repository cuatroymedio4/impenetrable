<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\EventInterface;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    public function beforeFilter(EventInterface  $event)
    {

        $this->Auth->allow(['register', 'login', 'logout']);
    }


    public function index()
    {

    }


    public function login()
    {


        if($this->request->is('post'))
        {

            //vALIDA LOS DATOS DEL USUARIO
            $user = $this->Auth->identify();

            if($user)
            {
                //Si estuvo ok setea al usuario en la session
                $this->Auth->setUser($user);


                return $this->redirect($this->Auth->redirectUrl());
            } else {
                //Si no inicio sessión mando el error solo se lana con la autentificacion
                $this->Flash->error(__('Datos ingresados no válidos'));
            }

        }
    }

    public function logout()
    {
        $session = $this->request->getSession();
        $session->delete('Datos');
        $session->delete('Maquinas');
        $session->delete('ResSimulacion');

        return $this->redirect($this->Auth->logout());

    }

    public function register()
    {

        $user = $this->Users->newEntity();

        //consulto si existe algun registro, si existe lo hago Admin
        $query = $this->Users->find();
        $query->select(['count' => $query->func()->count('*')]);
        $res_count_users = $query->toArray();
        $res_count = $res_count_users[0]['count'];

        if ($this->request->is('post')) {

            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user->active = false;
            if ($res_count == 0){
                $user->active = true;
                $user->role = 'Admin';
            }

            if ($this->Users->save($user)) {

                $this->Flash->success(__('El usuario ha sido almacenado correctamente'));

                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('Error al almacenar el usuario'));

            debug($user->getErrors());
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);

    }



    public function view()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }


    public function editUser()
    {

        //Recupero los datos de la URL
        $data_url = $this->request->getQuery();
        $action = $data_url['Accion'];
        $categoria= $data_url['Categoria'];
        $id = $data_url['id'];

        $session = $this->request->getSession();
        $user_rol = $session->read('Auth.User.role');


        $user = $this->Users->get($id, [
            'contain' => []
        ]);


        if ($this->request->is(['patch', 'post', 'put'])) {
            if($user_rol == 'admin'){
                $user = $this->Users->patchEntity($user, $this->request->getData());

                if($this->Users->save($user)){
                    $this->Flash->success(__('El usuario ha sido modificaco correctamente'));
                    return $this->redirect(['action' => 'view', '?' => ['Accion' => 'Ver Usuarios', 'Categoria' => 'Usuarios']]);

                } else {
                    $this->Flash->error(__('The user could not be saved. Please, try again.'));
                }

            }
        }


        //Opciones para usuario y administracion
        $type_user = array(
            'admin' => 'admin',
            'user' => 'user'
        );
        $this->set('type_user', $type_user);

        $this->set(compact('user'));
        $this->set('_serialize', ['user']);

    }


    public function deleteUser($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $user = $this->Users->get($id);

        try{
            if ($this->Users->delete($user)) {
                $this->Flash->success(__('El Usuario ha sido eliminado.'));
                return $this->redirect(['action' => 'view', '?' => ['Accion' => 'Ver Usuarios', 'Categoria' => 'Usuarios']]);
            } else {
                $this->Flash->error(__('El Usuario no pudo ser eliminada. Intente nuevamente.'));
            }
        }catch(\PDOException $e){
            $this->Flash->error(__($e->getMessage()));
            $this->Flash->error(__('El Usuario no pudo ser eliminado. Intente nuevamente.'));
            return $this->redirect(['action' => 'view', '?' => ['Accion' => 'Ver Usuarios', 'Categoria' => 'Usuarios']]);
        }


    }


}
