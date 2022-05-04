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
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="li_Proyecto">Otra cosa</a>
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
                    'Timeline',
                    ['controller' => 'Timeline', 'action' => 'index', '?' => ['Categoria' => 'Timeline', 'Context' => 'Admin']],
                    ['class' => 'dnav-item nav-link', 'id' => "li_admin_Timeline"]
                );
                ?>

                <a href="service.html" class="nav-item nav-link">Documentación</a>
                <a href="project.html" class="nav-item nav-link">Cartografía</a>
                <a href="contact.html" class="nav-item nav-link">Contacto</a>
            </div>
        </div>
    </nav>
</header>

<!-- Navbar & Hero End -->
