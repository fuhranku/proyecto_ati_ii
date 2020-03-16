{{-- BUSQUEDA RAPIDA --}}
<div class="search-btn border border-info rounded " id='btn-b-rapida2'>
    <i class="fas fa-caret-down d-inline"></i>
    <p class="font-weight-bold m-0 d-inline">Búsqueda Rápida</p>
</div>

<div class="border border-info p-1" id="busqueda-rapida2">

    <div class="row p-2">
        <div class="col-md-6">
            <span class="badge badge-info">Pais</span>
            <select id="country_fs" class="form-control sm-text" onchange="">
                @foreach ($countries as $country)
                    <option value={{$country->id}}>{{$country->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <span class="badge badge-info">Estado</span>
            <select id="state_fs" class="form-control sm-text " onchange=""   >
                @foreach ($states as $state)
                    <option value={{$state->id}}>{{$state->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row p-2">
        <div class="form-group col-6">
            <span class="badge badge-info">Vivienda en</span>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status_fs" id="exampleRadios1" value="0" checked>
                <label class="form-check-label sm-text" for="exampleRadios1">
                  Alquiler
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status_fs" id="exampleRadios2" value="1">
                <label class="form-check-label sm-text" for="exampleRadios2">
                  Venta
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status_fs" id="exampleRadios3" value="2">
                <label class="form-check-label sm-text" for="exampleRadios3">
                  Alquiler y venta
                </label>
            </div>
        </div>

        <div class="form-group col-6">
            <span class="badge badge-info">Tipo de inmueble</span>
            <select id="property_type_fs" class="form-control  sm-text" onchange=""   >
                <option value="0">Apartamento</option>
                <option value="1">Casa</option>
                <option value="2">Apartamento y Casa</option>
            </select>
        </div>                
    </div>

    <div class="row pt-2">
        <div class="text-center col-6">
            <button type="submit" onclick="quickSearch()" class="btn btn-primary">Buscar</button>
        </div>
        <div class="text-center col-6">
            <button type="submit" onclick="cancelQuickSearch()"class="btn btn-primary">Cancelar</button>
        </div>
    </div>
</div>