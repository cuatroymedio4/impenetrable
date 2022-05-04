
<?= $this->Html->css('leaflet/leaflet.css') ?>
<?= $this->Html->css('mapas/mapas.css') ?>

<?= $this->Html->script('leaflet/qgis2web_expressions.js') ?>
<?= $this->Html->script('leaflet/leaflet.js') ?>

<?= $this->Html->script('leaflet/leaflet.rotatedMarker.js') ?>
<?= $this->Html->script('leaflet/leaflet.pattern.js') ?>
<?= $this->Html->script('leaflet/leaflet-hash.js') ?>
<?= $this->Html->script('leaflet/Autolinker.min.js') ?>
<?= $this->Html->script('leaflet/rbush.min.js') ?>
<?= $this->Html->script('leaflet/labelgun.min.js') ?>
<?= $this->Html->script('leaflet/labels.js') ?>





<style>
    #map {
        width: 100%;
        height: 548px;
    }
</style>

<div id="map">
</div>


<?= $this->Html->script('mapas/capas/inicio/PN_limite_Project_1.js') ?>
<?= $this->Html->script('mapas/inicio-maps.js') ?>


