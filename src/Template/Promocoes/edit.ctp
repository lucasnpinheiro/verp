<h4 class="page-title"><?= __('Promoção') ?></h4>
<div class="card-box">
    <?= $this->Form->create($promoco) ?>
    <?php
    echo $this->Form->input('produto_id', ['options' => $produtos, 'div' => ['class' => 'col-xs-12']]);
    echo $this->Form->input('tipo_promocao', ['div' => ['class' => 'col-xs-4']]);
    echo $this->Form->input('valor_original', ['div' => ['class' => 'col-xs-4']]);
    echo $this->Form->input('valor_venda', ['div' => ['class' => 'col-xs-4']]);
    echo $this->Form->input('data_inicio', ['empty' => true, 'div' => ['class' => 'col-xs-4']]);
    echo $this->Form->input('data_fim', ['empty' => true, 'div' => ['class' => 'col-xs-4']]);
    echo $this->Form->status('status', ['div' => ['class' => 'col-xs-4']]);
    ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>