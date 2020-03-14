@extends('templates.layout')      

@section('title','Index')

@section('content')
<section>
    
    <div class="container">

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"><p class="font-weight-bold text-center h4">Opciones de búsqueda</p></div>
            <div class="col-md-4"></div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p class="text-danger d-inline">*</p>
                <p class="text-blue d-inline">1- Haz click en la opción de tu preferencia</p>
            </div>
        </div>

        <div class="row m-3">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <button class="btn btn-warning text-white" onclick="displaySD()">Buscar vivienda</button>
            </div>

            <div class="col-md-4">
                <button class="btn btn-warning text-white" onclick="displaySoRD()">Vender o alquilar vivienda</button>
            </div>
            <div class="col-md-2"></div>
        </div>

        <!-- Opción buscar vivienda -->
        <div class="row d-none" id="search-dwelling">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="text-danger d-inline">*</p>
                        <p class="text-blue d-inline">1- Selecciona la forma en la que deseas buscar la vivienda</p>
                    </div>
                </div>
    
                <div class="row mt-3">
                    <div class="col-md-3"></div>
                    <div class="search-btn col-md-6 border border-info rounded cursor-pointer" onclick="displaySBK()">
                        <i class="fas fa-caret-down d-inline"></i>
                        <p class="font-weight-bold  d-inline">Búsqueda por palabra clave</p>
                    </div>
                    <div class="col-md-3"></div>
                </div>

                <div class="row mt-3 d-none" id="search-key">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form class="form-inline active-cyan-4">
                            <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Introduzca país, estado o ciudad"
                            aria-label="Search">
                            <i class="fas fa-search" aria-hidden="true"></i>
                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </div>

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

                <div class="m-3 d-none" id="busqueda-rapida" >

                    <div class="row p-2">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <span class="badge badge-info">Pais</span>
                            <select id="country" class="form-control sm-text" onchange=""   >
                                <option value="0">Venezuela</option>
                                <option value="1">Colombia</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <span class="badge badge-info">Estado</span>
                            <select id="country" class="form-control sm-text " onchange=""   >
                                <option value="0">Venezuela</option>
                                <option value="1">Colombia</option>
                            </select>
                        </div>
                        <div class="col-md-3"></div>
                    </div>

                    <div class="row p-2">
                        <div class="col-md-3"></div>
                        <div class="form-group col-3">
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
            
                        <div class="form-group col-3">
                            <span class="badge badge-info">Tipo de inmueble</span>
                            <select id="country" class="form-control  sm-text" onchange=""   >
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
                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </div>
                        <div class="text-center col-3">
                            <button type="submit" class="btn btn-primary">Cancelar</button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>

                <!-- FIN BUSQUEDA RAPIDA -->

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

                        <div class="col-md-2">
                            <span class="badge badge-info">Zona</span>
                            <select id="country" class="form-control sm-text " onchange=""   >
                                <option value="0">Caracas</option>
                                <option value="1">Caracasx2</option>
                            </select>
                        </div>

                        <div class="col-md-1"></div>
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

            </div>
        </div>

        <!-- Opción Vender o alquilar vivienda -->
        <div class="row d-none" id="sellrent-dwelling">
            <div class="col-md-12">

                <div class="row mt-5">
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <p class="h5 font-weight-bold">Preguntas frecuentes</p>
                    </div>
                    <div class="col-md-6">
                        <p class="d-inline">Haga click aqui:</p>
                        <a href="/faq" class="text-blue d-inline"><u>Ver preguntas frecuentes</u></a>
                        
                    </div>
                </div>

                <div class="row m-3">
                    <div class="col-md-12 text-center">
                        <p class="font-weight-bold text-danger ">¿Cómo publico mi vivienda con ustedes?</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-4 pr-0">
                        <p>1- Debes registrarte haciendo click aquí: </p>
                    </div>
                    <div class="col-md-3 pl-0">
                        <button class="btn btn-warning text-white">Registrarme</button>
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-3"></div>
                    <div class="col-md-4 pr-0">
                        <p>2- Luego debes iniciar sesión, haciendo clic en: </p>
                    </div>
                    <div class="col-md-3 pl-0">
                        <button class="btn btn-warning text-white">Iniciar Sesión</button>
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-3"></div>
                    <div class="col-md-8 pr-0">
                        <p class="d-inline">3- Luego de iniciar sesión seleccionas la opción </p>
                        <a href="/dwelling/publish" class="text-blue d-inline"><u>Viviendas->Publicar</u></a>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-3"></div>
                    <div class="col-md-8 pr-0">
                        <p class="mb-0">4- Luego colocas los datos solicitados, y luego presiona el botón Publicar vivienda</p>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-3"></div>
                    <div class="col-md-8 pr-0">
                        <p >5- Luego revisaremos la publicación, si todo esta bien, te notificaremos que ya tu vivienda está disponible para que otros usuarios la puedan visualizar, en un plazo de 3 días hábiles como máximo.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <script>
        displaySD = () =>{
            if($('#search-dwelling').hasClass("d-none")){
                $('#search-dwelling').removeClass("d-none");
            }else{
                $('#search-dwelling').addClass("d-none");
            }
        }

        displaySoRD = () =>{
            if($('#sellrent-dwelling').hasClass("d-none")){
                $('#sellrent-dwelling').removeClass("d-none");
            }else{
                $('#sellrent-dwelling').addClass("d-none");
            }
        }


        displaySBK = () =>{
            if($('#search-key').hasClass("d-none")){
                $('#search-key').removeClass("d-none");
            }else{
                $('#search-key').addClass("d-none");
            }
        }

       
        displayRS = () =>{
            
            if($('#busqueda-rapida').hasClass("d-none")){
                $('#busqueda-rapida').removeClass("d-none");
            }else{
                $('#busqueda-rapida').addClass("d-none");
            }

        }

        displayDS = () =>{

            if($('#busqueda-detallada').hasClass("d-none")){
                $('#busqueda-detallada').removeClass("d-none");
            }else{
                $('#busqueda-detallada').addClass("d-none");
            }
            
        }
    </script>
@endsection