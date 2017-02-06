<h4 class="page-title"><?= __('Grupo') ?></h4>
<div class="card-box">
    <?= $this->Form->create($grupo) ?>
    <?php
    echo $this->Form->input('grupo', ['div' => ['class' => 'col-xs-12']]);
    ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>