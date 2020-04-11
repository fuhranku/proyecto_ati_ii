<p>Haz clic en la vivienda de tu preferencia, para ver más información, o selecciona  la vivienda de tu preferencia, para habilitar o deshabilitar los botones expresados a continuación: </p>
<div class="container d-flex justify-content-center">
    <button type="button" id="btn-dwelling-detail" onclick="detailDwelling()" class="btn btn-blue d-none text-white font-weight-bold mr-2">Ver Detalle</button>
    <button type="button" id="btn-dwelling-modify" onclick="modifyDwelling()" class="btn btn-green d-none text-white font-weight-bold mr-2">Modificar</button>
    <button type="button" id="btn-dwelling-disable" onclick="disableDwelling()" class="btn btn-warning text-white d-none font-weight-bold mr-2">Deshabilitar</button>
    <button type="button" id="btn-dwelling-enable" onclick="enableDwelling()" class="btn btn-success d-none font-weight-bold mr-2">Habilitar</button>
    <button type="button" id="btn-dwelling-remove" onclick="deleteDwelling()" class="btn btn-danger d-none font-weight-bold">Eliminar</button>
</div>

<p class="h5 pt-4 font-weight-bold">Haz clic en la vivienda de tu preferencia, para ver más información</p>

<!-- search filter -->
<div class="row mb-1">
    <div class="col-md-12 bg-yellow pb-2">
        <p class="mt-1 text-light font-weight-bold my-auto">Publicaciones Realizadas</p>
    </div>
</div>

<div class="row border border-warning pt-1 pb-1">
    <div class="col-md-3">
        <p class="text-red font-weight-bold my-auto">Ver listado como:</p>
    </div>
    <div class="col-md-3">
        <input class="form-check-input" type="radio" name="d-dwelling-mode" onchange="onChangeSearchDisplay()" value="1" checked>
        <label class="form-check-label text-blue font-weight-bold">
            Tipo foto
        </label>
        <img class='my-auto' src='{{url("images/photo_type_icon.png")}}'>
    </div>

    <div class="col-md-3">
        <input class="form-check-input" type="radio" name="d-dwelling-mode" onchange="onChangeSearchDisplay()" value="2">
        <label class="form-check-label text-blue font-weight-bold">
            Tipo lista
        </label>
        <img class='my-auto position-absolute' style='    top: -10px;height: 39px;' src='{{url("images/list_type_icon.png")}}'>
    </div>
</div>

<div class="row">
    <div class="col-md-12 border border-warning text-center">
        <p class="text-blue mt-1 md-text font-weight-bold mb-1">Seleccione los filtros especificados a continuacion, si desea filtrar los resultados obtenidos</p>
    </div>
</div>

<div class="row border border-warning" id="dwelling_prop_filters">
    <div class="col-md-3">
        <p class="text-red mt-3 font-weight-bold">Tipo de vivienda:</p>
    </div>

    <div class="col-md-9 mt-2">
        <button type="button" onclick="onPressDisplayApt()" id="button_dwelling_apt" class="btn font-weight-bold btn-blue text-white mr-2">Apartamento</button>
        <button type="button" onclick="onPressDisplayHouse()" id="button_dwelling_house" class="btn font-weight-bold btn-yellow text-white mr-2">Casa o quinta</button>
        <button type="button" onclick="onPressDisplayAll()" id="button_dwelling_apt_house" class="btn font-weight-bold text-white btn-red">Apartamento y casa</button>
    </div>
</div>

<div class="row border border-warning" id="dwelling_status_filters">
    <div class="col-md-3">
        <p class="text-red mt-3 font-weight-bold">Vivienda en:</p>
    </div>

    <div class="col-md-9 mt-2">
        <button type="button" onclick="onPressDisplaySell()" id="button_dwelling_sell" class="btn btn-blue font-weight-bold text-white mr-2">Venta</button>
        <button type="button" onclick="onPressDisplayRent()" id="button_dwelling_rent" class="btn btn-yellow font-weight-bold text-white mr-2">Alquiler</button>
        <button type="button" onclick="onPressDisplayAll()" id="button_dwelling_sell_rent" class="btn btn-red font-weight-bold text-white mr-2">Alquiler y venta</button>
    </div>
</div>

<div class="row border border-warning">
    <div class="col-md-4">
        <p class="text-red mt-3 font-weight-bold">Ordenar resultados por:</p>
    </div>

    <div class="col-md-8 mt-2">
        <button type="button" onclick="sortDwellingByPrice()" class="btn btn-blue font-weight-bold text-white">Precio</button>
    </div>
</div>

<div class="row border border-warning">
    <div class="col-md-12">
        <nav class="mt-3 d-flex justify-content-center">
            <ul class="pagination" id="pagination_fs">
                
            </ul>
        </nav>
    </div>
</div>