@extends('templates.layout')    

@section('title','Index')

@section('content')
<section>
    
    <div class="containter">

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 bg-blue text-center">
                <p class="h4 text-white font-weight-bold mt-2">Publicar vivienda</p>
            </div>
            <div class="col-md-1"></div>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <p class="font-weight-bold ml-4 mt-4">Proporcione los datos especificados a continuación</p>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row p-2">
            <div class="col-md-2">
                <span class="badge badge-info">Continente</span>
                <select id="country" class="form-control sm-text" onchange="">
                    <option value="0">Asia</option>
                    <option value="1">Europa</option>
                </select>
            </div>
            <div class="col-md-2">
                <span class="badge badge-info">Pais</span>
                <select id="country" class="form-control  sm-text" onchange="">
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
        </div>

        <div class="row p-2">

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


        <div class="row">

            <div class="col-md-7">

                <div class="row m-3">
                    <div class="col-md-12 text-center bg-warning">
                        <p class="h5 font-weight-bold text-white mt-2">Fotos de la vivienda</p>
                    </div>
                </div>
                

                <div class="border border-primary mt-2">
                    <div class="row m-3">
                        <div class="col-md-12">
                            <p>Arrastre las fotos que desea cargar en cada uno de los recuadros</p>
                        </div>
                    </div>
    
                    <div class="row m-3">
                        <div class="col-md-1 border border-primary ml-5" style="height: 70px;"></div>
                        <div class="col-md-1 border border-primary ml-4" style="height: 70px;"></div>
                        <div class="col-md-1 border border-primary ml-4" style="height: 70px;"></div>
                        <div class="col-md-1 border border-primary ml-4" style="height: 70px;"></div>
                        <div class="col-md-1 border border-primary ml-4" style="height: 70px;"></div>
                        <div class="col-md-1 border border-primary ml-4" style="height: 70px;"></div>
                        <div class="col-md-1 border border-primary ml-4" style="height: 70px;"></div>
                    </div>
    
                    <div class="row m-3">
                        <div class="col-md-1 border border-primary ml-5" style="height: 70px;"></div>
                        <div class="col-md-1 border border-primary ml-4" style="height: 70px;"></div>
                        <div class="col-md-1 border border-primary ml-4" style="height: 70px;"></div>
                        <div class="col-md-1 border border-primary ml-4" style="height: 70px;"></div>
                        <div class="col-md-1 border border-primary ml-4" style="height: 70px;"></div>
                        <div class="col-md-1 border border-primary ml-4" style="height: 70px;"></div>
                        <div class="col-md-1 border border-primary ml-4" style="height: 70px;"></div>
                    </div>
    
                    <div class="row m-3">
                        <div class="col-md-1 ml-4"></div>
                        <div class="col-md-1 border border-primary ml-5" style="height: 70px;"></div>
                        <div class="col-md-1 border border-primary ml-4" style="height: 70px;"></div>
                        <div class="col-md-1 border border-primary ml-4" style="height: 70px;"></div>
                        <div class="col-md-1 border border-primary ml-4" style="height: 70px;"></div>
                        <div class="col-md-1 border border-primary ml-4" style="height: 70px;"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-5">

                <div class="row m-3">
                    <div class="col-md-12 text-center bg-warning">
                        <p class="h5 font-weight-bold text-white mt-2">¿Desea agregar videos?</p>
                    </div>
                </div>

                <div class="border border-primary mt-2">

                    <div class="row m-3">
                        <div class="col-md-2"></div>
                        <div class="form-group col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label sm-text" for="exampleRadios1">
                                  Si
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label sm-text" for="exampleRadios2">
                                  No
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <span class="badge badge-info">Cantidad de videos</span>
                        </div>

                        <div class="col-md-5">
                            <select id="country" class="form-control sm-text" onchange=""  >
                                <option value="0">Hasta 2</option>
                                <option value="1">Hasta 5</option>
                            </select>
                        </div>
                        <div class="col-md-1"></div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-2 border border-primary" style="height: 70px;"></div>
                        <div class="col-md-2 border border-primary ml-3" style="height: 70px;"></div>
                        <div class="col-md-2 border border-primary ml-3" style="height: 70px;"></div>
                        <div class="col-md-2 border border-primary ml-3" style="height: 70px;"></div>
                        <div class="col-md-2 border border-primary ml-3" style="height: 70px;"></div>
                    </div>

                </div>

                
            </div>

        </div>

        <div class="row m-3">
            <div class="col-md-2"></div>
            <div class="col-md-8 bg-warning text-center">
                <p class="h5 text-white font-weight-bold mt-2">Otros detalles sobre la vivienda</p>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <p>Si deseas, puedes dar mas detalles sobre el inmueble</p>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <textarea class="form-control border border-primary rounded" id="exampleFormControlTextarea1" rows="4"></textarea>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <div class="row m-3">
                    <div class="col-md-12 bg-warning text-center">
                        <p class="h5 text-white font-weight-bold mt-2">Cercanias de servicios y transporte</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <textarea class="form-control border border-primary rounded" id="exampleFormControlTextarea1" rows="4"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row m-3">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 bg-warning text-center">
                        <p class="h5 text-white font-weight-bold mt-2">Ubicación exacta</p>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <textarea class="form-control border border-primary rounded" id="exampleFormControlTextarea1" rows="4"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <!-- precio y moneda -->
        <div class="row m-3">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <span class="badge badge-info">Cantidad de videos</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Precio">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <span class="badge badge-info">Moneda</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <select id="country" class="form-control sm-text" onchange="">
                            <option value="0">USD</option>
                            <option value="1">EUR</option>
                        </select>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row">

            <div class="col-md-7 mt-3">

                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 bg-warning text-center">
                        <p class="h5 text-white font-weight-bold mt-2">Datos de contacto</p>
                    </div>
                    <div class="col-md-3"></div>
                </div>

                <div class="row">
                    <div class="col-md 12 border border-primary mt-1">
                        <div class="row m-3">
                            <div class="col-md-6 my-auto">
                                <label class="font-weight-bold"> <span class="ast-required"> *</span>Nombre</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control input-section2">
                            </div>
                        </div>
        
                        <div class="row m-3">
                            <div class="col-md-6 my-auto">
                                <label class="font-weight-bold"> <span class="ast-required"> *</span>Apellido</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control input-section2">
                            </div>
                        </div>
        
                        <div class="row m-3">
                            <div class="col-md-6">
                                <label class="font-weight-bold"> <span class="ast-required"> *</span>Correo electrónico</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control input-section2">
                            </div>
                        </div>
                    
                        <div class="row m-3" >
                            <div class="col-md-12">
                                <div class="text-blue"> Seleccione el o los teléfonos de su preferencia</div>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-5 form-check">
                                <input type="checkbox" class="form-check-input" id="portal-web">
                                <label class="form-check-label bg-yellow text-white tlf-checkbox" for="portal-web">Móvil</label>
                            </div>
                            <div class="col-md-5 form-check">
                                <input type="checkbox" class="form-check-input" id="portal-web">
                                <label class="form-check-label bg-yellow text-white tlf-checkbox" for="portal-web">Fijo</label>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
        
                        <div class="row m-3">
                            <div class="col-md-5"> 
                            <input class="phone form-control" name="phone1" type="tel">
                            </div>
                            <div class="col-md-7"></div>
                        </div>
        
                        <div class="row m-3">
                            <div class="col-md-5"> 
                            <input class="phone form-control" name="phone2" type="tel">
                            </div>
                            <div class="col-md-2 font-weight-bold my-auto">
                                    Ext
                            </div>
                            <div class="col-md-5"> 
                                <input type="text" class="form-control" style="margin-left: -50px;" placeholder="Opcional">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-5">

                <div class="row">
                    <div class="col-md-12">
                        <div class="row m-3">
                            <div class="col-md-3"></div>
                            <div class="col-md-6 bg-warning text-center">
                                <p class="h5 text-white font-weight-bold mt-2">Dias de contacto</p>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
        
                        <div class="border border-primary">
        
                            <div class="row m-2">
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <p>Lunes</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <p>Martes</p>
                                    </div>
                                </div>
        
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <p>Miercoles</p>
                                    </div>
                                </div>
        
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <p>Jueves</p>
                                    </div>
                                </div>
                            </div>
        
                            <div class="row m-2">
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <p>Viernes</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <p>Sabado</p>
                                    </div>
                                </div>
        
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <p>Domingo</p>
                                    </div>
                                </div>
        
                                <div class="col-md-3"></div>
                            </div>
        
                            <div class="row m-2">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <p>Fines de semana</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <p>Lunes a viernes</p>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="row m-3">
                            <div class="col-md-3"></div>
                            <div class="col-md-6 bg-warning text-center">
                                <p class="h5 text-white font-weight-bold mt-2">Hora de contacto</p>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>

                <div class="row m-3">

                    <div class="col-md-6">

                        <div class="row">
                            <div class="col-md-12">
                                <p>Desde</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-check">
                                <ul class="checkbox-dropdown" >
                                    <li class="dropdown">
                                        <p data-toggle="dropdown" class="dropdown-toggle border-gray pl-2 tiny-text">V</p>
                                        <ul class="dropdown-menu">
                                            <li><label class="checkbox "><input type="checkbox" value="0" >1</label></li>
                                            <li><label class="checkbox "><input type="checkbox" value="2" >2</label></li>
                                            <li><label class="checkbox "><input type="checkbox" value="0" >3</label></li>
                                            <li><label class="checkbox "><input type="checkbox" value="2" >4</label></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 form-check">
                                <ul class="checkbox-dropdown" >
                                    <li class="dropdown">
                                        <p data-toggle="dropdown" class="dropdown-toggle border-gray pl-2 tiny-text">V</p>
                                        <ul class="dropdown-menu">
                                            <li><label class="checkbox "><input type="checkbox" value="0">am</label></li>
                                            <li><label class="checkbox "><input type="checkbox" value="2">pm</label></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>



                    </div>

                    <div class="col-md-6">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <p>Hasta</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-check">
                                <ul class="checkbox-dropdown" >
                                    <li class="dropdown">
                                        <p data-toggle="dropdown" class="dropdown-toggle border-gray pl-2 tiny-text">V</p>
                                        <ul class="dropdown-menu">
                                            <li><label class="checkbox "><input type="checkbox" value="0" >1</label></li>
                                            <li><label class="checkbox "><input type="checkbox" value="2" >2</label></li>
                                            <li><label class="checkbox "><input type="checkbox" value="0" >3</label></li>
                                            <li><label class="checkbox "><input type="checkbox" value="2" >4</label></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 form-check">
                                <ul class="checkbox-dropdown" >
                                    <li class="dropdown">
                                        <p data-toggle="dropdown" class="dropdown-toggle border-gray pl-2 tiny-text">V</p>
                                        <ul class="dropdown-menu">
                                            <li><label class="checkbox "><input type="checkbox" value="0">am</label></li>
                                            <li><label class="checkbox "><input type="checkbox" value="2">pm</label></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection