<!-- Search Result -->
<div class="col-md-8" style="margin-left:15px;">

    <p>Haz clic en la vivienda de tu preferencia, para ver más información, o selecciona  la vivienda de tu preferencia, para habilitar o deshabilitar los botones expresados a continuación: </p>

    <button type="button" class="btn btn-info">Ver Detalle</button>
    <button type="button" class="btn btn-primary">Modificar</button>
    <button type="button" class="btn btn-warning text-white">Deshabilitar</button>
    <button type="button" class="btn btn-success">Habilitar</button>
    <button type="button" class="btn btn-danger">Eliminar</button>

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
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
                Tipo foto
            </label>
        </div>

        <div class="col-md-4">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
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

    <div class="row border border-warning">
        <div class="col-md-3">
            <p class="text-danger mt-3 font-weight-bold">Tipo de vivienda</p>
        </div>

        <div class="col-md-9 mt-2">
            <button type="button" class="btn btn-info font-weight-bold ">Apartamento</button>
            <button type="button" class="btn btn-primary font-weight-bold">Casa o quinta</button>
            <button type="button" class="btn btn-warning font-weight-bold text-white">Apartamento y casa</button>
        </div>
    </div>

    <div class="row border border-warning">
        <div class="col-md-3">
            <p class="text-danger mt-3 font-weight-bold">Vivienda en</p>
        </div>

        <div class="col-md-9 mt-2">
            <button type="button" class="btn btn-info font-weight-bold">Venta</button>
            <button type="button" class="btn btn-primary font-weight-bold">Alquiler</button>
            <button type="button" class="btn btn-warning font-weight-bold text-white">Alquiler y venta</button>
        </div>
    </div>

    <div class="row border border-warning">
        <div class="col-md-4">
            <p class="text-danger mt-3 font-weight-bold">Ordenar resultados por</p>
        </div>

        <div class="col-md-8 mt-2">
            <button type="button" onclick="sortDwellingByPrice()" class="btn btn-info font-weight-bold">Precio</button>
            <button type="button" class="btn btn-primary font-weight-bold">Alquiler</button>
        </div>
    </div>

    <div class="row border border-warning">
        <div class="col-md-12">
            <nav aria-label="Page navigation example" class="mt-3 ml-5">
                <ul class="pagination " id="pagination_fs">
                    
                </ul>
            </nav>
        </div>
    </div>

    <!-- particular search -->
    <div class="row">
        <!-- one seach item -->
        <div class="col-md-6 border border-warning" id="dwelling_fs1">
            <div class="row">
                <div class="col-md-6 mt-3">
                    <p class="border border-primary p-4 font-weight-bold text-center">Foto principal</p>
                </div>

                <div class="col-md-6 mt-3">
                    <div class="row">
                        <div class="col-md-12">
                            <a class="h4 " href="#"><u id="prop_type_fs1">Apartamento</u></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="h4 text-danger" href="#"><u id="status_fs1">Venta</u></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <p class= "font-weight-bold m-0" id="price_fs1">300.000 USD</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class= "m-0" id="room_bath_fs1">3 habitaciones, 2 baños</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" >
                            <p class= "m-0" id="details_fs1">Tiene Terraza</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <u class="d-inline"><strong>País: </strong></u><p id ="country_fs1" class="m-0 d-inline">Venezuela</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <u class="d-inline"><strong>Estado: </strong></u><p id="state_fs1" class="m-0 d-inline">Distrito Capital</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <u class="d-inline"><strong>Zona: </strong></u><p id="zone_fs1" class="m-0 d-inline">Campo Alegre</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt-3">
                    <a class=" font-weight-bold " href="#"><u>Ver Comodidades</u></a>
                    <a class=" font-weight-bold " href="#"><u>Ver Servicios</u></a>
                    <a class=" font-weight-bold" href="#"><u>Ver Ubicación exacta</u></a>
                    <a class=" font-weight-bold" href="#"><u>Ver Fotos</u></a>
                    <a class=" font-weight-bold" href="#"><u>Ver Videos</u></a>
                </div>

                <div class="col-md-6 mt-3">
                    <button type="button" class="btn btn-warning font-weight-bold text-white">Contactar al anunciante</button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p href="#" class="m-0 text-danger h5 font-weight-bold text-center m-3"><u>Ver información Completa</u></p>
                </div>
            </div>
        </div>
        
        <!-- one seach item -->
        <div class="col-md-6 border border-warning"  id="dwelling_fs2">
            <div class="row">
                <div class="col-md-6 mt-3">
                    <p class="border border-primary p-4 font-weight-bold text-center">Foto principal</p>
                </div>

                <div class="col-md-6 mt-3">
                    <div class="row">
                        <div class="col-md-12">
                            <a class="h4 " href="#"><u id="prop_type_fs2">Apartamento</u></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="h4 text-danger" href="#"><u id="status_fs2">Venta</u></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <p class= "font-weight-bold m-0" id="price_fs2">300.000 USD</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class= "m-0" id="room_bath_fs2">3 habitaciones, 2 baños</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" >
                            <p class= "m-0" id="details_fs2">Tiene Terraza</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <u class="d-inline"><strong>País: </strong></u><p id ="country_fs2" class="m-0 d-inline">Venezuela</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <u class="d-inline"><strong>Estado: </strong></u><p id="state_fs2" class="m-0 d-inline">Distrito Capital</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <u class="d-inline"><strong>Zona: </strong></u><p id="zone_fs2" class="m-0 d-inline">Campo Alegre</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt-3">
                    <a class=" font-weight-bold " href="#"><u>Ver Comodidades</u></a>
                    <a class=" font-weight-bold " href="#"><u>Ver Servicios</u></a>
                    <a class=" font-weight-bold" href="#"><u>Ver Ubicación exacta</u></a>
                    <a class=" font-weight-bold" href="#"><u>Ver Fotos</u></a>
                    <a class=" font-weight-bold" href="#"><u>Ver Videos</u></a>
                </div>

                <div class="col-md-6 mt-3">
                    <button type="button" class="btn btn-warning font-weight-bold text-white">Contactar al anunciante</button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p href="#" class="m-0 text-danger h5 font-weight-bold text-center m-3"><u>Ver información Completa</u></p>
                </div>
            </div>
        </div>

        <!-- one seach item -->
        <div class="col-md-6 border border-warning" id="dwelling_fs3">
            <div class="row">
                <div class="col-md-6 mt-3">
                    <p class="border border-primary p-4 font-weight-bold text-center">Foto principal</p>
                </div>

                <div class="col-md-6 mt-3">
                    <div class="row">
                        <div class="col-md-12">
                            <a class="h4 " href="#"><u id="prop_type_fs3">Apartamento</u></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="h4 text-danger" href="#"><u id="status_fs3">Venta</u></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <p class= "font-weight-bold m-0" id="price_fs3">300.000 USD</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class= "m-0" id="room_bath_fs3">3 habitaciones, 2 baños</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" >
                            <p class= "m-0" id="details_fs3">Tiene Terraza</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <u class="d-inline"><strong>País: </strong></u><p id ="country_fs3" class="m-0 d-inline">Venezuela</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <u class="d-inline"><strong>Estado: </strong></u><p id="state_fs3" class="m-0 d-inline">Distrito Capital</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <u class="d-inline"><strong>Zona: </strong></u><p id="zone_fs3" class="m-0 d-inline">Campo Alegre</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt-3">
                    <a class=" font-weight-bold " href="#"><u>Ver Comodidades</u></a>
                    <a class=" font-weight-bold " href="#"><u>Ver Servicios</u></a>
                    <a class=" font-weight-bold" href="#"><u>Ver Ubicación exacta</u></a>
                    <a class=" font-weight-bold" href="#"><u>Ver Fotos</u></a>
                    <a class=" font-weight-bold" href="#"><u>Ver Videos</u></a>
                </div>

                <div class="col-md-6 mt-3">
                    <button type="button" class="btn btn-warning font-weight-bold text-white">Contactar al anunciante</button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p href="#" class="m-0 text-danger h5 font-weight-bold text-center m-3"><u>Ver información Completa</u></p>
                </div>
            </div>
        </div>

        <!-- one seach item -->
        <div class="col-md-6 border border-warning" id="dwelling_fs4">
            <div class="row">
                <div class="col-md-6 mt-3">
                    <p class="border border-primary p-4 font-weight-bold text-center">Foto principal</p>
                </div>

                <div class="col-md-6 mt-3">
                    <div class="row">
                        <div class="col-md-12">
                            <a class="h4 " href="#"><u id="prop_type_fs4">Apartamento</u></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="h4 text-danger" href="#"><u id="status_fs4">Venta</u></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <p class= "font-weight-bold m-0" id="price_fs4">300.000 USD</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class= "m-0" id="room_bath_fs4">3 habitaciones, 2 baños</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" >
                            <p class= "m-0" id="details_fs4">Tiene Terraza</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <u class="d-inline"><strong>País: </strong></u><p id ="country_fs4" class="m-0 d-inline">Venezuela</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <u class="d-inline"><strong>Estado: </strong></u><p id="state_fs4" class="m-0 d-inline">Distrito Capital</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <u class="d-inline"><strong>Zona: </strong></u><p id="zone_fs4" class="m-0 d-inline">Campo Alegre</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt-3">
                    <a class=" font-weight-bold " href="#"><u>Ver Comodidades</u></a>
                    <a class=" font-weight-bold " href="#"><u>Ver Servicios</u></a>
                    <a class=" font-weight-bold" href="#"><u>Ver Ubicación exacta</u></a>
                    <a class=" font-weight-bold" href="#"><u>Ver Fotos</u></a>
                    <a class=" font-weight-bold" href="#"><u>Ver Videos</u></a>
                </div>

                <div class="col-md-6 mt-3">
                    <button type="button" class="btn btn-warning font-weight-bold text-white">Contactar al anunciante</button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p href="#" class="m-0 text-danger h5 font-weight-bold text-center m-3"><u>Ver información Completa</u></p>
                </div>
            </div>
        </div>
        

    </div>
</div>

