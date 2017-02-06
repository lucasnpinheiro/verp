<h4 class="page-title"><?= __('Vendedores') ?></h4>
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
            <?php foreach ($vendedores as $vendedore): ?>
                <tr>
                    <td><?= $this->Html->image($vendedore->url, ['class' => 'img-responsive', 'style' => 'max-height: 50px;']) ?></td>
                    <td><?= h($vendedore->nome) ?></td>
                    <td><?= h($vendedore->documento) ?></td>
                    <td><?= h($vendedore->logradouro) ?></td>
                    <td><?= h($vendedore->numero) ?></td>
                    <td><?= h($vendedore->telefone1) ?></td>
                    <td><?= h($vendedore->telefone2) ?></td>
                    <td><?= h($vendedore->email1) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vendedore->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vendedore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendedore->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->element('/Painel/paginacao'); ?>
</div>