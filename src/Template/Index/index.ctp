



<?= $this->element('header')?>

<div class="container-xxl py-5 bg-success impenetrable-backgound mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-lg-6 text-center text-lg-start div-opacity-70 padding-top-bottom-20">
                <h1 class="text-white mb-4 animated zoomIn font-impenetrable">
                    EL IMPENETRABLE:
                    <span class="fs-5">UN ITINERARIO CULTURAL EN TORNO AL AMBIENTE, LOS GRUPOS HUMANOS Y SU CULTURA LOCAL</span>
                </h1>

                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0"  src="img/investigacion.png" alt="alternatetext" style="height: 250px; margin: 0 auto;">
                </div>
                <div class="ps-3">
                    <p class="text-white pb-3 animated zoomIn" style="text-align: justify;">Proyecto de Investigación financiado por la Agencia Nacional de Promoción de la
                        Investigación, el Desarrollo Tecnológico y la Innovación. (PICT0: UNNE-2019-00028).</p>
                </div>

            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <div style='width: 1200px; max-width: 100%; margin: auto; border: solid 3px green; height: 554px;'>
                    <!-- par el hosting sin impenetrbale src="/Mapas/area_estudio" -->
                    <!-- <iframe width="100%"
                            src="/impenetrable/Mapas/area_estudio"
                            style="border: 1px solid black; height: 550px";>

                    </iframe>-->

                    <?= $this->element('mapas/inicio')?>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-success ps-4">Líneas de Investigación</h6>
            <h2 class="mt-2">¿Qué nos interesa estudiar?</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-2x"><img src="img/history.png" alt="alternatetext" width="50px" height="50px"></i>

                    </div>
                    <h5 class="mb-3">Historia</h5>
                    <p style="text-align: justify;">Investigamos los procesos históricos, las migraciones, desplazamientos y la configuración de los distintos emplazamientos
                        en el espacio del Impenetrable en varias dimensiones de análisis.</p>
                    <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <img src="img/geography.png" alt="alternatetext" width="50px" height="50px">i>
                    </div>
                    <h5 class="mb-3">Geografía</h5>
                    <p style="text-align: justify;">Estudiamos la potencialidad ambiental del Impenetrable. Particularmente las formaciones biogeográficas y
                        geomorfológicas del Impenetrable como características esenciales que distinguen al Impenetrable
                        como espacio único de gran interés turístico.</p>
                    <a class="btn px-3 mt-auto mx-auto" href="">Leer más...</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-2x"><img src="img/anthropology.png" alt="alternatetext" width="50px" height="50px"></i>
                    </div>
                    <h5 class="mb-3">Antropología</h5>
                    <p style="text-align: justify;">Nos interesa acercarnos a los grupos humanos que habitan el Impenetrable con el fin de
                        conocer y comprender sus modos de organización sociocultural, sus dinámicas
                        identitarias y formas de comunicarse.</p>
                    <a class="btn px-3 mt-auto mx-auto" href="">Leer más...</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-2x"><img src="img/linguistica.png" alt="alternatetext" width="60px" height="60px"></i>
                    </div>
                    <h5 class="mb-3">Lingüística</h5>
                    <p style="text-align: justify;">Los aportes de esta perspectiva permitirán describir y caracterizar
                        la situación sociolingüística de las lenguas presentes en cada comunidad o
                        paraje que conforman el Impenetrable Chaqueño.</p>
                    <a class="btn px-3 mt-auto mx-auto" href="">Leer más...</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-2x"><img src="img/turismo.png" alt="alternatetext" width="60px" height="60px"></i>
                    </div>
                    <h5 class="mb-3">Turismo</h5>
                    <p style="text-align: justify;">Nos proponemos Identificar las potencialidades turísticas del Impenetrable a
                        partir de las características socio-ambientales presentes.</p>
                    <a class="btn px-3 mt-auto mx-auto" href="">Leer más...</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Service End -->



<?php if ($slider_count >= 3): ?>
    <?= $this->element('/index/slider-index')?>
<?php endif; ?>









