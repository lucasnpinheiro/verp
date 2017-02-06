<h4 class="page-title"><?= __('Administrador') ?></h4>
<div class="card-box">
    <?= $this->Form->create($administradore, ['type' => 'file']) ?>
    <?php
    echo $this->Form->input('nome', ['div' => ['class' => 'col-xs-6']]);
    echo $this->Form->input('email', ['div' => ['class' => 'col-xs-6']]);
    echo $this->Form->input('senha', ['type' => 'password', 'div' => ['class' => 'col-xs-6']]);
    echo $this->Form->status('status', ['div' => ['class' => 'col-xs-6']]);
    echo $this->Form->fileUpload('foto', ['div' => ['class' => 'col-xs-12']]);
    ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>