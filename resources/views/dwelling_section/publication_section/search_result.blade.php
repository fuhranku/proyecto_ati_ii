<!-- Search Result -->
@include('dwelling_section.search_section.search_media_carousel')

<div class="col-md-8 d-none" style="margin-left:15px;" id="dwelling-search-result">

    <p>Haz clic en la vivienda de tu preferencia, para ver más información, o selecciona  la vivienda de tu preferencia, para habilitar o deshabilitar los botones expresados a continuación: </p>

    <button type="button" id="btn-dwelling-detail" onclick="detailDwelling()" class="btn btn-info d-none">Ver Detalle</button>
    <button type="button" id="btn-dwelling-modify" onclick="modifyDwelling()" class="btn btn-primary d-none">Modificar</button>
    <button type="button" id="btn-dwelling-disable" onclick="disableDwelling()" class="btn btn-warning text-white d-none">Deshabilitar</button>
    <button type="button" id="btn-dwelling-enable" onclick="enableDwelling()" class="btn btn-success d-none">Habilitar</button>
    <button type="button" id="btn-dwelling-remove" onclick="deleteDwelling()" class="btn btn-danger d-none">Eliminar</button>

    <p class="h5 pt-4">Haz clic en la vivienda de tu preferencia, para ver más información</p>

    <!-- search filter -->
    <div class="row">
        <div class="col-md-12 bg-yellow">
            <p class="mt-1 text-light font-weight-bold">Publicaciones Realizadas</p>
        </div>
    </div>

    <div class="row border border-warning">
        <div class="col-md-4">
            <p class="h5 text-danger font-weight-bold">Ver listado como</p>
        </div>
        <div class="col-md-4">
            <input class="form-check-input" type="radio" name="d-dwelling-mode" onchange="onChangeSearchDisplay()" value="1" checked>
            <label class="form-check-label" for="exampleRadios1">
                Tipo foto
            </label>
        </div>

        <div class="col-md-4">
            <input class="form-check-input" type="radio" name="d-dwelling-mode" onchange="onChangeSearchDisplay()" value="2">
            <label class="form-check-label" for="exampleRadios1">
                Tipo lista
            </label>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 border border-warning">
            <p class="text-blue mt-3">Seleccione los filtros especificados a continuacion, si desea filtrar los resultados obtenidos</p>
        </div>
    </div>

    <div class="row border border-warning" id="dwelling_prop_filters">
        <div class="col-md-3">
            <p class="text-danger mt-3 font-weight-bold">Tipo de vivienda</p>
        </div>

        <div class="col-md-9 mt-2">
            <button type="button" onclick="onPressDisplayApt()" id="button_dwelling_apt" class="btn btn-info font-weight-bold ">Apartamento</button>
            <button type="button" onclick="onPressDisplayHouse()" id="button_dwelling_house" class="btn btn-primary font-weight-bold">Casa o quinta</button>
            <button type="button" onclick="onPressDisplayAll()" id="button_dwelling_apt_house" class="btn btn-warning font-weight-bold text-white">Apartamento y casa</button>
        </div>
    </div>

    <div class="row border border-warning" id="dwelling_status_filters">
        <div class="col-md-3">
            <p class="text-danger mt-3 font-weight-bold">Vivienda en</p>
        </div>

        <div class="col-md-9 mt-2">
            <button type="button" onclick="onPressDisplaySell()" id="button_dwelling_sell" class="btn btn-info font-weight-bold">Venta</button>
            <button type="button" onclick="onPressDisplayRent()" id="button_dwelling_rent" class="btn btn-primary font-weight-bold">Alquiler</button>
            <button type="button" onclick="onPressDisplayAll()" id="button_dwelling_sell_rent" class="btn btn-warning font-weight-bold text-white">Alquiler y venta</button>
        </div>
    </div>

    <div class="row border border-warning">
        <div class="col-md-4">
            <p class="text-danger mt-3 font-weight-bold">Ordenar resultados por</p>
        </div>

        <div class="col-md-8 mt-2">
            <button type="button" onclick="sortDwellingByPrice()" class="btn btn-info font-weight-bold">Precio</button>
        </div>
    </div>

    <div class="row border border-warning">
        <div class="col-md-12">
            <nav aria-label="Page navigation example" class="mt-3 ml-5">
                <ul class="pagination" id="pagination_fs">
                    
                </ul>
            </nav>
        </div>
    </div>

    @include('dwelling_section.search_section.search_result_photo')
    @include('dwelling_section.search_section.search_result_list')

</div>