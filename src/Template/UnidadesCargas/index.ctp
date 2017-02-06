<h4 class="page-title"><?= __('Unidades Cargas') ?></h4>
<div class="card-box">
    <table class="table table-condensed table-hover table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('unidade_carga') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($unidadesCargas as $unidadesCarga): ?>
                <tr>
                    <td><?= $this->Number->format($unidadesCarga->id) ?></td>
                    <td><?= h($unidadesCarga->unidade_carga) ?></td>
                    <td><?= h($unidadesCarga->created) ?></td>
                    <td><?= h($unidadesCarga->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $unidadesCarga->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $unidadesCarga->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unidadesCarga->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->element('/Painel/paginacao'); ?>
</div>