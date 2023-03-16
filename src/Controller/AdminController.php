<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Admin Controller
 *
 */
class AdminController extends AppController
{

    public function isAuthorized($user)
    {

        if(isset($user['role']) and $user['role'] === 'user')
        {
            if(in_array($this->request->getParam('action'), ['index']))
            {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }

    public function index()
    {

    }

}
