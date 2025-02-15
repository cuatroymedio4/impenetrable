<!-- Navbar & Hero Start -->


<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-light navbar-impenetrable px-4 px-lg-5 py-3 py-lg-0 nav-backgorund">
        <a href="/impenetrable" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-tree me-2"></i><span class="fs-5">EL IMPENETRABLE</span></h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 nav-items">

                <?=  $this->Html->link(
                    'Usuarios',
                    ['controller' => 'Users', 'action' => 'view', '?' => ['Categoria' => 'Usuarios', 'Context' => 'Admin']],
                    ['class' => 'dnav-item nav-link', 'id' => "li_admin_Usuarios"]
                );
                ?>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="li_Configuraciones">Configuraciones</a>
                    <div class="dropdown-menu m-0">
                        <?=  $this->Html->link(
                            'Slider Home',
                            ['controller' => 'Configuraciones', 'action' => 'viewImageSlider', '?' => ['Categoria' => 'Configuraciones', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']);
                        ?>

                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="li_Timeline">Timeline</a>
                    <div class="dropdown-menu m-0">
                        <?=  $this->Html->link(
                            'Lista de eventos',
                            ['controller' => 'Timeline', 'action' => 'index', '?' => ['Categoria' => 'Timeline', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>

                        <?=  $this->Html->link(
                            'Nuevo evento',
                            ['controller' => 'Timeline', 'action' => 'add', '?' => ['Categoria' => 'Timeline', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>

                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="li_admin_Documentacion">Documentación</a>
                    <div class="dropdown-menu m-0">
                        <?=  $this->Html->link(
                            'Lista de Archivos',
                            ['controller' => 'Documentacion', 'action' => 'view', '?' => ['Categoria' => 'Documentacion', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>

                        <?=  $this->Html->link(
                            'Nuevo Archivo',
                            ['controller' => 'Documentacion', 'action' => 'add', '?' => ['Categoria' => 'Documentacion', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>

                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="li_admin_Mapainteractive">Mapa Interactivo</a>
                    <div class="dropdown-menu m-0">
                        <?=  $this->Html->link(
                            'Localidades',
                            ['controller' => 'Localidades', 'action' => 'index', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>

                        <?=  $this->Html->link(
                            'Puntos de Interes',
                            ['controller' => 'PuntosInteres', 'action' => 'index', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>

                    </div>
                </div>

                <a href="contact.html" class="nav-item nav-link">Contacto</a>
            </div>
        </div>
    </nav>
</header>

<!-- Navbar & Hero End -->
