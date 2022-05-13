<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <?= $this->Html->css('area_estudio/resources/ol.css') ?>
        <?= $this->Html->css('area_estudio/resources/fontawesome-all.min.css') ?>
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
        html, body {
            background-color: #ffffff;
        }
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
        <title></title>
    </head>
    <body>
        <div id="map">
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

    </body>
</html>
