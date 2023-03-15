var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});

function style_nuevapompeya_0_0() {
    return {
        interactive: true,
    }
}

function tooltip_nuevapompeya_point(feature) {

    let layer = feature;
    let popupContent_2 = '<strong>' + layer.properties.Nombre.toString() + '</strong>';
    return popupContent_2;
}


function showPopupNuevapompeyaPOI(feature)
{
    getDataFromNuevapompeyaPOI(feature);
}

function getDataFromNuevapompeyaPOI(feature)
{
    //console.log(feature);
    let id = feature.target.feature.properties.fid;

    let id_loc = feature.target.feature.properties.localidad;

    //Hago la consulta jquery, pero espero el resultado para seguir
    let url = 'getDataPOIById';
    $.ajax({

        type: "POST",
        async: true,
        url: url,
        data: {'id' : id, 'id_loc' : id_loc},
        beforeSend: function (xhr) { // Add this line
            xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
            //Debo mostrar un loading

        },

    }) .done(function( data ) {
        console.log(data);
        //create popup with information
        createdPopup(feature, data);

    })  .fail(function() {
        alert( "error" );
    });
}

function createdPopup(feature, data)
{
    let layer = feature.target;
    //console.log(layer);

    let title = "<h5 style='text-align: center; color: #0c4128;'>" + layer.feature.properties.Nombre.toString() +  "</h5>"
    let resumen = "<p style='text-align: justify;'>" + data[0].resumen.toString() +  "</p>"
    let img = "<div style='width: 100%; height: 200px; display: initial;'><img style='filter: saturate(180%); max-height: 275px; display: block; margin: 0 auto;' class='img-thumbnail' src='" +  data[0].path.toString() +"' alt='Monumento a la Bandera'></img></div>";

    let popupContent = title + resumen + img;
    layer.bindPopup(popupContent, {maxHeight: 400, offset: L.point(5, 67), className: 'popup-impenetrable-resumen'}).openPopup();


}




function onEachFeatureNuevapompeyaPoint(feature, layer)
{
    layer.on({
        click: null,
        mouseover: showPopupNuevapompeyaPOI
    });
    let popupContent_ = tooltip_nuevapompeya_point(feature);

    //layer.bindPopup('<h1>'+feature.properties.desc_texto+ '</p>');

    //layer.bindPopup(popupContent_, {maxHeight: 400, offset: L.point(5, 67)});

    layer.bindTooltip("<div style=''>" + popupContent_ + "</></div>",
        {
            direction: 'right',
            permanent: false,
            sticky: true,
            offset: [10, 0],
            opacity: 0.75,
            className: 'leaflet-tooltip'
        }).openTooltip();

}

var artesaniasIcon = L.icon({
    iconUrl: '../webroot/img/icons/ceramica.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});


var areaNaturalIcon = L.icon({
    iconUrl: '../webroot/img/icons/hoja.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var miradorIcon = L.icon({
    iconUrl: '../webroot/img/icons/observacion.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var greenSpaceIcon = L.icon({
    iconUrl: '../webroot/img/icons/parque_nat.png',
    iconSize:     [45, 45], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});


var misionIcon = L.icon({
    iconUrl: '../webroot/img/icons/iglesia.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var casaParqueIcon = L.icon({
    iconUrl: '../webroot/img/icons/casa-verde.png',
    iconSize:     [25, 25], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});



var parajeIndIcon = L.icon({
    iconUrl: '../webroot/img/icons/maloca.png',
    iconSize:     [30, 30], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});


var layer_nuevapompeya_point = new L.geoJson(nueva_pompeya_point, {
    attribution: '',
    interactive: false,
    minZoom: 10,
    dataVar: 'nuevapompeya_point',
    layerName: 'layer_nuevapompeya_point',
    onEachFeature: onEachFeatureNuevapompeyaPoint,
    pointToLayer: function (feature, latlng) {
        var context = {
            feature: feature,
            variables: {}
        };
        //return L.circleMarker(latlng, style_localidades_0_0(feature));
        //console.log(feature.properties.categoria);
        switch (feature.properties.categoria) {
            case 1:
                return L.marker(latlng, {icon: areaNaturalIcon});
            case 2:
                return L.marker(latlng, {icon: artesaniasIcon});
            case 3:
                return L.marker(latlng, {icon: misionIcon});
            case 4:
                return L.marker(latlng, {icon: miradorIcon});
            case 5:
                return L.marker(latlng, {icon: parajeIndIcon});
            case 6:
                return L.marker(latlng, {icon: greenSpaceIcon});
            case 7:
                return L.marker(latlng, {icon: casaParqueIcon});

        }
    },
});

