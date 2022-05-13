
<?= $this->Html->css('timeline.css') ?>




<?= $this->element('header')?>




<section class="h-100" style="background-color: #ffffff; padding-bottom: 100px;">

    <div class="container-xxl mb-5">

        <div class="row py-5 landing-inte-back">
            <div class="col-xs-5 col-md-5 col-lg-5 valign-center" style="text-align: center; display:table">
                <h1 class="title-hover wow zoomIn" style="vertical-align: middle; color: #198754; margin-top: 30%;">
                    Línea Histórica
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
            <h2 class="mt-2 text-success title-hover">Línea Histórica del Proyecto de Investigación</h2>
        </div>
    </div>


    <div class="timeline">
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

    </div>


</section>
