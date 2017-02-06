<h4 class="page-title"><?= __('Vendedor') ?></h4>
<div class="card-box">
    <?= $this->Form->create($vendedore, ['type' => 'file']) ?>
    <?php
    echo $this->Form->input('nome', ['div' => ['class' => 'col-xs-12']]);
    echo $this->Form->input('documento', ['div' => ['class' => 'col-xs-6']]);
    echo $this->Form->input('documento_estadual', ['div' => ['class' => 'col-xs-6']]);
    echo $this->Form->cep('cep', ['div' => ['class' => 'col-xs-3']]);
    echo $this->Form->input('logradouro', ['div' => ['class' => 'col-xs-7']]);
    echo $this->Form->input('numero', ['div' => ['class' => 'col-xs-2']]);
    echo $this->Form->input('complemento', ['div' => ['class' => 'col-xs-6']]);
    echo $this->Form->input('bairro', ['div' => ['class' => 'col-xs-6']]);
    echo $this->Form->input('cidade', ['div' => ['class' => 'col-xs-6']]);
    echo $this->Form->input('estado', ['div' => ['class' => 'col-xs-6']]);
    echo $this->Form->input('telefone1', ['div' => ['class' => 'col-xs-3']]);
    echo $this->Form->input('telefone2', ['div' => ['class' => 'col-xs-3']]);
    echo $this->Form->input('telefone3', ['div' => ['class' => 'col-xs-3']]);
    echo $this->Form->input('telefone4', ['div' => ['class' => 'col-xs-3']]);
    echo $this->Form->input('ponto_referencia', ['div' => ['class' => 'col-xs-12']]);
    
    echo $this->Form->input('email1', ['div' => ['class' => 'col-xs-4']]);
    echo $this->Form->input('email2', ['div' => ['class' => 'col-xs-4']]);
    echo $this->Form->input('email3', ['div' => ['class' => 'col-xs-4']]);
    echo $this->Form->input('site', ['div' => ['class' => 'col-xs-12']]);
    echo $this->Form->input('estado_civil', ['div' => ['class' => 'col-xs-4']]);
    echo $this->Form->input('casa_propria', ['div' => ['class' => 'col-xs-4']]);
    echo $this->Form->input('veiculo', ['div' => ['class' => 'col-xs-4']]);
    echo $this->Form->fileUpload('foto', ['path' => $vendedore->path, 'div' => ['class' => 'col-xs-12']]);
    ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>