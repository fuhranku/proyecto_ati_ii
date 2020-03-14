@extends('templates.layout')    

@section('title','Index')

@section('content')
<section>
    <div class="container">
    
        <div class="row">
            
            <div class="col-md-3 search-box" style="margin-left:15px;">
                <div class="search-btn border border-info rounded " id='btn-b-rapida1'>
                    <i class="fas fa-caret-down d-inline"></i>
                    <p class="font-weight-bold m-0 d-inline">Búsqueda Rápida</p>
                </div>

                <div class="border border-info p-1" id="busqueda-rapida1">

                    <div class="row p-2">
                        <div class="col-md-6">
                            <span class="badge badge-info">Pais</span>
                            <select id="country" class="form-control sm-text" onchange=""   >
                                <option value="0">Venezuela</option>
                                <option value="1">Colombia</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <span class="badge badge-info">Estado</span>
                            <select id="country" class="form-control sm-text " onchange=""   >
                                <option value="0">Venezuela</option>
                                <option value="1">Colombia</option>
                            </select>
                        </div>
                    </div>

                    <div class="row p-2">
                        <div class="form-group col-6">
                            <span class="badge badge-info">Pais</span>
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
            
                        <div class="form-group col-6">
                            <span class="badge badge-info">Tipo de inmueble</span>
                            <select id="country" class="form-control  sm-text" onchange=""   >
                                <option value="0">Apartamento</option>
                                <option value="1">Casa</option>
                                <option value="2">Apartamento y Casa</option>
                            </select>
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

                <!-- BUSQUEDA DETALLADA -->

                <div class="search-btn border border-info rounded " id='btn-b-detallada1'>
                    <i class="fas fa-caret-down d-inline"></i>
                    <p class="font-weight-bold m-0 d-inline">Búsqueda Detallada</p>
                </div>

                <div class="border border-info p-1" id="busqueda-detallada1">

                    <div class="row p-2">
                        <div class="col-md-6">
                            <span class="badge badge-info">Continente</span>
                            <select id="country" class="form-control sm-text" onchange=""   >
                                <option value="0">Asia</option>
                                <option value="1">Europa</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <span class="badge badge-info">Pais</span>
                            <select id="country" class="form-control  sm-text" onchange=""   >
                                <option value="0">Venezuela</option>
                                <option value="1">Colombia</option>
                            </select>
                        </div>
                    </div>

                    <div class="row p-2">
                        
                        <div class="col-md-6">
                            <span class="badge badge-info">Estado</span>
                            <select id="country" class="form-control sm-text" onchange=""   >
                                <option value="0">Monagas</option>
                                <option value="1">Amazonas</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <span class="badge badge-info">Ciudad</span>
                            <select id="country" class="form-control sm-text " onchange=""   >
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
                            <select id="country" class="form-control " onchange=""   >
                                <option value="0">Asia</option>
                                <option value="1">Europa</option>
                            </select>
                        </div>
                    </div>

                    <div class="row p-2">
                        <div class="col-md-12">
                            <span class="badge badge-info">Servicios</span>
                            <select id="country" class="form-control  " onchange=""   >
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
            </div>

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
                        <button type="button" class="btn btn-info font-weight-bold">Precio</button>
                        <button type="button" class="btn btn-primary font-weight-bold">Alquiler</button>
                    </div>
                </div>

                <div class="row border border-warning">
                    <div class="col-md-12">
                        <nav aria-label="Page navigation example" class="mt-3 ml-5">
                            <ul class="pagination ">
                                <li class="page-item "><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item"><a class="page-link" href="#">7</a></li>
                                <li class="page-item"><a class="page-link" href="#">8</a></li>
                                <li class="page-item"><a class="page-link" href="#">9</a></li>
                                <li class="page-item"><a class="page-link" href="#">50</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- particular search -->
                <div class="row">

                    <!-- one seach item -->
                    <div class="col-md-6 border border-warning">
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <p class="border border-primary p-4 font-weight-bold text-center">Foto principal</p>
                            </div>

                            <div class="col-md-6 mt-3">
                                <a class="h4 " href="#"><u>Apartamento</u></a>
                                <a class="h4 text-danger" href="#"><u>Venta</u></a>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <p class= "font-weight-bold m-0">300.000 USD</p>
                                <p class= "m-0">3 habitaciones, 2 baños</p>
                                <p class= "m-0">Tiene Terraza</p>
                            </div>

                            <div class="col-md-6">
                                <p href="#" class="m-0"><u><strong>País: </strong></u>Venezuela</p>
                                <p href="#" class="m-0"><u><strong>Estado: </strong></u>Distrito Capital</p>
                                <p href="#" class="m-0"><u><strong>Zona: </strong></u>Campo Alegre</p>
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

                    <!-- other search item -->
                    <div class="col-md-6 border border-warning">
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <p class="border border-primary p-4 font-weight-bold text-center">Foto principal</p>
                            </div>

                            <div class="col-md-6 mt-3">
                                <a class="h4 " href="#"><u>Casa</u></a><br>
                                <a class="h4 text-danger" href="#"><u>Alquiler</u></a>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <p class= "font-weight-bold m-0">500 USD</p>
                                <p class= "m-0">3 habitaciones, 2 baños</p>
                                <p class= "m-0">Jardín</p>
                            </div>

                            <div class="col-md-6">
                                <p href="#" class="m-0"><u><strong>País: </strong></u>Venezuela</p>
                                <p href="#" class="m-0"><u><strong>Estado: </strong></u>Distrito Capital</p>
                                <p href="#" class="m-0"><u><strong>Zona: </strong></u>Campo Alegre</p>
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



                </div>
            
                
            
            </div>


            
        </div>


    </div>
@endsection