<h4 class="page-title"><?= __('Embalagem') ?></h4>
<div class="card-box">
    <?= $this->Form->create($embalagen) ?>
    <?php
    echo $this->Form->input('embalagem');
    ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>