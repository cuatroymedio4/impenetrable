var wms_layers = [];



var lyr_esristreet_0 = L.tileLayer('http://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png',{attribution: 'Tiles &copy; CartoDB'});

        /*var lyr_esristreet_0 = new ol.layer.Tile({
            'title': 'esri street',
            'type': 'base',
            'opacity': 1.000000,
            source: new ol.source.XYZ({
    attributions: ' ',
                url: 'http://services.arcgisonline.com/ArcGIS/rest/services/NatGeo_World_Map/MapServer/tile/{z}/{y}/{x}'

            })
        });*/


var format_PN_limite_Project_1 = new ol.format.GeoJSON();
var features_PN_limite_Project_1 = format_PN_limite_Project_1.readFeatures(json_PN_limite_Project_1,
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});

var jsonSource_PN_limite_Project_1 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_PN_limite_Project_1.addFeatures(features_PN_limite_Project_1);
var lyr_PN_limite_Project_1 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_PN_limite_Project_1,
                style: style_PN_limite_Project_1,
                interactive: true,
                title: '<img src="styles/legend/PN_limite_Project_1.png" /> PN_limite_Project'
            });

lyr_esristreet_0.setVisible(true);lyr_PN_limite_Project_1.setVisible(true);
var layersList = [lyr_esristreet_0,lyr_PN_limite_Project_1];
lyr_PN_limite_Project_1.set('fieldAliases', {'categ': 'categ', 'nombre': 'nombre', 'instrum': 'instrum', 'ley_decret': 'ley_decret', 'año': 'año', 'sup_legal': 'sup_legal', });
lyr_PN_limite_Project_1.set('fieldImages', {'categ': 'TextEdit', 'nombre': 'TextEdit', 'instrum': 'TextEdit', 'ley_decret': 'TextEdit', 'año': 'TextEdit', 'sup_legal': 'TextEdit', });
lyr_PN_limite_Project_1.set('fieldLabels', {'categ': 'no label', 'nombre': 'no label', 'instrum': 'no label', 'ley_decret': 'no label', 'año': 'no label', 'sup_legal': 'no label', });
lyr_PN_limite_Project_1.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});
