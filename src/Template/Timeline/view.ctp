
<?= $this->Html->css('timeline.css') ?>
<?= $this->Html->script('timeline.js') ?>



<?= $this->element('header')?>




<section class="h-100" style="background-color: #ffffff; padding-bottom: 100px;">

    <div class="container-xxl mb-5">

        <div class="row py-5 landing-inte-back">
            <div class="col-xs-5 col-md-5 col-lg-5 valign-center" style="text-align: center; display:table">
                <h1 class="title-hover wow zoomIn" style="vertical-align: middle; color: #198754; margin-top: 30%;">
                    Línea Histórica de Avance del Proyecto
                </h1>

                <p class="wow zoomIn" style="vertical-align: middle; color: #198754;">
                    Te contamos todos los sucesos relacionados al Proyecto de Investigación.
                </p>

            </div>
            <div class="col-xs-7 col-md-7 col-lg-7 valign-center">
                <?=  $this->Html->image('timeline_2.svg', ['alt' => 'CakePHP', 'class' => 'img-fluid img-landing-int wow zoomIn']); ?>
            </div>
        </div>

    </div>

    <div class="container-xxl py-5 mb-5">

        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="mt-2 text-success ">Línea Histórica de Avance del Proyecto de Investigación</h2>
        </div>
    </div>


    <!-- <div class="timeline">
        <?php $i = 0; ?>

        <?php foreach ($timeline as $time): ?>

            <?php  if(($i % 2) == 0): ?>
                <div class="container left">
                    <div class="date"><?= h($time->fecha->format('d-m-Y')) ?></div>
                    <i class="icon fa-solid fa-calendar"></i>
                    <div class="content">
                        <h2><?= h($time->title) ?></h2>
                        <p>
                            <?= h($time->description) ?>
                        </p>
                    </div>
                </div>

            <?php else: ?>

                <div class="container right">
                    <div class="date"><?= h($time->fecha->format('d-m-Y')) ?></div>
                    <i class="icon fa-solid fa-calendar"></i>
                    <div class="content"><h2>
                            <?= h($time->title) ?></h2>
                        <p>
                            <?= h($time->description) ?>
                        </p>
                    </div>
                </div>

            <?php endif; ?>

            <?php $i = $i + 1; ?>

        <?php endforeach; ?>

    </div>-->


<section class="cd-horizontal-timeline">
    <div class="timeline">
        <div class="events-wrapper">
            <div class="events">
                <ol>
                    <li><a href="#0" data-date="16/01/2014" class="selected">16 Ene</a></li>
                    <li><a href="#0" data-date="28/02/2014">28 Feb</a></li>
                    <li><a href="#0" data-date="20/04/2014">20 Mar</a></li>
                    <li><a href="#0" data-date="20/05/2014">20 May</a></li>
                    <li><a href="#0" data-date="09/07/2014">09 Jul</a></li>
                    <li><a href="#0" data-date="30/08/2014">30 Ago</a></li>
                    <li><a href="#0" data-date="15/09/2014">15 Sep</a></li>
                    <li><a href="#0" data-date="01/11/2014">1 Nov</a></li>
                    <!--<li><a href="#0" data-date="10/12/2014">10 Dic</a></li>
                    <li><a href="#0" data-date="19/01/2015">29 Ene</a></li>
                    <li><a href="#0" data-date="03/03/2015">3 Mar</a></li>-->
                </ol>

                <span class="filling-line" aria-hidden="true"></span>
            </div> <!-- .events -->
        </div> <!-- .events-wrapper -->
            
        <ul class="cd-timeline-navigation">
            <li><a href="#0" class="prev inactive"><i class='fa fa-chevron-right'></i></a></li>
            <li><a href="#0" class="next"><i class='fa fa-chevron-right'></i></a></li>
        </ul> <!-- .cd-timeline-navigation -->
    </div> <!-- .timeline -->

    <div class="events-content">
        <ol>
            <li class="selected" data-date="16/01/2014">
                <h2>Inicio del proyecto de investigación</h2>
                <em>16 de enero de 2020</em>
                <p> 
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                </p>
            </li>

            <li data-date="28/02/2014">
                <h2>Etapa de lecturas iniciales</h2>
                <em>28 de febrero 2020</em>
                <p> 
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                </p>
            </li>

            <li data-date="20/04/2014">
                <h2>Relevamiento en oficinas de turismo y gubernamentales de los proyectos turísticos y de promoción del Impenetrable</h2>
                <em>20 de abril de 2020</em>
                <p> 
                    (Chaco Explora, Master Plan, Fundación del PNI)
                </p>
            </li>

            <li data-date="20/05/2014">
                <h2>Lecturas y análisis de políticas públicas generadas desde el Instituto de Turismo</h2>
                <em>20 de mayo de 2021</em>
                <p> 
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                </p>
            </li>

            <li data-date="09/07/2014">
                <h2>Reuniones de trabajo con el Instituto de Turismo</h2>
                <em>9 de julio de 2021</em>
                <p> 
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                </p>
            </li>

            <li data-date="30/08/2014">
                <h2>Surgió la idea de crear un mapa con un itinerario en línea</h2>
                <em>30 de agosto de 2021</em>
                <p> 
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                </p>
            </li>

            <li data-date="15/09/2014">
                <h2>Presentación de algunas ponencias en el EGAL</h2>
                <em>15 de septiembre 2021</em>
                <p> 
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                </p>
            </li>

            <li data-date="01/11/2014">
                <h2>Se iniciaron las tareas de campo en el Impenetrable</h2>
                <em>1 de noviembre 2022</em>
                <p> 
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                </p>
            </li>

            <!-- <li data-date="10/12/2014">
                <h2>Event title here</h2>
                <em>December 10th, 2014</em>
                <p> 
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                </p>
            </li>

            <li data-date="19/01/2015">
                <h2>Event title here</h2>
                <em>January 19th, 2015</em>
                <p> 
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                </p>
            </li>

            <li data-date="03/03/2015">
                <h2>Event title here</h2>
                <em>March 3rd, 2015</em>
                <p> 
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                </p>
            </li> -->
        </ol>
    </div> <!-- .events-content -->
</section>


</section>