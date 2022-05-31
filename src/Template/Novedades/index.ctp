



<?= $this->element('header')?>



    <div class="container-xxl mb-5">

        <div class="row py-5 landing-inte-back">
            <div class="col-xs-5 col-md-5 col-lg-5 valign-center" style="text-align: center; display:table">
                <h1 class="wow zoomIn" style="vertical-align: middle; color: #198754; margin-top: 30%;">
                    Novedades
                </h1>

                <p class="wow zoomIn" style="vertical-align: middle; color: #198754;">
                   En esta sección te contamos todas nuestras actividades: reuniones, talleres, salidas a campo, publicaciones, etc.
                </p>

            </div>
            <div class="col-xs-7 col-md-7 col-lg-7 valign-center">
                <?=  $this->Html->image('novedades.svg', ['alt' => 'CakePHP', 'class' => 'img-fluid img-landing-int wow zoomIn']); ?>
            </div>
        </div>

    </div>

    <div class="container-xxl py-5 mb-5">

        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="mt-2 text-success">Integrantes</h2>
        </div>

    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5 d-flex justify-content-center text-center">

            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=43252&amp;datos_academicos=yes&amp;keywords=iighi" target="_blank" rel="noopener">
                                <img class="foto img-thumbnail img-circle"
                                     src="https://iighi.conicet.gov.ar/wp-content/uploads/sites/29/2020/02/RRHH_maria_laura_salinas-150x150.jpg"
                                     alt="Salinas, María Laura" style="height: 165px;">
                            </a>
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Salinas, María Laura</h4>
                                <p class="text-secondary mb-1">Investigadora Responsable</p>
                                <p class="text-muted font-size-sm">Investigador/a Adjunto - CONICET</p>
                                <p class="text-success font-size-sm">marlausali@gmail.com</p>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-twitter', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-twitter', 'escape' => false, 'target' => '_blank']) ?>


                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=31376&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-linkedin', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-linkedin', 'escape' => false, 'target' => '_blank']) ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=43252&amp;datos_academicos=yes&amp;keywords=iighi" target="_blank" rel="noopener">
                                <img class="foto img-thumbnail img-circle"
                                     src="/impenetrable/webroot/img/integrantes/bertoncello.jpg"
                                     alt="Bertoncello, Rodolfo Valentín" style="height: 165px;">
                            </a>
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Bertoncello, Rodolfo Valentín</h4>
                                <p class="text-secondary mb-1">Investigador Responsable</p>
                                <p class="text-muted font-size-sm">Investigador Independiente - CONICET</p>
                                <p class="text-success font-size-sm">marlausali@gmail.com</p>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-twitter', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-twitter', 'escape' => false, 'target' => '_blank']) ?>


                                <a href="" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-linkedin', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-linkedin', 'escape' => false, 'target' => '_blank']) ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=43252&amp;datos_academicos=yes&amp;keywords=iighi" target="_blank" rel="noopener">
                                <img class="foto img-thumbnail img-circle"
                                     src="https://iighi.conicet.gov.ar/wp-content/uploads/sites/29/2020/02/RRHH_oscar_mari-150x150.jpg"
                                     alt="Mari, Oscar" style="height: 165px;">
                            </a>
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Mari, Oscar</h4>
                                <p class="text-secondary mb-1">Investigador Responsable</p>
                                <p class="text-muted font-size-sm">Investigador Independiente - CONICET</p>
                                <p class="text-success font-size-sm">oscar.mari@yahoo.com.ar</p>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-twitter', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-twitter', 'escape' => false, 'target' => '_blank']) ?>


                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=22136&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-linkedin', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-linkedin', 'escape' => false, 'target' => '_blank']) ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=43252&amp;datos_academicos=yes&amp;keywords=iighi" target="_blank" rel="noopener">
                                <img class="foto img-thumbnail img-circle"
                                     src="https://iighi.conicet.gov.ar/wp-content/uploads/sites/29/2020/02/RRHH_alejandra_fantin-150x150.jpg"
                                     alt="Fantin, Maria Alejandra" style="height: 165px;">
                            </a>
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Fantín, María Alejandra</h4>
                                <p class="text-secondary mb-1">Investigador Responsable</p>
                                <p class="text-muted font-size-sm">Investigadora Independiente - CONICET</p>
                                <p class="text-success font-size-sm">mafantin@gmail.com</p>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-twitter', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-twitter', 'escape' => false, 'target' => '_blank']) ?>


                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=22136&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-linkedin', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-linkedin', 'escape' => false, 'target' => '_blank']) ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=22700&datos_academicos=yes&keywords=iighi" target="_blank" rel="noopener">
                                <img class="foto img-thumbnail img-circle"
                                     src="https://iighi.conicet.gov.ar/wp-content/uploads/sites/29/2020/02/RRHH_enrique_schaller-150x150.jpg"
                                     alt="Schaller, Enrique" style="height: 165px;">
                            </a>
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Schaller, Enrique César</h4>
                                <p class="text-secondary mb-1">Investigador Responsable</p>
                                <p class="text-muted font-size-sm">Investigador Adjunto - CONICET</p>
                                <p class="text-success font-size-sm">schaller53@gmail.com</p>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-twitter', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-twitter', 'escape' => false, 'target' => '_blank']) ?>


                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=22136&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-linkedin', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-linkedin', 'escape' => false, 'target' => '_blank']) ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=44403&keywords=F%C3%A1tima%2BFatima%2BVictoria%2BVALENZUELA&datos_academicos=yes" target="_blank" rel="noopener">
                                <img class="foto img-thumbnail img-circle"
                                     src="https://iighi.conicet.gov.ar/wp-content/uploads/sites/29/2020/02/RRHH_fatima_valenzuela-150x150.jpg"
                                     alt="Valenzuela, Fatima Victoria" style="height: 165px;">
                            </a>
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Valenzuela, Fátima Victoria</h4>
                                <p class="text-secondary mb-1">Investigadora Responsable</p>
                                <p class="text-muted font-size-sm">Investigadora Asistente - CONICET</p>
                                <p class="text-success font-size-sm">fatima_val@live.com.ar</p>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-twitter', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-twitter', 'escape' => false, 'target' => '_blank']) ?>


                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=22136&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-linkedin', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-linkedin', 'escape' => false, 'target' => '_blank']) ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                                <img class="foto img-thumbnail img-circle"
                                     src="https://iighi.conicet.gov.ar/wp-content/uploads/sites/29/2020/02/RRHH_monica_medina-150x150.jpg"
                                     alt="Valenzuela, Fatima Victoria" style="height: 165px;">
                            </a>
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Medina, Mónica Marisel</h4>
                                <p class="text-secondary mb-1">Investigadora Colaboradora</p>
                                <p class="text-muted font-size-sm">Investigadora Asistente - CONICET</p>
                                <p class="text-success font-size-sm">becariosiighi@gmail.com</p>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-twitter', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-twitter', 'escape' => false, 'target' => '_blank']) ?>


                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=22136&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-linkedin', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-linkedin', 'escape' => false, 'target' => '_blank']) ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img class="foto img-thumbnail img-circle"
                                 src="	https://iighi.conicet.gov.ar/wp-content/uploads/sites/29/2020/02/RRHH_lorena_cayre_baito-150x150.jpg"
                                 alt="Valenzuela, Fatima Victoria" style="height: 165px;">
                            </a>
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Cayré Baito, Lorena</h4>
                                <p class="text-secondary mb-1">Investigadora Colaboradora</p>
                                <p class="text-muted font-size-sm">Investigadora UNNE</p>
                                <p class="text-success font-size-sm">lcayrebaito@yahoo.com.ar</p>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-twitter', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-twitter', 'escape' => false, 'target' => '_blank']) ?>


                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=22136&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-linkedin', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-linkedin', 'escape' => false, 'target' => '_blank']) ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img class="foto img-thumbnail img-circle"
                            <img class="foto img-thumbnail img-circle"
                                 src="/impenetrable/webroot/img/integrantes/guarino.jpeg"
                                 alt="Guarino, graciela" style="height: 165px; width: 165px;">
                            </a>
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Guarino, Graciela</h4>
                                <p class="text-secondary mb-1">Investigadora Colaboradora</p>
                                <p class="text-muted font-size-sm">Investigadora UNNE</p>
                                <p class="text-success font-size-sm">Sin registro</p>
                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-twitter', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-twitter', 'escape' => false, 'target' => '_blank']) ?>


                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=22136&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-linkedin', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-linkedin', 'escape' => false, 'target' => '_blank']) ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img class="foto img-thumbnail img-circle"
                            <img class="foto img-thumbnail img-circle"
                                 src="/impenetrable/webroot/img/integrantes/user_hombre.png"
                                 alt="Echarri, Fabio" style="height: 165px;">
                            </a>
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Echarri, Fabio</h4>
                                <p class="text-secondary mb-1">Investigador Colaborador</p>
                                <p class="text-muted font-size-sm">Investigador UNNE</p>
                                <p class="text-success font-size-sm">Sin registro</p>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-twitter', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-twitter', 'escape' => false, 'target' => '_blank']) ?>


                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=22136&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-linkedin', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-linkedin', 'escape' => false, 'target' => '_blank']) ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img class="foto img-thumbnail img-circle"
                            <img class="foto img-thumbnail img-circle"
                                 src="/impenetrable/webroot/img/integrantes/user_woman.png"
                                 alt="Camelino, Maria" style="height: 165px;">
                            </a>
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Nuñez Camelino, María</h4>
                                <p class="text-secondary mb-1">Investigadora Colaboradora</p>
                                <p class="text-muted font-size-sm">Investigadora UNNE</p>
                                <p class="text-success font-size-sm">Sin registro</p>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-twitter', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-twitter', 'escape' => false, 'target' => '_blank']) ?>


                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=22136&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-linkedin', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-linkedin', 'escape' => false, 'target' => '_blank']) ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img class="foto img-thumbnail img-circle"
                            <img class="foto img-thumbnail img-circle"
                                 src="/impenetrable/webroot/img/integrantes/user_woman.png"
                                 alt="Barrios, Paola" style="height: 165px;">
                            </a>
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Barrios, Paola</h4>
                                <p class="text-secondary mb-1">Investigadora Colaboradora</p>
                                <p class="text-muted font-size-sm">Investigadora UNNE</p>
                                <p class="text-success font-size-sm">Sin registro</p>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-twitter', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-twitter', 'escape' => false, 'target' => '_blank']) ?>


                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=22136&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-linkedin', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-linkedin', 'escape' => false, 'target' => '_blank']) ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img class="foto img-thumbnail img-circle"
                            <img class="foto img-thumbnail img-circle"
                                 src="https://iighi.conicet.gov.ar/wp-content/uploads/sites/29/2020/02/RRHH_fernando_pozzaglio-150x150.jpg"
                                 alt="Pozzaglio, Fernando" style="height: 165px;">
                            </a>
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Pozzaglio, Fernando Ariel</h4>
                                <p class="text-secondary mb-1">Investigador/Técnico Colaborador</p>
                                <p class="text-muted font-size-sm">Personal de Apoyo a la Investigación (CPA) - CONICET</p>
                                <p class="text-success font-size-sm">fearpozzaglio@yahoo.com.ar</p>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-twitter', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-twitter', 'escape' => false, 'target' => '_blank']) ?>


                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=29959&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-linkedin', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-linkedin', 'escape' => false, 'target' => '_blank']) ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img class="foto img-thumbnail img-circle"
                            <img class="foto img-thumbnail img-circle"
                                 src="https://iighi.conicet.gov.ar/wp-content/uploads/sites/29/2020/02/RRHH_cristian_da_silva-150x150.jpg"
                                 alt="Da Silva, Cristian" style="height: 165px;">
                            </a>
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Da Silva, Cristian Javier</h4>
                                <p class="text-secondary mb-1">Investigador/Técnico Colaborador</p>
                                <p class="text-muted font-size-sm">Personal de Apoyo a la Investigación (CPA) - CONICET</p>
                                <p class="text-success font-size-sm">Cristian297@hotmail.com</p>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-twitter', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-twitter', 'escape' => false, 'target' => '_blank']) ?>


                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=43252&amp;datos_academicos=yes&amp;keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-linkedin', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-linkedin', 'escape' => false, 'target' => '_blank']) ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img class="foto img-thumbnail img-circle"
                            <img class="foto img-thumbnail img-circle"
                                 src="https://iighi.conicet.gov.ar/wp-content/uploads/sites/29/2020/02/RRHH_cristian_toullieux-150x150.jpg"
                                 alt="Toulliex, Cristian" style="height: 165px;">
                            </a>
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Toullieux, Cristian Roberto</h4>
                                <p class="text-secondary mb-1">Técnico Colaborador</p>
                                <p class="text-muted font-size-sm">Personal de Apoyo a la Investigación (CPA) - CONICET</p>
                                <p class="text-success font-size-sm">cuatroymedio4@hotmail.com</p>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-twitter', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-twitter', 'escape' => false, 'target' => '_blank']) ?>


                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=41313&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>

                                <?= $this->Html->link($this->Html->tag('span', '', ['class' => 'fab fa-linkedin', 'aria-hidden' => 'true']),
                                    ['controller' => '', 'action' => '', '?' =>
                                        ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']],
                                    ['class' => 'btn btn-primary btn-linkedin', 'escape' => false, 'target' => '_blank']) ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>




    </div>

    </div>









