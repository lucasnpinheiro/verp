
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <title>Login - Vitor ERP</title>
       <?= $this->Html->css('/css/bootstrap.min.css') ?>
        <?= $this->Html->css('/css/core.css') ?>
        <?= $this->Html->css('/css/components.css') ?>
        <?= $this->Html->css('/css/font-awesome.min.css') ?>
        <?= $this->Html->css('/css/ionicons.min.css') ?>
        <?= $this->Html->css('/css/material-design-iconic-font.min.css') ?>
        <?= $this->Html->css('/css/themify-icons.css') ?>
        <?= $this->Html->css('/css/pages.css') ?>
        <?= $this->Html->css('/css/menu.css') ?>
        <?= $this->Html->css('/css/responsive.css') ?>
        <?= $this->Html->css('/css/login.css') ?>

        <?= $this->Html->script('/js/modernizr.min.js') ?>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?php echo $this->element('header'); ?>


    </head>
    <body>


        <?= $this->fetch('content') ?>


        <script>
            var resizefunc = [];
        </script>

        <!-- Main  -->
        <?= $this->Html->script('/js/jquery.min.js') ?>
        <?= $this->Html->script('/js/bootstrap.min.js') ?>
        <?= $this->Html->script('/js/detect.js') ?>
        <?= $this->Html->script('/js/fastclick.js') ?>
        <?= $this->Html->script('/js/jquery.blockUI.js') ?>
        <?= $this->Html->script('/js/waves.js') ?>
        <?= $this->Html->script('/js/wow.min.js') ?>
        <?= $this->Html->script('/js/jquery.nicescroll.js') ?>
        <?= $this->Html->script('/js/jquery.scrollTo.min.js') ?>
        <?= $this->Html->script('/js/jquery.core.js') ?>
        <?= $this->Html->script('/js/jquery.app.js') ?>

        <?= $this->fetch('script') ?>

    </body>
</html>
