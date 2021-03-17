<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('Предыдущая')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('Следующая') . ' >') ?>
    </ul>
</div>