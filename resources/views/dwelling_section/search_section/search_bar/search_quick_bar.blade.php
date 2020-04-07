{{-- BUSQUEDA RAPIDA --}}
<div class="search-btn border border-info rounded " id='btn-b-rapida2'>
    <i class="fas fa-caret-down d-inline"></i>
    <p class="font-weight-bold m-0 d-inline">Búsqueda Rápida</p>
</div>

<div class="border border-info p-1 d-none" id="busqueda-rapida2">

    <div class="row p-2">
        <div class="col-md-6">

            <div class="bg-dark-blue border-small mb-2">
                <span class="text-white font-weight-bold sm-text p-2">Pais</span>
            </div>
            
            <select id="country_fs" class="form-control sm-text" >
                <option class="disabled" value='' label="Pais" disabled selected value></option>
                @foreach ($countries as $country)
                    <option value={{$country->id}}>{{$country->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            
            <div class="bg-dark-blue border-small mb-2">
                <span class="text-white font-weight-bold sm-text p-2">Estado</span>
            </div>
            
            <select id="state_fs" class="form-control sm-text "  >
                <option class="disabled" value='' label="Estado" disabled selected value></option>
            </select>
        </div>
    </div>

    <div class="row p-2">
        <div class="form-group col-6">
            
            <div class="bg-dark-blue border-small mb-2">
                <span class="text-white font-weight-bold sm-text p-2">Vivienda en</span>
            </div>
            
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status_fs"  value="0" checked>
                <label class="form-check-label sm-text">
                  Alquiler
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status_fs" value="1">
                <label class="form-check-label sm-text" >
                  Venta
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status_fs"  value="2">
                <label class="form-check-label sm-text" >
                  Alquiler y venta
                </label>
            </div>
        </div>

        <div class="form-group col-6">
            
            <div class="bg-dark-blue border-small mb-2">
                <span class="text-white font-weight-bold sm-text">Tipo de inmueble</span>
            </div>
            
            <select id="property_type_fs" class="form-control  sm-text" onchange=""   >
                <option value="0">Apartamento</option>
                <option value="1">Casa</option>
                <option value="2">Apartamento y Casa</option>
            </select>
        </div>                
    </div>

    <div class="row">
        <div class="col-md-6 text-center">
            <button type="submit" onclick="quickSearch()" class="btn bg-yellow text-white">Buscar</button>
        </div>
        <div class="col-md-6 text-center">
            <button type="submit" onclick="cancelQuickSearch()"class="btn bg-yellow text-white">Cancelar</button>
        </div>
    </div>
</div>