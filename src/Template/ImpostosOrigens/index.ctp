<h4 class="page-title"><?= __('Impostos Origens') ?></h4>
<div class="card-box">
    <table class="table table-condensed table-hover table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('imposto_origem') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($impostosOrigens as $impostosOrigen): ?>
                <tr>
                    <td><?= h($impostosOrigen->imposto_origem) ?></td>
                    <td><?= h($impostosOrigen->created) ?></td>
                    <td><?= h($impostosOrigen->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $impostosOrigen->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $impostosOrigen->id], ['confirm' => __('Are you sure you want to delete # {0}?', $impostosOrigen->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->element('/Painel/paginacao'); ?>
</div>