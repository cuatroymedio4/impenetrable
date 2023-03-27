
<?= $this->Html->css('leaflet/leaflet.css') ?>
<?= $this->Html->css('mapas/mapas.css') ?>

<?= $this->Html->css('plugins/leaflet-sidepanel.css') ?>
<?= $this->Html->css('plugins/easy-button.css') ?>

<?= $this->Html->script('leaflet/qgis2web_expressions.js') ?>
<?= $this->Html->script('leaflet/leaflet.js') ?>
<?= $this->Html->script('dist/leaflet-sidepanel.min.js') ?>
<?= $this->Html->script('dist/easy-button.js') ?>

<?= $this->Html->script('leaflet/leaflet.rotatedMarker.js') ?>
<?= $this->Html->script('leaflet/leaflet.pattern.js') ?>
<?= $this->Html->script('leaflet/leaflet-hash.js') ?>
<?= $this->Html->script('leaflet/Autolinker.min.js') ?>
<?= $this->Html->script('leaflet/rbush.min.js') ?>
<?= $this->Html->script('leaflet/labelgun.min.js') ?>
<?= $this->Html->script('leaflet/labels.js') ?>

<?= $this->Html->css('leaflet/leaflet-sidebar.min.css') ?>
<?= $this->Html->script('leaflet/leaflet-sidebar.min.js') ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.css" />
<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>



<style>

    body{
        margin: 0px !important;
    }

    #map {
        width: 100%;
        height: calc(100vh - 75px);
    }
</style>


<div id="map">
    


</div>

<script>

    var map = L.map('map', {
        zoomControl:true,
        maxZoom:28,
        minZoom:1,
        center: [-26.062, -61.408],
        zoom: 8
    });


    var home = {
        lat: -26.062,
        lng: -61.408,
        zoom: 7
    };

    L.easyButton('fa-home',function(btn,map){

        map.flyTo([home.lat, home.lng], home.zoom);
    },'Zoom To Home').addTo(map);

    var lc = L.control
        .locate({
            position: "topright",
            strings: {
                title: "Mi Posición"
            }
        })
        .addTo(map);

