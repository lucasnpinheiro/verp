<h4 class="page-title"><?= __('Produtos') ?></h4>
<div class="card-box">
    <table class="table table-condensed table-hover table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('foto') ?></th>
                <th><?= $this->Paginator->sort('codigo') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('grupo_id') ?></th>
                <th><?= $this->Paginator->sort('unidades_carga_id', 'Carga') ?></th>
                <th><?= $this->Paginator->sort('peso') ?></th>
                <th><?= $this->Paginator->sort('varejo_valor_venda', 'Venda') ?></th>
                <th><?= $this->Paginator->sort('atacado_valor_venda', 'Atacado Venda') ?></th>
                
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td><?= $this->Html->image($produto->url, ['class' => 'img-responsive', 'style' => 'max-height: 50px;']) ?></td>
                    <td><?= h($produto->codigo) ?></td>
                    <td><?= h($produto->nome) ?></td>
                    <td><?= $produto->has('grupo') ? $this->Html->link($produto->grupo->grupo, ['controller' => 'Grupos', 'action' => 'edit', $produto->grupo->id]) : '' ?></td>
                    <td><?= $produto->has('unidades_carga') ? $this->Html->link($produto->unidades_carga->unidade_carga, ['controller' => 'UnidadesCargas', 'action' => 'edit', $produto->unidades_carga->id]) : '' ?></td>
                    <td><?= $this->Number->format($produto->peso) ?></td>
                    <td><?= $this->Number->currency($produto->varejo_valor_venda) ?></td>
                    <td><?= $this->Number->currency($produto->atacado_valor_venda) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $produto->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->element('/Painel/paginacao'); ?>
</div>