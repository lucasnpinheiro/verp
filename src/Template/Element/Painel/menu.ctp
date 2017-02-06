<!-- Navbar Start -->

<?php

function statusCssAtivo($controller, $_req) {
    if (is_string($controller)) {
        return ($controller == $_req->params['controller']) ? 'active' : '';
    }

    foreach ($controller as $key => $value) {
        if ($value) {
            return ($controller == $_req->params['controller']) ? 'active' : '';
        }
    }

    return '';
}
?>

<div class="navbar-custom">
    <div class="container">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li class="has-submenu <?php echo statusCssAtivo('Dashboard', $this->request); ?>">
                    <a href="<?php echo Cake\Routing\Router::url('/', true); ?>"><i class="zmdi zmdi-dashboard"></i>Dashboard</a>
                </li>
                <li class="has-submenu <?php echo statusCssAtivo('Clientes', $this->request); ?>">
                    <a href="<?php echo Cake\Routing\Router::url(['controller' => 'Clientes', 'action' => 'index'], true); ?>"><i class="zmdi zmdi-color-lens"></i>Clientes</a>
                    <ul class="submenu">
                        <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'Clientes', 'action' => 'index'], true); ?>">Consultar</a></li>
                        <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'Clientes', 'action' => 'add'], true); ?>">Cadastrar</a></li>
                    </ul>
                </li>
                <li class="has-submenu <?php echo statusCssAtivo('Empresas', $this->request); ?>">
                    <a href="<?php echo Cake\Routing\Router::url(['controller' => 'Empresas', 'action' => 'index'], true); ?>"><i class="zmdi zmdi-color-lens"></i>Empresas</a>
                    <ul class="submenu">
                        <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'Empresas', 'action' => 'index'], true); ?>">Consultar</a></li>
                        <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'Empresas', 'action' => 'add'], true); ?>">Cadastrar</a></li>
                    </ul>
                </li>
                <li class="has-submenu <?php echo statusCssAtivo('Fornecedores', $this->request); ?>">
                    <a href="<?php echo Cake\Routing\Router::url(['controller' => 'Fornecedores', 'action' => 'index'], true); ?>"><i class="zmdi zmdi-color-lens"></i>Fornecedores</a>
                    <ul class="submenu">
                        <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'Fornecedores', 'action' => 'index'], true); ?>">Consultar</a></li>
                        <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'Fornecedores', 'action' => 'add'], true); ?>">Cadastrar</a></li>
                    </ul>
                </li>
                <li class="has-submenu <?php echo statusCssAtivo('Vendedores', $this->request); ?>">
                    <a href="<?php echo Cake\Routing\Router::url(['controller' => 'Vendedores', 'action' => 'index'], true); ?>"><i class="zmdi zmdi-color-lens"></i>Vendedores</a>
                    <ul class="submenu">
                        <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'Vendedores', 'action' => 'index'], true); ?>">Consultar</a></li>
                        <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'Vendedores', 'action' => 'add'], true); ?>">Cadastrar</a></li>
                    </ul>
                </li>
                <li class="has-submenu <?php echo statusCssAtivo(['Produtos', 'Promocoes'], $this->request); ?>">
                    <a href="<?php echo Cake\Routing\Router::url(['controller' => 'Produtos', 'action' => 'index'], true); ?>"><i class="zmdi zmdi-color-lens"></i>Produtos</a>
                    <ul class="submenu">
                        <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'Produtos', 'action' => 'index'], true); ?>">Consultar</a></li>
                        <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'Produtos', 'action' => 'add'], true); ?>">Cadastrar</a></li>
                        <li class="has-submenu">
                            <a href="<?php echo Cake\Routing\Router::url(['controller' => 'Promocoes', 'action' => 'index'], true); ?>"><i class="zmdi zmdi-color-lens"></i>Promoções</a>
                            <ul class="submenu">
                                <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'Promocoes', 'action' => 'index'], true); ?>">Consultar</a></li>
                                <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'Promocoes', 'action' => 'add'], true); ?>">Cadastrar</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>



                <li class="has-submenu <?php echo statusCssAtivo(['Embalagens', 'Grupos', 'Icms', 'ImpostosOrigens', 'UnidadesCargas'], $this->request); ?>">
                    <a><i class="zmdi zmdi-class"></i>Extra</a>
                    <ul class="submenu">
                        <li class="has-submenu">
                            <a href="<?php echo Cake\Routing\Router::url(['controller' => 'Embalagens', 'action' => 'index'], true); ?>"><i class="zmdi zmdi-color-lens"></i>Embalagens</a>
                            <ul class="submenu">
                                <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'Embalagens', 'action' => 'index'], true); ?>">Consultar</a></li>
                                <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'Embalagens', 'action' => 'add'], true); ?>">Cadastrar</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="<?php echo Cake\Routing\Router::url(['controller' => 'Grupos', 'action' => 'index'], true); ?>"><i class="zmdi zmdi-color-lens"></i>Grupos</a>
                            <ul class="submenu">
                                <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'Grupos', 'action' => 'index'], true); ?>">Consultar</a></li>
                                <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'Grupos', 'action' => 'add'], true); ?>">Cadastrar</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="<?php echo Cake\Routing\Router::url(['controller' => 'Icms', 'action' => 'index'], true); ?>"><i class="zmdi zmdi-color-lens"></i>ICMS</a>
                            <ul class="submenu">
                                <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'Icms', 'action' => 'index'], true); ?>">Consultar</a></li>
                                <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'Icms', 'action' => 'add'], true); ?>">Cadastrar</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="<?php echo Cake\Routing\Router::url(['controller' => 'ImpostosOrigens', 'action' => 'index'], true); ?>"><i class="zmdi zmdi-color-lens"></i>Impostos Origem</a>
                            <ul class="submenu">
                                <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'ImpostosOrigens', 'action' => 'index'], true); ?>">Consultar</a></li>
                                <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'ImpostosOrigens', 'action' => 'add'], true); ?>">Cadastrar</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="<?php echo Cake\Routing\Router::url(['controller' => 'UnidadesCargas', 'action' => 'index'], true); ?>"><i class="zmdi zmdi-color-lens"></i>Unidades de Cargas</a>
                            <ul class="submenu">
                                <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'UnidadesCargas', 'action' => 'index'], true); ?>">Consultar</a></li>
                                <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'UnidadesCargas', 'action' => 'add'], true); ?>">Cadastrar</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu <?php echo statusCssAtivo('Administradores', $this->request); ?>">
                    <a href="<?php echo Cake\Routing\Router::url(['controller' => 'Administradores', 'action' => 'index'], true); ?>"><i class="zmdi zmdi-color-lens"></i>Administradores</a>
                    <ul class="submenu">
                        <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'Administradores', 'action' => 'index'], true); ?>">Consultar</a></li>
                        <li><a href="<?php echo Cake\Routing\Router::url(['controller' => 'Administradores', 'action' => 'add'], true); ?>">Cadastrar</a></li>
                    </ul>
                </li>
            </ul>
            <!-- End navigation menu -->
        </div> <!-- end #navigation -->
    </div> <!-- end container -->
</div> <!-- end navbar-custom -->