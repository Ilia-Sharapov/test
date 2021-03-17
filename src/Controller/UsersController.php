<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    protected $methodWithoutAuth = ['login'];

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
    }

    public function login()
    {
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            // redirect to /articles after login success
            $redirect = $this->request->getQuery('redirect', [
                'controller' => 'Users',
                'action' => 'index',
                'prefix'=>'Admin'
            ]);

            return $this->redirect($redirect);
        }
        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid credentials'));
        }

        $this->viewBuilder()->setLayout('login');
    }

    public function logout()
    {
        $this->Authentication->logout();
        return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    }

    public function usersList()
    {
        $users = $this->Users->find();
        $this->set(compact('users'));
        $this->viewBuilder()->setClassName('Json')->setOption('serialize', 'users');
    }

    public function userDetails($id = 0)
    {
        $user = $this->Users->get($id,['contain'=>['Skills']]);
        $this->set(compact('user'));
        $this->viewBuilder()->setClassName('Json')->setOption('serialize', 'user');
    }
}
