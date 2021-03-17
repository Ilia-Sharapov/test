<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Http\Exception\NotFoundException;

/**
 * Class SkillsController
 * @property \App\Model\Table\SkillsTable $Skills
 * @package App\Controller\Admin
 */
class SkillsController extends AppController {
    public function index()
    {
        $newSkill = $this->Skills->newEmptyEntity();
        $skills = $this->Skills->find();
        $this->set(compact('newSkill','skills'));
    }

    public function edit($id = 0)
    {
        if($id) $skill = $this->Skills->get($id);
        else $skill = $this->Skills->newEmptyEntity();

        if ($this->request->is(['patch', 'post', 'put'])) {
            $skill = $this->Skills->patchEntity($skill, $this->request->getData());
            if ($this->Skills->save($skill)) {
                $this->Flash->success(__('Skill saved successfully'));
            } else $this->Flash->error("Error has occurred");
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('id','skill'));
    }

    public function delete($id = 0)
    {
        $this->request->allowMethod(['post', 'delete']);

        $skill = $this->Skills->get($id);
        if ($this->Skills->delete($skill)) {
            $this->Flash->success(__('Skill was removed'));
        } else {
            $this->Flash->error(__('Error has occurred'));
        }
        return $this->redirect(['action'=>'index']);
    }
}