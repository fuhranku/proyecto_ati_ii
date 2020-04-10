 <!-- BUSQUEDA RAPIDA BOTON -->

 <div class="row mt-3">
    <div class="col-md-3"></div>
    <div class="search-btn col-md-6 border border-info rounded cursor-pointer" onclick="displayRS()">
        <i class="fas fa-caret-down d-inline"></i>
        <p class="font-weight-bold  d-inline" >Búsqueda rápida</p>
    </div>
    <div class="col-md-3"></div>
</div>

<!-- BUSQUEDA RAPIDA -->
<form method="post" action="{{ action( 'IndexController@quick_search' ) }}">
    @csrf
    <div class="m-3 d-none" id="busqueda-rapida" >
        
        <div class='row error-row d-none' id="error_quick_search_index">
            <div class="col-md-3"></div>
            <div class='col-sm-6'>
                <div class="alert alert-danger form-error p-0">
                    <ul class="mt-3">
                        @if($errors->any())
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        @endif
                    </ul>
                </div><br />
            </div>
            <div class="col-md-3"></div>
        </div>
    

        <div class="row p-2">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <span class="badge badge-label bg-dark-blue text-white">Pais</span>
                <select name="quick_countries[]" id="country_fs" class="form-control sm-text" >
                    <option class="disabled" value='' label="Pais" disabled selected value></option>
                    @foreach ($countries as $country)
                        <option value={{$country->id}}>{{$country->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <span class="badge badge-label bg-dark-blue text-white">Estado</span>
                <select name="quick_states[]" id="state_fs" class="form-control sm-text "  >
                    <option class="disabled" value='' label="Estado" disabled selected value></option>
                </select>
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="row p-2">
            <div class="col-md-3"></div>
            <div class="form-group col-3">
                <span class="badge badge-label bg-dark-blue text-white">Vivienda en</span>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status_fs"  value="0" checked>
                    <label class="form-check-label sm-text" >
                        Alquiler
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status_fs"  value="1">
                    <label class="form-check-label sm-text" >
                        Venta
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status_fs" value="2">
                    <label class="quick-check-label sm-text" >
                        Alquiler y venta
                    </label>
                </div>
            </div>

            <div class="form-group col-3">
                <span class="badge badge-label bg-dark-blue text-white">Tipo de inmueble</span>
                <select name="quick_property_type[]" id="property_type_fs" class="form-control  sm-text" onchange=""   >
                    <option value="0">Apartamento</option>
                    <option value="1">Casa</option>
                    <option value="2">Apartamento y Casa</option>
                </select>
            </div>          
            <div class="col-md-3"></div>      
        </div>

        <div class="row pt-2">
            <div class="col-md-3"></div>
            <div class="text-center col-3">
                <button type="submit" class="btn bg-yellow text-white">Buscar</button>
            </div>
            <div class="text-center col-3">
                <button type="submit" class="btn bg-yellow text-white">Cancelar</button>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</form>

