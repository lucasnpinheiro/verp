
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?= $this->fetch('title') ?></title>

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
        <?= $this->Html->css('/css/admin.css') ?>

        <?= $this->Html->script('/js/modernizr.min.js') ?>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?php echo $this->element('header'); ?>
    </head>


    <body>


        <!-- Navigation Bar-->
        <header id="topnav">
            <?php echo $this->element('/Painel/topo'); ?>


            <?php echo $this->element('/Painel/menu'); ?>
        </header>
        <!-- End Navigation Bar-->


        <!-- =======================
             ===== START PAGE ======
             ======================= -->

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <?= $this->Flash->render() ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <?= $this->fetch('content') ?>
                    </div>
                </div>
                <!-- Page-Title -->





                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                2016 © Minton.
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div> <!-- end container -->
        </div>
        <!-- End wrapper -->



        <!-- jQuery  -->
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
        <?= $this->Html->script('/js/mask-plugin.min.js') ?>
        <?= $this->Html->script('/js/jquery.maskedinput.min.js') ?>
        <?= $this->Html->script('/js/jquery.maskMoney.min.js') ?>
        <?= $this->Html->script('/js/funcoes.js') ?>

        <?= $this->fetch('script') ?>

    </body>
</html>