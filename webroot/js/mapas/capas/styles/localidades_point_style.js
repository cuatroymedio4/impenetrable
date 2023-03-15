

var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});

function pop_localidades_point(feature) {

    let layer = feature.target;
    //console.log(layer);

    var popupContent = '<table>\
                    <tr>\
                        <td colspan="2"><strong><br />' + (layer.feature.properties['name'] !== null ? autolinker.link(layer.feature.properties['name']) : '') + '</strong></td>\
                    </tr>\
                </table>';
    layer.bindPopup(popupContent, {maxHeight: 400, offset: L.point(5, 67), className: 'popup-impenetrable'}).openPopup();
}

function closePopup(e)
{
    e.target.closePopup();
}


function style_localidades_0_0() {
    return {
        interactive: true,
    }
}

function zoomToFeature(e) {
    //console.log(e.target.feature.geometry.coordinates);
    let latlong = e.target.feature.geometry.coordinates;

    map.flyTo([latlong[1], latlong[0]], 12);

    getDataFromLocalidad(e.target);

}


//TRaigo los datos de esta localidad
function getDataFromLocalidad(layer)
{

    let id = layer.feature.properties.fid;

   //Hago la consulta jquery, pero espero el resultado para seguir
    let url = 'getDataLocalidadById';
    $.ajax({

        type: "POST",
        async: true,
        url: url,
        data: {'id' : id},


        beforeSend: function (xhr) { // Add this line
            xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
            //Debo mostrar un loading

        },

    }) .done(function( data ) {
        showLocalidadDescription(data);
        showPanelInfo();
    })  .fail(function() {
        alert( "error" );
    });

}

function showLocalidadDescription(data)
{
    let tab_loc = $("#tab_localidad_description");

    tab_loc.empty();

    tab_loc.append(data[0].descripcion);

}


function showPanelInfo()
{
    $("#mySidepanelLeft").addClass("active")
    $("#tab-1").removeClass("active");
    $("#a-tab1").removeClass("active");

    $("#tab_localidad_description").addClass("active");
    $("#a-tab2").addClass("active");
}


function prueba(e)
{
    console.log("pruebaa");
}

function onEachFeatureLocPoint(feature, layer)
{
    layer.on({
        mouseover: pop_localidades_point,
        mouseout: closePopup,
        click: zoomToFeature
    });
}




var greenIcon = L.icon({
    iconUrl: '../webroot/img/icons/location.png',
    iconSize:     [50, 50], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});






var layer_localidades_point = new L.geoJson(localidades_point, {
    attribution: '',
    interactive: false,
    dataVar: 'localidades_point',
    layerName: 'layer_localidades_point',
    onEachFeature: onEachFeatureLocPoint,
    pointToLayer: function (feature, latlng) {
        var context = {
            feature: feature,
            variables: {}
        };
        //return L.circleMarker(latlng, style_localidades_0_0(feature));
        return L.marker(latlng, {icon: greenIcon});
    },
});

