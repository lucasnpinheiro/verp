<h4 class="page-title"><?= __('Icms') ?></h4>
<div class="card-box">
    <table class="table table-condensed table-hover table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('icms') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($icms as $icm): ?>
                <tr>
                    <td><?= $this->Number->format($icm->id) ?></td>
                    <td><?= h($icm->icms) ?></td>
                    <td><?= h($icm->created) ?></td>
                    <td><?= h($icm->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'edit', $icm->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $icm->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $icm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $icm->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->element('/Painel/paginacao'); ?>
</div>