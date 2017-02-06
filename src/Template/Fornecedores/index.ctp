<h4 class="page-title"><?= __('Fornecedores') ?></h4>
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
            <?php foreach ($fornecedores as $fornecedore): ?>
                <tr>
                    <td><?= $this->Html->image($fornecedore->url, ['class' => 'img-responsive', 'style' => 'max-height: 50px;']) ?></td>
                    <td><?= h($fornecedore->nome) ?></td>
                    <td><?= h($fornecedore->documento) ?></td>
                    <td><?= h($fornecedore->logradouro) ?></td>
                    <td><?= h($fornecedore->numero) ?></td>
                    <td><?= h($fornecedore->telefone1) ?></td>
                    <td><?= h($fornecedore->telefone2) ?></td>
                    <td><?= h($fornecedore->email1) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fornecedore->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fornecedore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fornecedore->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->element('/Painel/paginacao'); ?>
</div>