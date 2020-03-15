<!-- BUSQUEDA DETALLADA -->
<div class="search-btn border border-info rounded mt-2" id='btn-b-detallada2'>
    <i class="fas fa-caret-down d-inline"></i>
    <p class="font-weight-bold m-0 d-inline">Búsqueda Detallada</p>
</div>

<div class="border border-info p-1" id="busqueda-detallada2">

    <div class="row p-2">
        <div class="col-md-6">
            <span class="badge badge-info">Continente</span>
            <select id="country" class="form-control sm-text" onchange="" id="crt-userType" >
                <option value="0">Asia</option>
                <option value="1">Europa</option>
            </select>
        </div>
        <div class="col-md-6">
            <span class="badge badge-info">Pais</span>
            <select id="country" class="form-control  sm-text" onchange="" id="crt-userType" >
                <option value="0">Venezuela</option>
                <option value="1">Colombia</option>
            </select>
        </div>
    </div>

    <div class="row p-2">
        
        <div class="col-md-6">
            <span class="badge badge-info">Estado</span>
            <select id="country" class="form-control sm-text" onchange="" id="crt-userType" >
                <option value="0">Monagas</option>
                <option value="1">Amazonas</option>
            </select>
        </div>
        <div class="col-md-6">
            <span class="badge badge-info">Ciudad</span>
            <select id="country" class="form-control sm-text " onchange="" id="crt-userType" >
                <option value="0">Caracas</option>
                <option value="1">Caracasx2</option>
            </select>
        </div>
    </div>

    <div class="row p-2">
        <div class="col-12">
            <span class="badge badge-info">Vivienda en</span>
        </div>
        <div class="col-4">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label sm-text" for="exampleRadios1">
                  Alquiler
                </label>
            </div>
        </div>

        <div class="col-4">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label sm-text" for="exampleRadios2">
                Venta
                </label>
              </div>
        </div>

        <div class="col-4">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
              <label class="form-check-label sm-text" for="exampleRadios3">
                Alquiler y venta
              </label>
            </div>

        </div>

    </div>

    <div class="row p-2">
        <div class="col-12">
            <span class="badge badge-info">Tipo de inmueble</span>
        </div>
        <div class="col-md-4">
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label sm-text" for="exampleRadios1">
                  Apartamento
                </label>
            </div>
        </div>

        <div class="col-md-3 ">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label sm-text" for="exampleRadios2">
                  Casa
                </label>
              </div>
        </div>

        <div class="col-md-5 ">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
              <label class="form-check-label sm-text" for="exampleRadios3">
                Apartamento y casa
              </label>
            </div>

        </div>
    
    </div>

    <div class="row p-2">
        <div class="text-center col-6">
            <span class="badge badge-info">Habitaciones</span>
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
        <div class="text-center col-6">
            <span class="badge badge-info">Baños</span>
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
        <div class="text-center col-6">
            <span class="badge badge-info">Estacionamientos</span>
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
            <span class="badge badge-info">Comodidades</span>
            <select id="country" class="form-control " onchange="" id="crt-userType" >
                <option value="0">Asia</option>
                <option value="1">Europa</option>
            </select>
        </div>
    </div>

    <div class="row p-2">
        <div class="col-md-12">
            <span class="badge badge-info">Servicios</span>
            <select id="country" class="form-control  " onchange="" id="crt-userType" >
                <option value="0">Venezuela</option>
                <option value="1">Colombia</option>
            </select>
        </div>
    </div>

    <div class="row p-2">
        <div class="col-12">
            <span class="badge badge-info">Precio</span>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Por rango
                </label>
                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Mínimo">
                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Máximo">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  Cualquier precio
                </label>
            </div>
        </div>
    </div>

    <div class="row pt-2">
        <div class="text-center col-6">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
        <div class="text-center col-6">
            <button type="submit" class="btn btn-primary">Cancelar</button>
        </div>
    </div>
   
</div>