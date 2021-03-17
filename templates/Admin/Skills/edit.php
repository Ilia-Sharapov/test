<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Skill $skill
 */
?>
<?=$this->element('breadcrumbs',[
    'pageTitle'=>$skill->name,
    'links'=> [
        [
            'title'=>'Skills',
            'link'=>$this->Url->build(['action'=>'index'])
        ],
    ],
    'current'=>$skill->name
]) ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <?= $this->BootstrapForm->create($skill,[
                    'templates'=> 'bootstrap_inline_form',
                    'id'=>'editForm',
                ]) ?>

                <?= $this->BootstrapForm->control('name', ['class' => 'form-control','required'=>true,
                    'label' => 'Name']) ?>

                <?= $this->BootstrapForm->submit(__('Save'), ['class' => 'btn btn-primary pull-left']); ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $skill->id],
                    ['confirm' => __('Do you really want to remove skill {0}?',$skill->name),'class'=>'btn btn-danger pull-right','block'=>true]) ?>

                <?= $this->BootstrapForm->end() ?>
            </div>
        </div>
    </div>
</div>