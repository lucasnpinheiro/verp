<h4 class="page-title"><?= __('Empresas') ?></h4>
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
            <?php foreach ($empresas as $empresa): ?>
                <tr>
                    <td><?= $this->Html->image($empresa->url, ['class' => 'img-responsive', 'style' => 'max-height: 50px;']) ?></td>
                    <td><?= h($empresa->nome) ?></td>
                    <td><?= h($empresa->documento) ?></td>
                    <td><?= h($empresa->logradouro) ?></td>
                    <td><?= h($empresa->numero) ?></td>
                    <td><?= h($empresa->telefone1) ?></td>
                    <td><?= h($empresa->telefone2) ?></td>

                    <td><?= h($empresa->email1) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empresa->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->element('/Painel/paginacao'); ?>
</div>