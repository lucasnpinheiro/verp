<h4 class="page-title"><?= __('Administradores') ?></h4>
<div class="card-box">
    <table class="table table-condensed table-hover table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('foto') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($administradores as $administradore): ?>
                <tr>
                    <td class="text-center"><?= $this->Html->image($administradore->url, ['class' => 'image-foto']) ?></td>
                    <td><?= h($administradore->nome) ?></td>
                    <td><?= h($administradore->email) ?></td>
                    <td><?= $this->Number->status($administradore->status) ?></td>
                    <td><?= h($administradore->created) ?></td>
                    <td><?= h($administradore->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $administradore->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $administradore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $administradore->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->element('/Painel/paginacao'); ?>
</div>