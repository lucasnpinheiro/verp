<h4 class="page-title"><?= __('Promocoes') ?></h4>
<div class="card-box">
    <table class="table table-condensed table-hover table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('produto_id') ?></th>
                <th><?= $this->Paginator->sort('tipo_promocao') ?></th>
                <th><?= $this->Paginator->sort('valor_original') ?></th>
                <th><?= $this->Paginator->sort('valor_venda') ?></th>
                <th><?= $this->Paginator->sort('data_inicio') ?></th>
                <th><?= $this->Paginator->sort('data_fim') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($promocoes as $promoco): ?>
                <tr>
                    <td><?= $promoco->has('produto') ? $this->Html->link($promoco->produto->nome, ['controller' => 'Produtos', 'action' => 'edit', $promoco->produto->id]) : '' ?></td>
                    <td><?= $this->Number->format($promoco->tipo_promocao) ?></td>
                    <td><?= $this->Number->format($promoco->valor_original) ?></td>
                    <td><?= $this->Number->format($promoco->valor_venda) ?></td>
                    <td><?= h($promoco->data_inicio) ?></td>
                    <td><?= h($promoco->data_fim) ?></td>
                    <td><?= $this->Number->status($promoco->status) ?></td>
                    <td><?= h($promoco->created) ?></td>
                    <td><?= h($promoco->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $promoco->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $promoco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $promoco->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->element('/Painel/paginacao'); ?>
</div>