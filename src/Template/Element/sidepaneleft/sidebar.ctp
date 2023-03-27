<!-- New -->
<div id="sidebar" class="leaflet-sidebar collapsed">
    <!-- Nav tabs -->
    <div class="leaflet-sidebar-tabs sidepanel-tabs-wrapper">
        <ul role="tablist"> <!-- top aligned tabs -->
                <li>
                    <a href="#" class="active" role="tab" data-tab-link="tab-1" id="tab-1">
                        <i class="fa fa-2x"><img src="../img/icon-list-places.png" alt="alternatetext" width="40px" height="40px"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="sidebar-tab-link" role="tab" data-tab-link="tab-2" id="tab-2">
                        <i class="fa fa-2x"><img src="../img/icon-2.png" alt="alternatetext" width="40px" height="40px"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="sidebar-tab-link" role="tab" data-tab-link="tab-3" id="tab_POI">
                        <i class="fa fa-2x"><img src="../img/icon-interest-point.png" alt="alternatetext" width="40px" height="40px"></i>
                    </a>
                </li>
        </ul>

        <!-- <ul role="tablist"> --> <!-- bottom aligned tabs -->
            <!-- <li><a href="#settings" role="tab"><i class="fa fa-gear"></i></a></li>
        </ul> -->
    </div>

    <!-- Tab panes -->
    <div class="leaflet-sidebar-content">
        <div class="leaflet-sidebar-pane" data-tab-content="tab-1" id="tab-1">
            <h1 class="leaflet-sidebar-header">
                Lugares
                <div class="leaflet-sidebar-close"><i class="fa fa-caret-left"></i></div>
            </h1>
            <div class="card">
                <div class="bd-placeholder-img card-img-top">
                        <img class="img-header-card"
                            src="../img/header_loc/miraflores_img.jpg" alt="header" width="100%" height="100%" style="filter: saturate(140%);">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title" style="color: #198754;">Miraflores</h5>
                        <p class="card-text">Se localiza a unos 308,5 Km. de la ciudad de Resistencia por Ruta Provincial Nº 9.</p>
                        <button class="btn btn-success float-right" attr="1" onclick="viewMoreBtnLocalidad(this)"><i class="fas fa-map-marked-alt"></i> Ver más....</button>
                    </div>
                </div>

                <div class="card" style="margin-top: 20px;">

                    <div class="bd-placeholder-img card-img-top">
                        <img class="img-header-card"
                             src="../img/header_loc/IMG_20220602_111053680_HDR.jpg" alt="header" width="100%" height="100%" style="filter: saturate(180%);">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title" style="color: #198754;">Misión Nueva Pompeya</h5>
                        <p class="card-text">La localidad de Misión Nueva Pompeya se localiza en el departamento General Güemes de la provincia del Chaco.
                            A unos 185 kilómetros de la ciudad de Castelli y a unos 480 kilómetros de la ciudad de Resistencia.
                        </p>
                        <!-- Funcion de focus map -->
                        <button class="btn btn-success float-right" attr="2" onclick="viewMoreBtnLocalidad(this)"><i class="fas fa-map-marked-alt"></i> Ver más....</button>
                    </div>
                </div>

                <div class="card" style="margin-top: 20px;">

                    <div class="bd-placeholder-img card-img-top">
                        <img class="img-header-card"
                             src="../img/header_loc/miraflores_img.jpeg" alt="header" width="100%" height="100%">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title" style="color: #198754;">Fuerte Esperanza</h5>
                        <p class="card-text">Se localiza a unos 308,5 Km. de la ciudad de Resistencia por Ruta Provincial Nº 9.</p>
                        <!-- Funcion de focus map -->
                        <button class="btn btn-success float-right" attr="3" onclick="viewMoreBtnLocalidad(this)"><i class="fas fa-map-marked-alt"></i> Ver más....</button>
                    </div>
                </div>

                <div class="card" style="margin-top: 20px;">

                    <div class="bd-placeholder-img card-img-top">
                        <img class="img-header-card"
                             src="../img/header_loc/el_sauzalito.jpeg" alt="header" width="100%" height="100%" style="filter: saturate(180%);">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title" style="color: #198754;">El Sauzalito</h5>
                        <p class="card-text">Se localiza a unos 308,5 Km. de la ciudad de Resistencia por Ruta Provincial Nº 9.</p>
                        <!-- Funcion de focus map -->
                        <button class="btn btn-success float-right" attr="4" onclick="viewMoreBtnLocalidad(this)"><i class="fas fa-map-marked-alt"></i> Ver más....</button>
                    </div>
                </div>

                <div class="card" style="margin-top: 20px;">

                    <div class="bd-placeholder-img card-img-top">
                        <img class="img-header-card"
                             src="../img/header_loc/rio_bermejito_JPG" alt="header" width="100%" height="100%" style="filter: saturate(180%);">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title" style="color: #198754;">Villa Rio Bermejito</h5>
                        <p class="card-text">Se localiza a unos 308,5 Km. de la ciudad de Resistencia por Ruta Provincial Nº 9.</p>
                        <!-- Funcion de focus map -->
                        <button class="btn btn-success float-right" attr="5" onclick="viewMoreBtnLocalidad(this)"><i class="fas fa-map-marked-alt"></i> Ver más....</button>
                    </div>
                </div>

                <div class="card" style="margin-top: 20px;">

                    <div class="bd-placeholder-img card-img-top">
                        <img class="img-header-card"
                             src="../img/header_loc/miraflores_img.jpeg" alt="header" width="100%" height="100%">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title" style="color: #198754;">Comandancia Frías</h5>
                        <p class="card-text">Se localiza a unos 308,5 Km. de la ciudad de Resistencia por Ruta Provincial Nº 9.</p>
                        <!-- Funcion de focus map -->
                        <button class="btn btn-success float-right" attr="6" onclick="viewMoreBtnLocalidad(this)"><i class="fas fa-map-marked-alt"></i> Ver más....</button>
                    </div>
                </div>
            </div>

            <div class="leaflet-sidebar-pane" data-tab-content="tab-2" id="tab_localidad_description" id="tab-2">
                <h1 class="leaflet-sidebar-header">
                    Descripción
                    <div class="leaflet-sidebar-close"><i class="fa fa-caret-left"></i></div>
                </h1>
            </div>

            <div class="leaflet-sidebar-pane" data-tab-content="tab-3"  id="tab_POI">
                <h1 class="leaflet-sidebar-header">
                    Puntos de interés
                    <div class="leaflet-sidebar-close"><i class="fa fa-caret-left"></i></div>
                </h1>
            </div>
        </div>
    </div>

