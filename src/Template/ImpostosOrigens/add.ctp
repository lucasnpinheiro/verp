<h4 class="page-title"><?= __('Impostos Origem') ?></h4>
<div class="card-box">
    <?= $this->Form->create($impostosOrigen) ?>
    <?php
    echo $this->Form->input('imposto_origem', ['div' => ['class' => 'col-xs-12']]);
    ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>