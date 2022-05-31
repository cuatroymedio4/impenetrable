<!-- main-footer -->
<footer class="main-footer">
    <div id="container_footer" class="container-xxl py-5 padding-15">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="logo-widget footer-widget">
                        <figure class="footer-logo"><a href="https://iighi.conicet.gov.ar" target="_blank"><img src="img/footer-logo.png" alt=""></a></figure>
                        <div class="text">Instituto de Investigaciones Geohistóricas (IIGHI)<br><small>Consejo Nacional de Investigaciones Científicas y Técnicas- Universidad Nacional del Nordeste</small></div>
                        <ul id="icons-media" class="footer-social clearfix">
                            <li><a href="https://www.facebook.com/IIGHIChaco/" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/iighichaco?lang=es" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/iighiconicet/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UC0vPIQkJWfDRDOxCefvfL7A/featured?disable_polymer=1" target="_blank">
                                    <i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="link-widget footer-widget">
                        <div class="footer-title">Accesos rápidos</div>
                        <ul class="link-list">

                            <li>
                                <?= $this->Html->link(__('Inicio'), ['controller' => 'index', 'action' => 'index']) ?>
                            </li>

                            <li><a href="?p=home#ejes">Línea Histórica</a></li>
                            <li><a href="?p=contact">Integrantes</a></li>
                            <li><a href="?p=contact">Documentación</a></li>
                            <!--<li><a href="#">Future Team</a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="event-widget footer-widget">
                        <div class="footer-title">Trabajos de Campo</div>
                        <div class="single-event">
                            <div class="link"><a href="#">1ra Salida a Campo</a></div>
                            <div class="text"><i class="flaticon-small-calendar"></i>1 de marzo 2022</div>
                        </div>
                        <div class="single-event">
                            <div class="link"><a href="#">2da Salida a Campo: <em></em></a></div>
                            <div class="text"><i class="flaticon-small-calendar"></i>del 1 al 3 de junio de 2022</div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="logo-widget footer-widget">
                        <figure class="footer-logo-2"><a href="https://www.argentina.gob.ar/ciencia" target="_blank">
                                <?php echo $this->Html->image('ministerio_2020_blanco.png', ["alt" => '']) ?>
                                </a></figure>
                        <figure class="footer-logo-2"><a href="https://www.conicet.gov.ar" target="_blank">
                                <?php echo $this->Html->image('logo-CONICET_blanco.png', ["alt" => '']) ?>
                                </a></figure>
                    </div>
                </div>
            </div>
    </div>
</footer>
<!-- main-footer end -->

<!-- footer-bottom -->
<div class="footer-bottom">
    <div class="container">
        <div class="copyright"><a href="?p=home">El Impenetrable: un itinerario cultural en torno al ambiente, los grupos humanos y
            su cultura local</a> | <a href="https://iighi.conicet.gov.ar/" target="_blank">
                IIGHI, CONICET- UNNE</a>
            &copy; 2022 Todos los derechos reservados</div>
    </div>
</div>
<!-- footer-bottom end -->

