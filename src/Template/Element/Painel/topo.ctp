<div class="topbar-main">
    <div class="container">

        <!-- Logo container-->
        <div class="logo">
            <a href="<?php echo Cake\Routing\Router::url('/', true); ?>" class="logo"><i class="zmdi zmdi-equalizer"></i> <span>Vitor ERP</span> </a>
        </div>
        <!-- End Logo container-->

        <div class="menu-extras">

            <ul class="nav navbar-nav navbar-right pull-right">

                <li class="dropdown">

                    <a class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo $this->request->session()->read('Auth.User.url'); ?>" alt="user-img" class="img-circle"> </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'Administradores', 'action' => 'edit', $this->request->session()->read('Auth.User.id')]); ?>"><i class="ti-user m-r-5"></i> Profile</a></li>
                        <li><a href="<?php echo Cake\Routing\Router::url('/logout'); ?>"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>

            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

    </div>
</div>
<!-- End topbar -->