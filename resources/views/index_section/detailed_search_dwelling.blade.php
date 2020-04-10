<!-- BUSQUEDA DETALLADA BOTON -->

<div class="row mt-3">
    <div class="col-md-3"></div>
    <div class="search-btn col-md-6 border border-info rounded cursor-pointer" onclick="displayDS()">
        <i class="fas fa-caret-down d-inline"></i>
        <p class="font-weight-bold  d-inline">Búsqueda detallada</p>
    </div>
    <div class="col-md-3"></div>
</div>

<!-- BUSQUEDA DETALLADA -->
<form method="post" action="{{ action( 'IndexController@detailed_search') }}">
    @csrf
    <div class="m-3 d-none" id="busqueda-detallada">

        <div class='row error-row d-none' id="error_detailed_search_index">
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
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <span class="badge badge-label bg-dark-blue text-white">Continente</span>
                <select name="detailed_continents[]" id="continent_ds" class="form-control sm-text" onchange="">
                    <option class="disabled" value='' label="Continente" disabled selected value></option>
                    @foreach ($continents as $continent)
                        <option value={{$continent->id}}>{{$continent->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <span class="badge badge-label bg-dark-blue text-white">Pais</span>
                <select name="detailed_countries[]" id="country_ds" class="form-control  sm-text" onchange=""   >
                    @foreach ($countries as $country)
                        <option class="disabled" value='' label="País" disabled selected value></option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-2">
                <span class="badge badge-label bg-dark-blue text-white">Estado</span>
                <select name="detailed_states[]" id="state_ds" class="form-control sm-text" onchange=""   >
                    @foreach ($states as $state)
                        <option class="disabled" value='' label="Estado" disabled selected value></option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-2">
                <span class="badge badge-label bg-dark-blue text-white">Ciudad</span>
                <select name="detailed_cities[]" id="city_ds" class="form-control sm-text " onchange=""   >
                    @foreach ($cities as $city)
                        <option class="disabled" value='' label="Ciudad" disabled selected value></option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-3"></div>
        </div>

        <div class="row p-2">
            <div class="col-md-1"></div>

            <!-- vivienda en -->
            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-12 ">
                        <span class="badge badge-label bg-dark-blue text-white">Vivienda en</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ml-3">
                        <input class="form-check-input" type="radio" name="status_ds"  value="0" checked>
                        <label class="form-check-label sm-text" >
                            Alquiler
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ml-3">
                        <input class="form-check-input" type="radio" name="status_ds" value="1">
                        <label class="form-check-label sm-text" >
                            Venta
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 ml-3">
                        <input class="form-check-input" type="radio" name="status_ds" value="2">
                        <label class="form-check-label sm-text" >
                            Alquiler y venta
                        </label>
                    </div>
                </div>
            </div>

            <!-- tipo de inmueble -->
            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-12 ">
                        <span class="badge badge-label bg-dark-blue text-white">Tipo de inmueble</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 ml-3">
                        <input class="form-check-input" type="radio" name="detailed_property_type"  value="0" checked>
                        <label class="form-check-label sm-text" >
                            Apartamento
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 ml-3">
                        <input class="form-check-input" type="radio" name="detailed_property_type"  value="1">
                        <label class="form-check-label sm-text" >
                            Casa o quinta
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 ml-3">
                        <input class="form-check-input" type="radio" name="detailed_property_type" value="2">
                        <label class="form-check-label sm-text" >
                            Apartamento o casa
                        </label>
                    </div>
                </div>
            </div>

            <!--  cantidad -->
            <div class="col-md-3">

                <div class="row">
                    <div class="col-md-12 ">
                        <span class="badge badge-label bg-dark-blue text-white">Cantidad</span>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-md-4 sm-text">
                        <p >Habitaciones</p>
                    </div>
                    
                    <div class="col-md-8">
                        <div class="input-group" style="width: max-content; max-width: 120px;">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                    <span class="fas fa-minus"></span>
                                </button>
                            </span>
                            <input type="text" name="quant[1]" id="counterRoom" class="form-control input-number" value="1" min="1" max="10">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                    <span class="fas fa-plus"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-md-4 sm-text">
                        <p>Baños</p>
                    </div>

                    <div class="col-md-8">
                        <div class="input-group" style="width: max-content; max-width: 120px;">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
                                    <span class="fa fa-minus"></span>
                                </button>
                            </span>
                            <input type="text" name="quant[2]" id="counterBath" class="form-control input-number" value="1" min="1" max="10">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[2]">
                                    <span class="fa fa-plus"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-md-4 sm-text">
                        <p>Estacionamientos</p>
                    </div>

                    <div class="col-md-8">
                        <div class="input-group" style="width: max-content; max-width: 120px;">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[3]">
                                    <span class="fa fa-minus"></span>
                                </button>
                            </span>
                            <input type="text" name="quant[3]" id="counterPark" class="form-control input-number" value="0" min="0" max="10">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[3]">
                                    <span class="fa fa-plus"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-12 form-check">
                        <span class="badge badge-label bg-dark-blue text-white sm-text">Comodidades</span>
                        <select name="detailed_comforts_dwelling[]" id="comfort_ds" class="form-control sm-text" onchange=""   >
                            @foreach ($comforts as $comfort)
                                <option value={{$comfort->id}}>{{$comfort->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-12 form-check">
                        <span class="badge badge-label bg-dark-blue text-white sm-text">Servicios</span>
                        <select name="detailed_services_dwelling[]" id="service_ds" class="form-control sm-text" onchange=""   >
                            @foreach ($services as $service)
                                <option value={{$service->id}}>{{$service->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="row p-2">
            <div class="col-md-2"></div>
            <div class="col-5">
                <span class="badge badge-label bg-dark-blue text-white sm-text">Precio</span>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="detailed_price_type" value="1" checked>
                    <label class="form-check-label sm-text" >
                        Por rango
                    </label>
                    <div class="price-div" >
                        <label for="detailed-minimum-price" class="sm-text my-auto">Mínimo: </label>
                        <input type="number" name="detailed_minimum_price" id="detailed-minimum-price" class="form-control price-input" >
                    </div>

                    <div class="price-div">
                        <label for="detailed_maximum_price" class="sm-text my-auto">Máximo: </label>
                        <input type="number" name="detailed_maximum_price" id="detailed-maximum-price" class="form-control price-input" >
                    </div>
                    
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="detailed_price_type"  value="2">
                    <label class="form-check-label sm-text" >
                        Cualquier precio
                    </label>
                </div>
            </div>
            <div class="col-md-1"></div>

            <div class="col-md-4"></div>
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
