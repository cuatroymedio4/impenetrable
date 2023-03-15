var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});

function style_miraflores_0_0() {
    return {
        interactive: true,
    }
}

function tooltip_miraflores_point(feature) {

    let layer = feature;
    let popupContent_2 = '<strong>' + layer.properties.Nombre.toString() + '</strong>';
    return popupContent_2;
}


function showPopupMirafloresPOI(feature)
{
    getDataFromMirafloresPOI(feature);
}

function getDataFromMirafloresPOI(feature)
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




function onEachFeatureMirafloresPoint(feature, layer)
{
    layer.on({
        click: null,
        mouseover: showPopupMirafloresPOI
    });
    let popupContent_ = tooltip_miraflores_point(feature);

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

var treeIcon = L.icon({
    iconUrl: '../webroot/img/icons/tree.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var greenIcon = L.icon({
    iconUrl: '../webroot/img/icons/hoja.png',
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

var escuelaIcon = L.icon({
    iconUrl: '../webroot/img/icons/colegio.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var greenSpaceIcon = L.icon({
    iconUrl: '../webroot/img/icons/parque.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var monumentosIcon = L.icon({
    iconUrl: '../webroot/img/icons/monumento.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var gobiernoIcon = L.icon({
    iconUrl: '../webroot/img/icons/gobierno.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var deporteIcon = L.icon({
    iconUrl: '../webroot/img/icons/deporte.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var argentinaFlagIcon = L.icon({
    iconUrl: '../webroot/img/icons/argentina_flag.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var comercioIcon = L.icon({
    iconUrl: '../webroot/img/icons/tienda.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var comercioApicultorIcon = L.icon({
    iconUrl: '../webroot/img/icons/tienda_abeja.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var malvinasIcon = L.icon({
    iconUrl: '../webroot/img/icons/malvinas.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var parajeIndIcon = L.icon({
    iconUrl: '../webroot/img/icons/maloca.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});


var layer_miraflores_point = new L.geoJson(miraflores_point, {
    attribution: '',
    interactive: false,
    minZoom: 10,
    dataVar: 'miraflores_point',
    layerName: 'layer_miraflores_point',
    onEachFeature: onEachFeatureMirafloresPoint,
    pointToLayer: function (feature, latlng) {
        var context = {
            feature: feature,
            variables: {}
        };
        //return L.circleMarker(latlng, style_localidades_0_0(feature));
        //console.log(feature.properties.categoria);
        switch (feature.properties.categoria) {
            case 1:
                return L.marker(latlng, {icon: treeIcon});
            case 2:
                return L.marker(latlng, {icon: greenIcon});
            case 3:
                return L.marker(latlng, {icon: escuelaIcon});
            case 4:
                return L.marker(latlng, {icon: greenSpaceIcon});
            case 5:
                return L.marker(latlng, {icon: monumentosIcon});
            case 6:
                return L.marker(latlng, {icon: gobiernoIcon});
            case 7:
                return L.marker(latlng, {icon: deporteIcon});
            case 8:
                return L.marker(latlng, {icon: comercioIcon});
            case 9:
                return L.marker(latlng, {icon: argentinaFlagIcon});
            case 10:
                return L.marker(latlng, {icon: comercioApicultorIcon});
            case 11:
                return L.marker(latlng, {icon: malvinasIcon});
            case 12:
                return L.marker(latlng, {icon: parajeIndIcon});
        }
    },
});

