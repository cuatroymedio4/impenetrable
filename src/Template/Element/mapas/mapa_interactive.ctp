
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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.css" />
<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>



<style>

    body{
        margin: 0px !important;
    }

    #map {
        width: 100%;
        height: 100vh;
    }
</style>


<div id="map">

    <?= $this->element('sidepaneleft/sidepaneleft')?>
    <?= $this->element('sidepaneleft/sidepanelrigth')?>

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




