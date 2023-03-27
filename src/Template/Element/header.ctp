<!-- Navbar & Hero Start -->


<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-light navbar-impenetrable px-4 px-lg-5 py-3 py-lg-0 nav-backgorund">
        <a href="/impenetrable" class="navbar-brand p-0">
            <!-- <h1 class="m-0"><i class="fa fa-tree me-2"></i><span class="fs-5">EL IMPENETRABLE</span></h1>-->
            <img id="logo" src="../img/logo-impenetrable-blanco.png" alt="Logo"> 
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

                        <?=  $this->Html->link(
                            'Integrantes',
                            ['controller' => 'Integrantes', 'action' => 'index', '?' => ['Categoria' => 'Integrantes']],
                            ['class' => 'dropdown-item']
                             );
                        ?>

                    </div>
                </div>

                <?=  $this->Html->link(
                    'Línea Histórica',
                    ['controller' => 'Timeline', 'action' => 'view', '?' => ['Categoria' => 'Timeline']],
                    ['class' => 'dnav-item nav-link', 'id' => "li_Timeline"]
                );
                ?>

                <?=  $this->Html->link(
                    'Novedades',
                    ['controller' => 'Novedades', 'action' => 'index', '?' => ['Categoria' => 'Integrantes']],
                    ['class' => 'dnav-item nav-link', 'id' => "li_Novedades"]
                );
                ?>

                <?=  $this->Html->link(
                    'Documentación',
                    ['controller' => 'Documentacion', 'action' => 'index', '?' => ['Categoria' => 'Documentacion']],
                    ['class' => 'dnav-item nav-link', 'id' => "li_Documentacion"]
                );
                ?>

                <?=  $this->Html->link(
                    'Cartografía',
                    ['controller' => 'Cartography', 'action' => 'index', '?' => ['Categoria' => 'Cartography']],
                    ['class' => 'dnav-item nav-link', 'id' => "li_Cartography"]
                );
                ?>
                <a href="contact.html" class="nav-item nav-link">Contacto</a>
            </div>
        </div>
    </nav>
    <script>
        $(function(){
        $(document).scroll(function(){
            if($(this).scrollTop() > 1) {
                $('#logo').attr('src','img/logo-impenetrable.png')
            }
            if($(this).scrollTop() < 1) {        
             $('#logo').attr('src','img/logo-impenetrable-blanco.png');
            }
        });
    });
    $(function(){
    $(window).on("resize", function(){
          if($(window).width() < 720){
              $('#logo').attr("src","img/logo-impenetrable.png");
          }
          else{
              $('#logo').attr("src","img/logo-impenetrable-blanco.png");
          }
        })
    });
    </script>
</header>

<!-- Navbar & Hero End -->
