
<?= $this->Html->css('area_estudio/resources/ol.css') ?>
<?= $this->Html->css('area_estudio/resources/ol-layerswitcher.css') ?>
<?= $this->Html->css('area_estudio/resources/qgis2web.css') ?>

<style>
    .search-layer {
        top: 65px;
        left: .5em;
    }
    .ol-touch .search-layer {
        top: 80px;
    }
</style>
<style>
    .ol-control button {
        background-color: #f8f8f8 !important;
        color: #000000 !important;
        border-radius: 0px !important;
    }
    .ol-zoom, .geolocate, .gcd-gl-control .ol-control {
        background-color: rgba(255,255,255,.4) !important;
        padding: 3px !important;
    }
    .ol-scale-line {
        background: none !important;
    }
    .ol-scale-line-inner {
        border: 2px solid #f8f8f8 !important;
        border-top: none !important;
        background: rgba(255, 255, 255, 0.5) !important;
        color: black !important;
    }
</style>
<style>
    #map {
        width: 100%;
        height: 545px;
    }
</style>

<div id="map" style="border: 1px solid black; height: 550px";>
    <div id="popup" class="ol-popup">
        <a href="#" id="popup-closer" class="ol-popup-closer"></a>
        <div id="popup-content"></div>
    </div>

</div>


<?= $this->Html->script('mapas/area_estudio/resources/qgis2web_expressions.js') ?>
<?= $this->Html->script('mapas/area_estudio/resources/polyfills.js') ?>
<?= $this->Html->script('mapas/area_estudio/resources/functions.js') ?>
<?= $this->Html->script('mapas/area_estudio/resources/ol.js') ?>
<?= $this->Html->script('mapas/area_estudio/resources/ol-layerswitcher.js') ?>
<?= $this->Html->script('mapas/area_estudio/layers/PN_limite_Project_1.js') ?>
<?= $this->Html->script('mapas/area_estudio/styles/PN_limite_Project_1_style.js') ?>
<?= $this->Html->script('mapas/area_estudio/layers/layers.js') ?>
<?= $this->Html->script('mapas/area_estudio/resources/Autolinker.min.js') ?>
<?= $this->Html->script('mapas/area_estudio/resources/qgis2web.js') ?>
