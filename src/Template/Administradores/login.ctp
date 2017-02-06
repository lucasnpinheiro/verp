
<div class="wrapper-page">

    <div class="text-center">
        <a href="<?php echo Cake\Routing\Router::url('/', true); ?>" class="logo logo-lg"><i class="zmdi zmdi-equalizer"></i> <span>Vitor ERP</span> </a>
    </div>



    <?= $this->Form->create(null) ?>
    <div class="row">
        <div class="col-sm-12">
            <?= $this->Flash->render() ?>
        </div>
    </div>
    <?php
    echo $this->Form->input('email', ['div' => ['class' => 'col-xs-12'], 'autofocus' => true]);
    echo $this->Form->input('senha', ['type' => 'password', 'div' => ['class' => 'col-xs-12']]);
    ?>
    <?= $this->Form->button(__('Log In')) ?>
    <?= $this->Form->end() ?>

</div>
