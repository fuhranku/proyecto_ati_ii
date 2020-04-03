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

<div class="m-3 d-none" id="busqueda-detallada">

    <div class="row p-2">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <span class="badge badge-info">Continente</span>
            <select id="country" class="form-control sm-text" onchange=""   >
                <option value="0">Asia</option>
                <option value="1">Europa</option>
            </select>
        </div>
        <div class="col-md-2">
            <span class="badge badge-info">Pais</span>
            <select id="country" class="form-control  sm-text" onchange=""   >
                <option value="0">Venezuela</option>
                <option value="1">Colombia</option>
            </select>
        </div>

        <div class="col-md-2">
            <span class="badge badge-info">Estado</span>
            <select id="country" class="form-control sm-text" onchange=""   >
                <option value="0">Monagas</option>
                <option value="1">Amazonas</option>
            </select>
        </div>

        <div class="col-md-2">
            <span class="badge badge-info">Ciudad</span>
            <select id="country" class="form-control sm-text " onchange=""   >
                <option value="0">Caracas</option>
                <option value="1">Caracasx2</option>
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
                    <span class="badge badge-info">Vivienda en</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ml-3">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label sm-text" for="exampleRadios1">
                        Alquiler
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ml-3">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label sm-text" for="exampleRadios2">
                        Venta
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 ml-3">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                    <label class="form-check-label sm-text" for="exampleRadios3">
                        Alquiler y venta
                    </label>
                </div>
            </div>
        </div>

        <!-- tipo de inmueble -->
        <div class="col-md-2">
            <div class="row">
                <div class="col-md-12 ">
                    <span class="badge badge-info">Tipo de inmueble</span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 ml-3">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label sm-text" for="exampleRadios1">
                        Apartamento
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 ml-3">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label sm-text" for="exampleRadios2">
                        Casa o quinta
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 ml-3">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                    <label class="form-check-label sm-text" for="exampleRadios3">
                        Apartamento o casa
                    </label>
                </div>
            </div>
        </div>

        <!--  cantidad -->
        <div class="col-md-2">

            <div class="row">
                <div class="col-md-12 ">
                    <span class="badge badge-info">Cantidad</span>
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
                        <input type="text" name="quant[3]" id="counterPark" class="form-control input-number" value="1" min="1" max="10">
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
                    <ul class="checkbox-dropdown" >
                        <li class="dropdown mt-2">
                            <p data-toggle="dropdown" class="dropdown-toggle border-gray pl-2 tiny-text">Seleccione comodidades</p>
                            <ul class="dropdown-menu">
                                <li><label class="checkbox sm-text"><input type="checkbox" value="0" name="social_media">Cocina</label></li>
                                <li><label class="checkbox sm-text"><input type="checkbox" value="1" name="social_media">Nevera</label></li>
                                <li><label class="checkbox sm-text"><input type="checkbox" value="2" name="social_media">Microondas</label></li>
                                <li><label class="checkbox sm-text"><input type="checkbox" value="2" name="social_media">Lavadora</label></li>
                                <li><label class="checkbox sm-text"><input type="checkbox" value="2" name="social_media">Secadora</label></li>
                                <li><label class="checkbox sm-text"><input type="checkbox" value="2" name="social_media">TV en sala</label></li>
                                <li><label class="checkbox sm-text"><input type="checkbox" value="2" name="social_media">TV en habitación</label></li>
                                <li><label class="checkbox sm-text"><input type="checkbox" value="2" name="social_media">Comedor</label></li>
                                <li><label class="checkbox sm-text"><input type="checkbox" value="2" name="social_media">Muebles</label></li>
                                <li><label class="checkbox sm-text"><input type="checkbox" value="2" name="social_media">Cama matrimonial</label></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="row">
                <div class="col-md-12 form-check">
                    <ul class="checkbox-dropdown" >
                        <li class="dropdown mt-2">
                            <p data-toggle="dropdown" class="dropdown-toggle border-gray pl-2 sm-text">Servicios</p>
                            <ul class="dropdown-menu">
                                <li><label class="checkbox sm-text"><input type="checkbox" value="0" name="social_media">Luz</label></li>
                                <li><label class="checkbox sm-text"><input type="checkbox" value="1" name="social_media">Agua</label></li>
                                <li><label class="checkbox sm-text"><input type="checkbox" value="2" name="social_media">Teléfono</label></li>
                                <li><label class="checkbox sm-text"><input type="checkbox" value="2" name="social_media">Internet residencial</label></li>
                                <li><label class="checkbox sm-text"><input type="checkbox" value="2" name="social_media">otro</label></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="row p-2">
        <div class="col-md-2"></div>
        <div class="col-5">
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
        <div class="col-md-1"></div>

        <div class="col-md-4">
            <span class="badge badge-info">Listar resultados de forma</span>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label sm-text" for="exampleRadios1">
                    Alquiler
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label sm-text" for="exampleRadios2">
                    Venta
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label sm-text" for="exampleRadios3">
                    Alquiler y venta
                </label>
            </div>
        </div>
    </div>

    <div class="row pt-2">
        <div class="col-md-3"></div>
        <div class="text-center col-3">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
        <div class="text-center col-3">
            <button type="submit" class="btn btn-primary">Cancelar</button>
        </div>
        <div class="col-md-3"></div>
    </div>
    
</div>