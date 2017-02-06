<h4 class="page-title"><?= __('ICMS') ?></h4>
<div class="card-box">
    <?= $this->Form->create($icm) ?>
    <?php
    echo $this->Form->input('icms', ['div' => ['class' => 'col-xs-12']]);
    ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>