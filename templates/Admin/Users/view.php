<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

?>
<?= $this->element('breadcrumbs', [
    'pageTitle' => $user->user_name,
    'links' => [
        [
            'title' => 'Users',
            'link' => ['controller' => 'Users', 'action' => 'index']
        ]
    ],
    'current' => 'id #' . $user->id
]) ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                    <?= $this->Html->link('Edit', ['controller' => 'Users', 'action' => 'edit', $user->id], ['class' => 'btn btn-warning']) ?>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-12">
                        <div class="table-stats ov-h">
                            <table class="table">
                                <tr>
                                    <td>Username:</td>
                                    <td><?= h($user->user_name) ?></td>
                                </tr>
                                <tr>
                                    <td>Phone:</td>
                                    <td><?= h($user->phone_number) ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>