<h4 class="page-title"><?= __('Clientes') ?></h4>
<div class="card-box">
    <table class="table table-condensed table-hover table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('foto') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('documento') ?></th>
                <th><?= $this->Paginator->sort('logradouro') ?></th>
                <th><?= $this->Paginator->sort('numero') ?></th>
                <th><?= $this->Paginator->sort('telefone1') ?></th>
                <th><?= $this->Paginator->sort('telefone2') ?></th>
                <th><?= $this->Paginator->sort('email1') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?= $this->Html->image($cliente->url, ['class' => 'img-responsive', 'style' => 'max-height: 50px;']) ?></td>
                    <td><?= h($cliente->nome) ?></td>
                    <td><?= h($cliente->documento) ?></td>
                    <td><?= h($cliente->logradouro) ?></td>
                    <td><?= h($cliente->numero) ?></td>
                    <td><?= h($cliente->telefone1) ?></td>
                    <td><?= h($cliente->telefone2) ?></td>
                    <td><?= h($cliente->email1) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->element('/Painel/paginacao'); ?>
</div>