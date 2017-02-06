<h4 class="page-title"><?= __('Unidades Carga') ?></h4>
<div class="card-box">
    <?= $this->Form->create($unidadesCarga) ?>
    <?php
    echo $this->Form->input('unidade_carga', ['div' => ['class' => 'col-xs-12']]);
    ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>