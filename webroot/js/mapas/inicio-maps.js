


var map = L.map('map', {
    zoomControl:true,
    maxZoom:28,
    minZoom:1,
    center: [-26, -61],
    zoom: 7
});





var hash = new L.Hash(map);
map.attributionControl.setPrefix('<a href="https://iighi.conicet.gov.ar/" target="_blank">IIGHI</a> &middot; ' +
    '<a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot;');
var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});


var bounds_group = new L.featureGroup([]);
function setBounds() {
}


L.tileLayer('http://services.arcgisonline.com/ArcGIS/rest/services/NatGeo_World_Map/MapServer/tile/{z}/{y}/{x}',
    {foo: 'bar', attribution: '&copy; <a href="#">NatGeo</a> contributors'}).addTo(map);





function style_area_de_estudio_1_0() {
    return {
        pane: 'pane_area_de_estudio_1',
        opacity: 1,
        color: 'rgba(51,160,44,1.0)',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 3.0,
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(133,182,111,1.0)',
        interactive: true,
    }
}





function pop_area_de_estudio_1(feature, layer) {
    var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
    layer.bindPopup(popupContent, {maxHeight: 400});
}

map.createPane('pane_area_de_estudio_1');
map.getPane('pane_area_de_estudio_1').style.zIndex = 401;
map.getPane('pane_area_de_estudio_1').style['mix-blend-mode'] = 'normal';

var layer_area_de_estudio_1 = new L.geoJson(json_PN_limite_Project_1, {
    attribution: '',
    interactive: true,
    dataVar: 'json_area_de_estudio_1',
    layerName: 'layer_area_de_estudio_1',
    pane: 'pane_area_de_estudio_1',
    onEachFeature: onEachFeature,
    style: style_area_de_estudio_1_0,
});



function resetHighlight(e)
{
    layer_area_de_estudio_1.resetStyle(e.target);
}


function highlightFeature(e) {
    var layer = e.target;

    layer.setStyle({
        weight: 2,
        color: '#6b5e00',
        fillColor: '#fceb45',
        dashArray: '',
        fillOpacity: 0.7
    });
}

function onEachFeature(feature, layer) {
    layer.bindPopup("<b>CLAVE:" + feature.properties.nombre + "</b>");
    layer.on('mouseover', function(e) {
        highlightFeature(e);
    });
    layer.on('mouseout', function(e) {
        resetHighlight(e);
    });

}

var info = L.control();

info.onAdd = function (map) {
    this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
    this.update();
    return this._div;
};


// method that we will use to update the control based on feature properties passed
info.update = function (props) {
    this._div.innerHTML = '<h4>El Impenetrable</h4>';
};

info.addTo(map);


var legend = L.control({position: 'bottomright'});

legend.onAdd = function (map) {

    var div = L.DomUtil.create('div', 'info legend'),
        grades = [0, 10, 20, 50, 100, 200, 500, 1000],
        labels = [];

    // loop through our density intervals and generate a label with a colored square for each interval

        div.innerHTML +=
            '<i style="background:' + 'rgba(51,160,44,1.0)' + '"></i>' + 'Reserva Natural el Impenetrable';


    return div;
};


legend.addTo(map);

bounds_group.addLayer(layer_area_de_estudio_1);
map.addLayer(layer_area_de_estudio_1);


