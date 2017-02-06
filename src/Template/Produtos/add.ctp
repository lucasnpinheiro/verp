<h4 class="page-title"><?= __('Produto') ?></h4>
<div class="card-box">
    <?= $this->Form->create($produto, ['type' => 'file']) ?>
    <?php
    echo $this->Form->input('codigo', ['div' => ['class' => 'col-xs-4']]);
    echo $this->Form->input('nome', ['div' => ['class' => 'col-xs-8']]);
    echo $this->Form->input('grupo_id', ['options' => $grupos, 'empty' => true, 'div' => ['class' => 'col-xs-2']]);
    echo $this->Form->input('unidades_carga_id', ['options' => $unidadesCargas, 'empty' => true, 'div' => ['class' => 'col-xs-2']]);
    echo $this->Form->quantidade('peso', ['div' => ['class' => 'col-xs-2']]);
    echo $this->Form->input('icms_id', ['options' => $icms, 'empty' => true, 'div' => ['class' => 'col-xs-2']]);
    echo $this->Form->status('status', ['div' => ['class' => 'col-xs-2']]);
    echo $this->Form->input('impostos_origem_id', ['div' => ['class' => 'col-xs-2']]);
    echo $this->Form->moeda('varejo_valor_compra', ['div' => ['class' => 'col-xs-4']]);
    echo $this->Form->porcentagem('varejo_valor_lucro', ['div' => ['class' => 'col-xs-4']]);
    echo $this->Form->moeda('varejo_valor_venda', ['div' => ['class' => 'col-xs-4']]);
    echo $this->Form->quantidade('atacado_quantidade_minima', ['div' => ['class' => 'col-xs-4']]);
    echo $this->Form->porcentagem('atacado_valor_lucro', ['div' => ['class' => 'col-xs-4']]);
    echo $this->Form->moeda('atacado_valor_venda', ['div' => ['class' => 'col-xs-4']]);
    echo $this->Form->simNao('pratica_desconto', ['div' => ['class' => 'col-xs-3']]);
    echo $this->Form->moeda('valor_desconto', ['div' => ['class' => 'col-xs-3']]);
    echo $this->Form->moeda('media_venda_30_dias', ['div' => ['class' => 'col-xs-3']]);
    echo $this->Form->quantidade('estoque_atual', ['div' => ['class' => 'col-xs-3']]);
    echo $this->Form->input('descricao', ['div' => ['class' => 'col-xs-12']]);
    echo $this->Form->fileUpload('foto', ['div' => ['class' => 'col-xs-12']]);
    ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>