//sidebar
        var sidebar = L.control.sidebar({
            autopan: false,       // whether to maintain the centered map point when opening the sidebar
            closeButton: false,    // whether t add a close button to the panes
            container: 'sidebar', // the DOM container or #ID of a predefined sidebar container that should be used
            position: 'left',     // left or right

        }).addTo(map);

    //agregar panel
        /* add a new panel */
        var panelContent = {
            id: 'tab-1',                     // UID, used to access the panel
            tab: '<i class="fa fa-2x"><img src="../img/icon-interest-point.png" alt="alternatetext" width="40px" height="40px"></i>',  // content can be passed as HTML string,
            pane: '<div class="card"><div class="bd-placeholder-img card-img-top"><img class="img-header-card" src="../img/header_loc/miraflores_img.jpg" alt="header" width="100%" height="100%" style="filter: saturate(140%);"></div><div class="card-body"><h5 class="card-title" style="color: #198754;">Miraflores</h5><p class="card-text">Se localiza a unos 308,5 Km. de la ciudad de Resistencia por Ruta Provincial Nº 9.</p><button class="btn btn-success float-right" attr="1" onclick="viewMoreBtnLocalidad(this)"><i class="fas fa-map-marked-alt"></i> Ver más....</button></div></div><div class="card" style="margin-top: 20px;"><div class="bd-placeholder-img card-img-top"><img class="img-header-card" src="../img/header_loc/IMG_20220602_111053680_HDR.jpg" alt="header" width="100%" height="100%" style="filter: saturate(180%);"></div><div class="card-body"><h5 class="card-title" style="color: #198754;">Misión Nueva Pompeya</h5><p class="card-text">La localidad de Misión Nueva Pompeya se localiza en el departamento General Güemes de la provincia del Chaco. A unos 185 kilómetros de la ciudad de Castelli y a unos 480 kilómetros de la ciudad de Resistencia.</p> <button class="btn btn-success float-right" attr="2" onclick="viewMoreBtnLocalidad(this)"><i class="fas fa-map-marked-alt"></i> Ver más....</button></div></div><div class="card" style="margin-top: 20px;"><div class="bd-placeholder-img card-img-top"><img class="img-header-card" src="../img/header_loc/miraflores_img.jpeg" alt="header" width="100%" height="100%"></div><div class="card-body"><h5 class="card-title" style="color: #198754;">Fuerte Esperanza</h5><p class="card-text">Se localiza a unos 308,5 Km. de la ciudad de Resistencia por Ruta Provincial Nº 9.</p><!-- Funcion de focus map --><button class="btn btn-success float-right" attr="3" onclick="viewMoreBtnLocalidad(this)"><i class="fas fa-map-marked-alt"></i> Ver más....</button></div></div><div class="card" style="margin-top: 20px;"><div class="bd-placeholder-img card-img-top"><img class="img-header-card" src="../img/header_loc/el_sauzalito.jpeg" alt="header" width="100%" height="100%" style="filter: saturate(180%);"> </div><div class="card-body"> <h5 class="card-title" style="color: #198754;">El Sauzalito</h5><p class="card-text">Se localiza a unos 308,5 Km. de la ciudad de Resistencia por Ruta Provincial Nº 9.</p><!-- Funcion de focus map --><button class="btn btn-success float-right" attr="4" onclick="viewMoreBtnLocalidad(this)"><i class="fas fa-map-marked-alt"></i> Ver más....</button></div></div><div class="card" style="margin-top: 20px;"><div class="bd-placeholder-img card-img-top"><img class="img-header-card" src="../img/header_loc/rio_bermejito_JPG" alt="header" width="100%" height="100%" style="filter: saturate(180%);"></div><div class="card-body"><h5 class="card-title" style="color: #198754;">Villa Rio Bermejito</h5><p class="card-text">Se localiza a unos 308,5 Km. de la ciudad de Resistencia por Ruta Provincial Nº 9.</p><!-- Funcion de focus map --> <button class="btn btn-success float-right" attr="5" onclick="viewMoreBtnLocalidad(this)"><i class="fas fa-map-marked-alt"></i> Ver más....</button></div> </div><div class="card" style="margin-top: 20px;"><div class="bd-placeholder-img card-img-top"><img class="img-header-card" src="../img/header_loc/miraflores_img.jpeg" alt="header" width="100%" height="100%"></div><div class="card-body"><h5 class="card-title" style="color: #198754;">Comandancia Frías</h5><p class="card-text">Se localiza a unos 308,5 Km. de la ciudad de Resistencia por Ruta Provincial Nº 9.</p><!-- Funcion de focus map --><button class="btn btn-success float-right" attr="6" onclick="viewMoreBtnLocalidad(this)"><i class="fas fa-map-marked-alt"></i> Ver más....</button></div></div>',        // DOM elements can be passed, too
            title: 'Lugares',              // an optional pane header
            position: 'top',                  // optional vertical alignment, defaults to 'top'
            closeButton: false
        };
        sidebar.addPanel(panelContent);

        var panelContent = {
            id: 'tab-2',                     // UID, used to access the panel
            tab: '<i class="fa fa-2x"><img src="../img/icon-2.png" alt="alternatetext" width="40px" height="40px"></i>',  // content can be passed as HTML string,
            pane: '<div><h2 style="color: #198754;"><strong>Miraflores:</strong></h2><p style="text-align:justify">En 1910 se estableció un grupo de colonos provenientes de la provincia de Salta, siguiendo el curso del Río Bermejo. En 1919, y especialmente en 1923 se realizó una campaña para desarrollar el cultivo del algodón en el Chaco, lo que atrajo a inmigrantes europeos a la zona.</p><p style="text-align:justify">En el año 1931 la Ley Nacional N° 5.730 declaró el territorio como “Villa Rural Indígena” nueve años después, el 5 de octubre de 1940 la Ley N° 73.346 lo denominó con el nombre de “Miraflores”. En ese entonces el departamento se llamaba “Río Teuco” y el territorio del “Chaco” formaba parte del Territorio Nacional, Chaco aún no era una provincia.</p><p style="text-align:justify">La denominación de su nombre corresponde, según relatos de los primeros pobladores, a que en aquel tiempo era todo descampado, no había monte, abundaban las praderas con flores silvestres, especialmente las científicamente llamadas Varbenas.</p><p style="text-align:justify">Los pueblos originarios relatan otras historias sobre el sentido del nombre, siempre teniendo como protagonistas a las flores silvestres. Estas abundaban alrededor de una represa donde los hombres mariscaban, pasaban horas esperando que lleguen animales a la aguada y cuando alguien preguntaba qué estaban haciendo, ellos respondían "Mirando las Flores".&nbsp;</p><p style="text-align:justify">El Gobernador Rolando José Tauguinas creó el municipio de tercera categoría en 1992, y se nombró delegado organizador a Antonio Prieto. El edificio del centro cívico se utilizó como sede municipal.</p><p style="text-align:justify">&nbsp;</p><p style="text-align:justify"><strong>Localización:</strong></p><table border="0" cellpadding="1" cellspacing="1"><tbody><tr><td><img alt="" src="../img/icons/mapa.png" style="height:48px; width:48px"></td><td><span style="font-size:11pt"><span style="font-family:"Times New Roman"><span style="color:#000000">Se localiza a unos 308,5 Km. de la ciudad de Resistencia por Ruta Provincial Nº 9.</span></span></span></td></tr></tbody></table><p style="text-align:justify">&nbsp;</p><p style="text-align:justify">&nbsp; &nbsp; &nbsp;</p><p style="text-align:justify">&nbsp;</p></div>', // DOM elements can be passed, too
            title: 'Descripción',              // an optional pane header
            position: 'top',                  // optional vertical alignment, defaults to 'top'
            closeButton: false
        };
        sidebar.addPanel(panelContent);

        var panelContent = {
            id: 'tab_POI',                     // UID, used to access the panel
            tab: '<i class="fa fa-2x"><img src="../img/icon-list-places.png" alt="alternatetext" width="40px" height="40px"></i>',  // content can be passed as HTML string,
            pane: '<div></div>', // DOM elements can be passed, too
            title: 'Puntos de interés',              // an optional pane header
            position: 'top',                  // optional vertical alignment, defaults to 'top'
            closeButton: false
        };
        sidebar.addPanel(panelContent);

        /* add an external link 
        sidebar.addPanel({
            id: 'ghlink',
            tab: '<i class="fa fa-github"></i>',
            button: 'https://github.com/noerw/leaflet-sidebar-v2',
        });*/

        /* add a button with click listener 
        sidebar.addPanel({
            id: 'click',
            tab: '<i class="fa fa-info"></i>',
            button: function (event) { console.log(event); }
        });

        sidebar.addPanel({
                id:   'mail',
                tab:  '<i class="fa fa-envelope"></i>',
                title: 'Messages',
                button: function() { alert('opened via JS callback') },
                disabled: false,
            });*/

        sidebar.on('content', function (ev) {
            switch (ev.id) {
                case 'autopan':
                sidebar.options.autopan = true;
                break;
                default:
                sidebar.options.autopan = false;
            }
        });

</script>



<?= $this->Html->script('mapas/capas/inicio/PN_limite_Project_1.js') ?>
<?= $this->Html->script('mapas/capas/interactive/localidades_point.js') ?>
<?= $this->Html->script('mapas/capas/interactive/miraflores.js') ?>
<?= $this->Html->script('mapas/capas/interactive/nueva_pompeya.js') ?>

<?= $this->Html->script('mapas/capas/styles/reserva_impenetrable.js') ?>
<?= $this->Html->script('mapas/capas/styles/localidades_point_style.js') ?>
<?= $this->Html->script('mapas/capas/styles/miraflores_point_style.js') ?>
<?= $this->Html->script('mapas/capas/styles/nuevapompeya_point_style.js') ?>

<?= $this->Html->script('mapas/interactive-maps.js') ?>




