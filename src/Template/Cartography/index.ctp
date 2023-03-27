<?= $this->element('header')?>

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-success ps-4">Cartografía</h6>
            <h2 class="mt-2">Podés acceder al Mapa Interactivo o al centro de Descargas</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-2x"><img src="img/icon-10.png" alt="alternatetext" width="80px" height="80px"></i>

                    </div>
                    <h5 class="mb-3">Mapa Interactivo</h5>
                    <p style="text-align: justify;">Investigamos los procesos históricos, las migraciones, desplazamientos y la configuración de los distintos emplazamientos
                        en el espacio del Impenetrable en varias dimensiones de análisis.</p>

                    <?=  $this->Html->link(
                        'Leer más',
                        ['controller' => 'Cartography', 'action' => 'interactiveMap', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                        ['class' => 'btn px-3 mt-auto mx-auto']
                    ); ?>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <img src="img/icon-11.png" alt="alternatetext" width="80px" height="80px">
                    </div>
                    <h5 class="mb-3">Centro de Descargas</h5>
                    <p style="text-align: justify;">Estudiamos la potencialidad ambiental del Impenetrable. Particularmente las formaciones biogeográficas y
                        geomorfológicas del Impenetrable como características esenciales que distinguen al Impenetrable
                        como espacio único de gran interés turístico.</p>
                    <a class="btn px-3 mt-auto mx-auto" href="">Leer más...</a>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Service End -->
