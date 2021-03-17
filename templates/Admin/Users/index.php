<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<?=$this->element('breadcrumbs',[
    'pageTitle'=>'Users',
]) ?>
<div class="row">
    <div class="col-12">
        <?= $this->Html->link(__('Add user'), ['action' => 'edit'], ['class' => 'btn btn-primary']) ?>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Users</strong>
            </div>

            <div class="table-stats table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="serial"><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('user_name','Username') ?></th>
                        <th><?= $this->Paginator->sort('created','Created') ?></th>
                        <th>Age</th>
                        <th>Phone</th>
                        <th class="actions" width="28%"><?= __('Actions') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <? foreach ($users as $user): ?>
                        <tr>
                            <td class="serial"><?= $this->Number->format($user->id) ?></td>
                            <td>
                                <?= $this->Html->link($user->user_name, ['action' => 'view', $user->id],['class'=> 'link']) ?>
                            </td>
                            <td><? if($user->created) echo h($user->created->format('d.m.Y H:i:s')) ?></td>
                            <td><?=$user->age?></td>
                            <td><?= h($user->phone_number) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id],['class'=>'btn btn-warning btn-sm']) ?>
                            </td>
                        </tr>
                    <? endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?=$this->element('paginator')?>
        </div>
    </div>
</div>