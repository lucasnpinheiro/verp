<h4 class="page-title"><?= __('Embalagens') ?></h4>
<div class="card-box">
    <table class="table table-condensed table-hover table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('embalagem') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($embalagens as $embalagen): ?>
                <tr>
                    <td><?= $this->Number->format($embalagen->id) ?></td>
                    <td><?= h($embalagen->embalagem) ?></td>
                    <td><?= h($embalagen->created) ?></td>
                    <td><?= h($embalagen->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $embalagen->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $embalagen->id], ['confirm' => __('Are you sure you want to delete # {0}?', $embalagen->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->element('/Painel/paginacao'); ?>
</div>