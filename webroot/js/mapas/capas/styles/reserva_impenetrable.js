function style_area_de_estudio_1_0() {
    return {
        opacity: 1,
        color: 'rgba(51,160,44,1.0)',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0,
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(133,182,111,0.38)',
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


var layer_area_de_estudio_1 = new L.geoJson(json_PN_limite_Project_1, {
    attribution: '',
    interactive: true,
    dataVar: 'json_area_de_estudio_1',
    layerName: 'layer_area_de_estudio_1',

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

