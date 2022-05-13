<!-- Testimonial Start -->
<div class="container-xxl bg-primary slider-home py-2 my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-1 px-lg-5">
        <div class="owl-carousel testimonial-carousel">

            <?php foreach ($slider_home as $sld): ?>
                <div class="testimonial-item bg-transparent border text-white">

                    <div class="d-flex align-items-center">
                        <?= $this->Html->image(h($sld->photo), ['pathPrefix' => '/img/slider/', 'class' => 'img-fluid flex-shrink-0 slider-home-item',
                            'style' => ['height: 350px']]); ?>

                    </div>
                    <div class="ps-3">
                        <h6 class="text-white mb-1" style="margin-top: 7px;"> <?= h($sld->titulo) ?></h6>
                        <small><?= h($sld->descripcion) ?></small>
                    </div>
                </div>

            <?php endforeach; ?>
            <!--<div class="testimonial-item bg-transparent border text-white">

                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 slider-home-item" src="img/fotos/img-2.jpeg">
                </div>
                <div class="ps-3">
                    <h6 class="text-white mb-1">Fomaciones vegetales en la rivera del río Téuco-Bermejo</h6>
                    <small>Una vista áerea de las formaciones vegetales que acompañan el curso del río Teuco-Bermejo.</small>
                </div>
            </div>

            <div class="testimonial-item bg-transparent border text-white">

                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 slider-home-item" src="img/fotos/imp-3.jpg">
                </div>
                <div class="ps-3">
                    <h6 class="text-white mb-1">Meandros del Río Téuco-Bermejo</h6>
                    <small>Una vista áerea de la formación meandrosa del curso del río Teuco-Bermejo en la localidad de Nueva Pompeya.</small>
                </div>
            </div>-->
        </div>
    </div>
</div>
<!-- Testimonial End -->
