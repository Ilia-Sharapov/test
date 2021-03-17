<?php
declare(strict_types=1);

namespace App\Controller\Admin;
use App\Controller\UsersController as BaseController;
use Cake\Collection\Collection;
use Cake\Http\Response;

class UsersController extends BaseController {
    public function initialize(): void
    {
        parent::initialize();
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $users = $this->paginate($this->Users->find(),[
            'order'=>['id'=>'DESC'],
            'limit'=>20
        ]);
        $this->set(compact('users'));
    }

    /**
     * Edit method
     *
     * @param string|null|int $userId User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($userId = 0)
    {
        if($userId) {
            $user = $this->Users->get($userId, [
                'contain' => ['Skills'],
            ]);
        }
        else {
            $user = $this->Users->newEmptyEntity();
        }
        if ($this->request->is(['patch', 'post', 'put'])) {

            $user = $this->Users->patchEntity($user, $this->request->getData(),[
                //'validate'=>'edit',
            ]);

            if ($this->Users->save($user)) {
                $this->Flash->success(__('Saved successfully'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Error has occurred. Try later'));
        }

        $skills = $this->Users->Skills->find('list')->toArray();
        $this->set(compact('user','userId','skills'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($userId = 0)
    {
        $user = $this->Users->get($userId, [
            'contain' => ['Skills'],
        ]);
        $this->set(compact('user'));
    }
}