


var hash = new L.Hash(map);
map.attributionControl.setPrefix('<a href="https://iighi.conicet.gov.ar/" target="_blank">IIGHI</a> &middot; ' +
    '<a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot;');
var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});


var bounds_group = new L.featureGroup([]);
function setBounds() {
}


/*L.tileLayer('https://services.arcgisonline.com/arcgis/rest/services/NatGeo_World_Map/MapServer/tile/{z}/{y}/{x}',
    {attribution: '&copy; <a href="#">NatGeo</a> contributors'}).addTo(map);*/

/*L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
    maxZoom: 17,
    attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
}).addTo(map);*/

var OpenStreetMap_HOT = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Tiles style by <a href="https://www.hotosm.org/" target="_blank">Humanitarian OpenStreetMap Team</a> hosted by <a href="https://openstreetmap.fr/" target="_blank">OpenStreetMap France</a>'
}).addTo(map);


var OpenTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
    maxZoom: 17,
    attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
});

var Stadia_AlidadeSmoothDark = L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png', {
    maxZoom: 20,
    attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
});


var argenmap = new L.tileLayer('https://wms.ign.gob.ar/geoserver/gwc/service/tms/1.0.0/capabaseargenmap@EPSG%3A3857@png/{z}/{x}/{-y}.png', {
    minZoom: 1, maxZoom: 20,
    attribution: 'Instituto Geográfico Nacional'

});



var Esri_WorldImagery = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
    attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
});


var open_de = OpenStreetMap_DE = L.tileLayer('https://{s}.tile.openstreetmap.de/{z}/{x}/{y}.png', {
    maxZoom: 18,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});



var tile1 = OpenStreetMap_Mapnik = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});

let natgeo = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/NatGeo_World_Map/MapServer/tile/{z}/{y}/{x}', {
    attribution: 'Tiles &copy; Esri &mdash; National Geographic, Esri, DeLorme, NAVTEQ, UNEP-WCMC, USGS, NASA, ESA, METI, NRCAN, GEBCO, NOAA, iPC',
    maxZoom: 16
});

let base = {
    "OpenStreetMap_HOT":OpenStreetMap_HOT,
    "argenmap": argenmap,
    "Esri_WorldImagery": Esri_WorldImagery,
    "OpenStreetMapDE" : open_de,
    "OpenStreetMap": tile1,
    "NatGeo" : natgeo,
    "Stadia_AlidadeSmoothDark" : Stadia_AlidadeSmoothDark,
    "OpenTopoMap" : OpenTopoMap,


}

let layerControl = L.control.layers(base, null).addTo(map);

//L.tileLayer('http://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png',{attribution: 'Tiles &copy; CartoDB'}).addTo(map);



const sidepanelLeft = L.control.sidepanel('mySidepanelLeft', {
    tabsPosition: 'left',
    startTab: 'tab-5'
}).addTo(map);


const sidepanelRight = L.control.sidepanel('mySidepanelRight', {
    panelPosition: 'right',
    tabsPosition: 'top',
    startTab: 'tab-1'
}).addTo(map);


//ES la reserva
map.addLayer(layer_area_de_estudio_1);
//LOcalidades point son las ciudades relevadas
//Tengo que traer la info tmb para construir
//Utilizo localidades?point json


$(function ()
{

    //RECORRO EL JSON Y OBTENTO EL ID
    let localidades = [];
    let array = [];

    $.each(localidades_point.features, function(i, item) {

        localidades.push({"fid" : item.properties.fid});

    });
    //localidades.push(["localidades" : array])
   //console.log(array);

    //let id = e.target.feature.properties.fid;

    //Hago la consulta jquery, pero espero el resultado para seguir
    let url = 'getDataByLocalidadIdAll';
    $.ajax({

        type: "POST",
        async: true,
        url: url,
        data: {'localidades' : localidades},

        beforeSend: function (xhr) { // Add this line
            xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
            //Debo mostrar un loading

        },

    }) .done(function( data ) {

        console.log(data);





    })  .fail(function() {
        alert( "error" );
    });


});


