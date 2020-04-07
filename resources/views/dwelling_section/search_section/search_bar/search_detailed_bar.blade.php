<!-- BUSQUEDA DETALLADA -->
<div class="search-btn border border-info rounded mt-2" id='btn-b-detallada2'>
    <i class="fas fa-caret-down d-inline"></i>
    <p class="font-weight-bold m-0 d-inline">Búsqueda Detallada</p>
</div>

<div class="border border-info p-1 d-none" id="busqueda-detallada2">

    <div class="row p-2">
        <div class="col-md-6">
            
            <div class="bg-dark-blue border-small mb-2">
                <span class="text-white font-weight-bold sm-text p-2">Continente</span>
            </div>
            
            <select id="continent_ds" class="form-control sm-text" onchange="">
                <option class="disabled" value='' label="Continente" disabled selected value></option>
                @foreach ($continents as $continent)
                    <option value={{$continent->id}}>{{$continent->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            
            <div class="bg-dark-blue border-small mb-2">
                <span class="text-white font-weight-bold sm-text p-2">País</span>
            </div>
            
            <select id="country_ds" class="form-control  sm-text" onchange=""   >
                @foreach ($countries as $country)
                    <option class="disabled" value='' label="País" disabled selected value></option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row p-2">
        
        <div class="col-md-6">
            
            <div class="bg-dark-blue border-small mb-2">
                <span class="text-white font-weight-bold sm-text p-2">Estado</span>
            </div>
            
            <select id="state_ds" class="form-control sm-text" onchange=""   >
                @foreach ($states as $state)
                    <option class="disabled" value='' label="Estado" disabled selected value></option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            
            <div class="bg-dark-blue border-small mb-2">
                <span class="text-white font-weight-bold sm-text p-2">Ciudad</span>
            </div>
            
            <select id="city_ds" class="form-control sm-text " onchange=""   >
                @foreach ($cities as $city)
                    <option class="disabled" value='' label="Ciudad" disabled selected value></option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row p-2">
        <div class="col-6">
            
            <div class="bg-dark-blue border-small mb-2">
                <span class="text-white font-weight-bold sm-text p-2">Vivienda en</span>
            </div>
        
        </div>
    </div>

    <div class="row p-2">
        <div class="col-4">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status_ds" value="0" checked>
                <label class="form-check-label sm-text" >
                  Alquiler
                </label>
            </div>
        </div>

        <div class="col-4">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status_ds" value="1">
                <label class="form-check-label sm-text" >
                Venta
                </label>
              </div>
        </div>

        <div class="col-4">
            <div class="form-check p-0">
              <input class="form-check-input" type="radio" name="status_ds"  value="2">
              <label class="form-check-label sm-text" >
                Alquiler y venta
              </label>
            </div>

        </div>

    </div>

    <div class="row p-2">
        <div class="col-7">
            
            <div class="bg-dark-blue border-small mb-2">
                <span class="text-white font-weight-bold sm-text p-2">Tipo de inmueble</span>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>

    <div class="row ">
        <div class="col-md-4 ">
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="property_type_ds"  value="0" checked>
                <label class="form-check-label sm-text" >
                  Apartamento
                </label>
            </div>
        </div>

        <div class="col-md-3 ">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="property_type_ds" value="1">
                <label class="form-check-label sm-text" >
                  Casa
                </label>
              </div>
        </div>

        <div class="col-md-5 ">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="property_type_ds"  value="2">
              <label class="form-check-label sm-text" >
                Apartamento y casa
              </label>
            </div>

        </div>
    
    </div>

    <div class="row p-2">
        <div class="text-center col-6">
            
            <div class="bg-dark-blue border-small mb-2">
                <span class="text-white font-weight-bold sm-text p-2">Habitaciones</span>
            </div>
            
        </div>
    </div>

    <div class="row p-2">
        <div class="col-12">
            <div class="input-group">
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
        <div class="col-6">
        
            <div class="bg-dark-blue border-small mb-2">
                <span class="text-white font-weight-bold sm-text p-2">Baños</span>
            </div>
            
        </div>
    </div>

    <div class="row p-2">
        <div class="col-12">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
                        <span class="fas fa-minus"></span>
                    </button>
                </span>
                <input type="text" name="quant[2]" id="counterBath" class="form-control input-number" value="1" min="1" max="10">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[2]">
                        <span class="fas fa-plus"></span>
                    </button>
                </span>
            </div>
        </div>
    </div>

    <div class="row p-2">
        <div class="text-center col-7">
            
            <div class="bg-dark-blue border-small mb-2">
                <span class="text-white font-weight-bold sm-text">Estacionamientos</span>
            </div>
            
        </div>
    </div>

    <div class="row p-2">
        <div class="col-12">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[3]">
                        <span class="fas fa-minus"></span>
                    </button>
                </span>
                <input type="text" name="quant[3]" id="counterPark" class="form-control input-number" value="1" min="1" max="10">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[3]">
                        <span class="fas fa-plus"></span>
                    </button>
                </span>
            </div>
        </div>
    </div>

    <div class="row p-2">
        <div class="col-md-12">
            
            <div class="bg-dark-blue border-small mb-2">
                <span class="text-white font-weight-bold sm-text p-2">Comodidades</span>
            </div>
            
            <select id="comfort_ds" class="form-control " onchange=""   >
                @foreach ($comforts as $comfort)
                    <option value={{$comfort->id}}>{{$comfort->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row p-2">
        <div class="col-md-12">
            
            <div class="bg-dark-blue border-small mb-2">
                <span class="text-white font-weight-bold sm-text p-2">Servicios</span>
            </div>
            
            <select id="service_ds" class="form-control  " onchange=""   >
                @foreach ($services as $service)
                    <option value={{$service->id}}>{{$service->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row p-2">
        <div class="col-12">
            
            <div class="bg-dark-blue border-small mb-2">
                <span class="text-white font-weight-bold sm-text p-2">Precio</span>
            </div>

        </div>

        <div class="col-md-12">
            <div class="form-check">
                <div class="row p-3">
                    <input class="form-check-input" type="radio" name="price_ds"  value="1" checked>
                    <label class="form-check-label sm-text" >
                    Por rango
                    </label>
                
                </div>
                <div class="row">
                    <div class="col-md-4 p-2 pl-4">
                        <p class="sm-text">Mínimo</p>
                    </div>
                    
                    <div class="col-md-8 pl-0">
                        <input type="number" class="form-control" id="minimum_ds" placeholder="">
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-md-4 p-2 pl-4">
                        <p class="sm-text">Máximo</p>
                    </div>
                    
                    <div class="col-md-8 pl-0">
                        <input type="number" class="form-control" id="maximum_ds" placeholder="">
                    </div>
                </div>

                
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="price_ds" value="2">
                <label class="form-check-label sm-text" >
                  Cualquier precio
                </label>
            </div>
        </div>
    </div>

    <div class="row pt-2">
        <div class="text-center col-6">
            <button type="submit" onclick="detailedSearch()" class="btn bg-yellow text-white">Buscar</button>
        </div>
        <div class="text-center col-6">
            <button type="submit" class="btn bg-yellow text-white">Cancelar</button>
        </div>
    </div>
   
</div>