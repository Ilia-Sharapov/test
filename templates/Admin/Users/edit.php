<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?=$this->element('breadcrumbs',[
    'pageTitle'=>$userId ? 'Edit user' : 'Add user',
    'links'=> [
        [
                'title'=>'Users',
                'link'=>['controller'=>'Users','action'=>'index']
        ]
    ],
    'current'=> $userId ? 'Edit' : 'Create'
]) ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <?= $this->BootstrapForm->create($user,[
                        'templates'=> 'bootstrap_inline_form',
                        'id'=>'editUser',
                        'class'=>'user-edit-form fileupload-remove'
                ]) ?>
                <fieldset>

                    <?= $this->BootstrapForm->control('user_name', ['required' => true, 'class' => 'form-control','autocomplete'=>'off',
                        'label' => 'Username']) ?>

                    <?= $this->BootstrapForm->control('age', ['class' => 'form-control',
                        'label' => 'Age']) ?>

                    <?= $this->BootstrapForm->control('phone_number', ['class' => 'form-control',
                        'label' => 'Phone']) ?>

                </fieldset>

                <fieldset>
                    <legend>Skills</legend>

                    <?=$this->BootstrapForm->hidden('skills._ids',['value'=>''])?>
                    <?= $this->BootstrapForm->control('skills._ids', ['type'=>'select','class' => 'form-control',
                        'label' => 'Skills','options'=>$skills,'multiple'=>true,'hiddenField'=>false]) ?>
                </fieldset>

                <?= $this->BootstrapForm->submit(__('Save'), ['class' => 'btn btn-primary']); ?>

                <?= $this->BootstrapForm->end() ?>
            </div>
        </div>
    </div>
</div>