function viewMoreBtnLocalidad(bnt)
{

    let btn_control = $(bnt);
    let id_loc = btn_control.attr('attr');

    //get Localidades Layer by id
    //console.log(layer_localidades_point.getLayers());

    layer_localidades_point.getLayers().forEach(function(layer, index){

        if(layer.feature.properties.fid.toString() === id_loc.toString())
        {
            flyToPointByLayer(layer);

            getDataFromLocalidad(layer);

            showPointOfInteresInPanel(id_loc);
        }

    })

}


function changeColorBoxLocalidad(id)
{

}

function showPointOfInteresInPanel(id_loc)
{

    $("#tab_POI").empty();
    //CArga el panel izquierdo con los puntos de interes
    if(id_loc === '1'){
        layer_miraflores_point.getLayers().forEach(function(layer, index){

            createLabelLeft(layer.feature.properties.Nombre.toString(), id_loc, layer.feature.properties.fid);
        })


    } else if(id_loc === '2'){

        layer_nuevapompeya_point.getLayers().forEach(function(layer, index){

            createLabelLeft(layer.feature.properties.Nombre.toString(), id_loc, layer.feature.properties.fid);
        })
    }
}

function createLabelLeft(title, idloc, id_layer)
{
        let div_container = '<div class="div-label-left-container">' +
                                '<div>' +
                                    '<div class="div-img">' +
                                        ' <img src="../img/icons/mapa.png" alt="img" class="img-label">' +
                                    '</div>' +
                                    ' <span class="span-name">' + title + '</span>' +
                                    '<div class="div-btn">' +
                                        '<button type="button" class="btn btn-success px-3" attr="' + idloc + '" attr2="' + id_layer +'" onclick="showLayerPOI(this)"><i class="fas fa-eye" aria-hidden="true"></i>' +
                                        '</button>' +
                                    '</div>' +
                                ' </div>' +
                                '</div>';

        $("#tab_POI").append(div_container);


}

function showLayerPOI(bnt)
{
    let btn_control = $(bnt);
    let id_loc = btn_control.attr('attr');
    let id_layer = btn_control.attr('attr2');

    if(id_loc === '1'){
        layer_miraflores_point.getLayers().forEach(function(layer, index){

            if(layer.feature.properties.fid.toString() === id_layer.toString())
            {
                flyToPointByLayerPOI(layer);
                return true;
            }



        })


    } else if(id_loc === '2'){

        layer_nuevapompeya_point.getLayers().forEach(function(layer, index){

            if(layer.feature.properties.fid.toString() === id_layer.toString())
            {
                flyToPointByLayerPOI(layer);
                return true;

            }

        })
    }


}

/*
     <div className="div-label-left-container">
        <div>
            <div className="div-img">
                <img src="../img/icons/argentina_flag.png" alt="img" className="img-label">
            </div>
            <span className="span-name">dhfishdfpihasdigdabfhafbhdfnnnnnnnnnnnnnnnndshdfh shhs</span>

            <div className="div-btn">
                <button type="button" className="btn btn-success px-3"><i className="fas fa-eye" aria-hidden="true"></i>
                </button>
            </div>

        </div>
    </div>


    */


function flyToPointByLayer(layer){


    let latlong = layer.feature.geometry.coordinates;

    map.flyTo([latlong[1], latlong[0]], 12);

}

function flyToPointByLayerPOI(layer){


    let latlong = layer.feature.geometry.coordinates;

    map.flyTo([latlong[1], latlong[0]], 19);

}


function drawLocalidadesToSidePane()
{

}



map.addLayer(layer_localidades_point);



map.on('zoomend', function (e) {
    if(map.getZoom() >= 12){
        map.addLayer(layer_miraflores_point);
        //ELimino los puntos de la localidad
        map.removeLayer(layer_localidades_point);

        map.addLayer(layer_nuevapompeya_point);
        //ELimino los puntos de la localidad

    } else {
        map.removeLayer(layer_miraflores_point);
        map.removeLayer(layer_nuevapompeya_point);
        map.addLayer(layer_localidades_point);
    }
});


