<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Skill[] $skills
 */
?>
<?=$this->element('breadcrumbs',[
    'pageTitle'=>'Skills',
]) ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="add-material">
                    <?= $this->BootstrapForm->create($newSkill,[
                            'url'=>['action'=>'edit']
                    ]) ?>
                    <fieldset>
                        <legend>Add skill</legend>
                        <div class="form-group form-row">
                            <?= $this->BootstrapForm->input('name',['class'=>'form-control-lg form-control col-sm-9 col-8']) ?>
                            <?= $this->BootstrapForm->button('Save',['type'=>'submit','class'=>'btn btn-primary btn-lg col-sm-3 col-4']) ?>
                        </div>
                    </fieldset>

                    <?= $this->BootstrapForm->end() ?>
                </div>

                <table class="table table-striped materials-table">
                    <thead>
                    <th>#</th>
                    <th>Skill name</th>
                    </thead>
                    <tbody>
                    <? $counter = 0; foreach ($skills as $skill):?>
                        <tr >
                            <td><?=++$counter;?></td>
                            <td>
                                <?=$this->Html->link($skill->name,['action'=>'edit',$skill->id],['class'=>'link'])?>
                            </td>
                        </tr>
                    <? endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>