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

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="li_Proyecto">El Proyecto</a>
                    <div class="dropdown-menu m-0">
                        <?=  $this->Html->link(
                            'Objetivos',
                            ['controller' => 'Proyecto', 'action' => 'Objetivos', '?' => ['Categoria' => 'Proyecto']],
                            ['class' => 'dropdown-item']);
                        ?>

                        <a href="testimonial.html" class="dropdown-item">Fundamentación</a>
                        <a href="team.html" class="dropdown-item">Lineas de Investigación</a>
                        <a href="testimonial.html" class="dropdown-item">Fuentes</a>
                    </div>
                </div>

                <?=  $this->Html->link(
                    'Línea Histórica',
                    ['controller' => 'Timeline', 'action' => 'view', '?' => ['Categoria' => 'Timeline']],
                    ['class' => 'dnav-item nav-link', 'id' => "li_Timeline"]
                );
                ?>

                <?=  $this->Html->link(
                    'Integrantes',
                    ['controller' => 'Integrantes', 'action' => 'index', '?' => ['Categoria' => 'Integrantes']],
                    ['class' => 'dnav-item nav-link', 'id' => "li_Integrantes"]
                );
                ?>

                <?=  $this->Html->link(
                    'Documentación',
                    ['controller' => 'Documentacion', 'action' => 'index', '?' => ['Categoria' => 'Documentacion']],
                    ['class' => 'dnav-item nav-link', 'id' => "li_Documentacion"]
                );
                ?>
                <a href="project.html" class="nav-item nav-link">Cartografía</a>
                <a href="contact.html" class="nav-item nav-link">Contacto</a>
            </div>
        </div>
    </nav>
</header>

<!-- Navbar & Hero End -->
