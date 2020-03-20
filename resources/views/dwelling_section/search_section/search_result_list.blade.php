<!-- particular search -->
<div class="row d-none"  id="dwelling-list-mode">
    <!-- first search item -->        
    <div class="row position-relative" id="dwelling_list_fs1">
        <div class="list-photo-overlay d-none"></div>
        <div class="col-md-2 border border-warning" >
            <div class="row position-relative select-dwelling">
                <div class="col-md-9">
                    <label class="form-check-label font-weight-bold sm-text">
                        Seleccionar
                    </label>
                </div>
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input " onchange="onSelectDwelling()" value="dwelling1" name="select-dwelling" type="checkbox" id="dwelling-select-list-cb1">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3 mb-0 pb-0">
                    <img id="image-dwelling-list1" class="border border-primary font-weight-bold text-center dwelling-image" src="" alt="">
                </div>             
            </div>
        </div>
    
        <div class="col-md-6 border border-warning">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <p class= "font-weight-bold m-0 sm-text" id="price_list_fs1">300.000 USD</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class= "m-0 sm-text font-weight-bold" id="room_bath_list_fs1">3 habitaciones, 2 baños</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" >
                            <p class= "m-0 sm-text font-weight-bold" id="details_list_fs1">Tiene Terraza</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-6 mt-3">
                    <button type="button" class="btn btn-warning font-weight-bold text-white sm-text">Contactar al anunciante</button>
                </div>
            </div>
    
            <div class="row">
                <div class="col-md-12">
                    <p class="sm-text d-inline text-blue font-weight-bold">Comodidades:</p>
                    <p id="comforts_list_fs1" class="sm-text d-inline break-work">Aasdasdasasdasdasd</p>
                </div>
                <div class="col-md-12">
                    <p class="sm-text d-inline text-blue font-weight-bold">Servicios:</p>
                    <p id="services_list_fs1" class="sm-text d-inline break-work">AsdasdasdasdAsdasda</p>
                </div>
                <div class="col-md-12">
                    <p class="sm-text d-inline text-danger font-weight-bold">Haz click aqui para ver una ubicación exacta</p>
                    <a class=" sm-text font-weight-bold cursor-pointer text-blue" onclick="return onDisplayModalLocation(1)"><u>Ver Ubicación exacta</u></a>
                </div>
            </div>
    
        </div>
    
        <div class="col-md-2 border border-warning">
            
            <div class="row">
                <div class="col-md-12">
                    <strong  class="d-inline sm-text font-weight-bold">País: </strong>
                </div>
                <div class="col-md-12 mt-1">
                    <p id ="country_list_fs1" class="m-0 d-inline sm-text">Venezuela</p>
                </div>
                <div class="col-md-12 mt-1">
                    <strong  class="d-inline sm-text font-weight-bold">Estado: </strong>
                </div>
                <div class="col-md-12 mt-1">
                    <p id ="state_list_fs1" class="m-0 d-inline sm-text">Distrito Capital</p>
                </div>
                <div class="col-md-12 mt-1">
                    <a href="#" ><u id="prop_type_list_fs1" class="font-weight-bold">Apartamento</u></a>
                </div>
            </div>
        </div>
    
        <div class="col-md-2 border border-warning" >
            <div class="row">
                <div class="col-md-12">
                    <a class="text-danger font-weight-bold" href="#"><u id="status_list_fs1">Venta</u></a>
                </div>
                <div class="col-md-12">
                    <a class=" font-weight-bold sm-text " href="#"><u>Ver Fotos</u></a>
                </div>
                <div class="col-md-12">
                    <a class=" font-weight-bold sm-text" href="#"><u>Ver Videos</u></a>
                </div>
                <div class="col-md-12">
                    <a class=" font-weight-bold sm-text" onclick="return showDetails(1)" id="dwelling-show-details_list1" href="#"><u>Ver información Completa</u></a>
                </div>
            </div>
        </div>
    </div>

    <!-- second search item -->
    <div class="row position-relative" id="dwelling_list_fs2">
        <div class="list-photo-overlay d-none"></div>
        <div class="col-md-2 border border-warning" >
            <div class="row position-relative select-dwelling">
                <div class="col-md-9">
                    <label class="form-check-label font-weight-bold sm-text">
                        Seleccionar
                    </label>
                </div>
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input " onchange="onSelectDwelling()" value="dwelling2" name="select-dwelling" type="checkbox" id="dwelling-select-list-cb2">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3 mb-0 pb-0">
                    <img id="image-dwelling-list2" class="border border-primary font-weight-bold text-center dwelling-image" src="" alt="">
                </div>                
            </div>
        </div>
    
        <div class="col-md-6 border border-warning">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <p class= "font-weight-bold m-0 sm-text" id="price_list_fs2">300.000 USD</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class= "m-0 sm-text font-weight-bold" id="room_bath_list_fs2">3 habitaciones, 2 baños</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" >
                            <p class= "m-0 sm-text font-weight-bold" id="details_list_fs2">Tiene Terraza</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-6 mt-3">
                    <button type="button" class="btn btn-warning font-weight-bold text-white sm-text">Contactar al anunciante</button>
                </div>
            </div>
    
            <div class="row">
                <div class="col-md-12">
                    <p class="sm-text d-inline text-blue font-weight-bold">Comodidades:</p>
                    <p id="comforts_list_fs2" class="sm-text d-inline break-work">Aasdasdasasdasdasd</p>
                </div>
                <div class="col-md-12">
                    <p class="sm-text d-inline text-blue font-weight-bold">Servicios:</p>
                    <p id="services_list_fs2" class="sm-text d-inline break-work">AsdasdasdasdAsdasda</p>
                </div>
                <div class="col-md-12">
                    <p class="sm-text d-inline text-danger font-weight-bold">Haz click aqui para ver una ubicación exacta</p>
                    <a class=" sm-text font-weight-bold cursor-pointer text-blue" onclick="return onDisplayModalLocation(2)"><u>Ver Ubicación exacta</u></a>
                </div>
            </div>
    
        </div>
    
        <div class="col-md-2 border border-warning" >
            
            <div class="row">
                <div class="col-md-12">
                    <strong  class="d-inline sm-text font-weight-bold">País: </strong>
                </div>
                <div class="col-md-12 mt-1">
                    <p id ="country_list_fs2" class="m-0 d-inline sm-text">Venezuela</p>
                </div>
                <div class="col-md-12 mt-1">
                    <strong  class="d-inline sm-text font-weight-bold">Estado: </strong>
                </div>
                <div class="col-md-12 mt-1">
                    <p id ="state_list_fs2" class="m-0 d-inline sm-text">Distrito Capital</p>
                </div>
                <div class="col-md-12 mt-1">
                    <a href="#" ><u id="prop_type_list_fs2" class="font-weight-bold">Apartamento</u></a>
                </div>
            </div>
        </div>
    
        <div class="col-md-2 border border-warning">
            <div class="row">
                <div class="col-md-12">
                    <a class="text-danger font-weight-bold" href="#"><u id="status_list_fs2">Venta</u></a>
                </div>
                <div class="col-md-12">
                    <a class=" font-weight-bold sm-text " href="#"><u>Ver Fotos</u></a>
                </div>
                <div class="col-md-12">
                    <a class=" font-weight-bold sm-text" href="#"><u>Ver Videos</u></a>
                </div>
                <div class="col-md-12">
                    <a class=" font-weight-bold sm-text" onclick="return showDetails(2)" id="dwelling-show-details_list2" href="#"><u>Ver información Completa</u></a>
                </div>
            </div>
        </div>
    </div>

    <!-- third search item -->
    <div class="row position-relative" id="dwelling_list_fs3">
        <div class="list-photo-overlay d-none"></div>
        <div class="col-md-2 border border-warning">
            <div class="row position-relative select-dwelling">
                <div class="col-md-9">
                    <label class="form-check-label font-weight-bold sm-text">
                        Seleccionar
                    </label>
                </div>
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input " onchange="onSelectDwelling()" value="dwelling3" name="select-dwelling" type="checkbox" id="dwelling-select-list-cb3">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3 mb-0 pb-0">
                    <img id="image-dwelling-list3" class="border border-primary font-weight-bold text-center dwelling-image" src="" alt="">
                </div>
            </div>
        </div>
    
        <div class="col-md-6 border border-warning">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <p class= "font-weight-bold m-0 sm-text" id="price_list_fs3">300.000 USD</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class= "m-0 sm-text font-weight-bold" id="room_bath_list_fs3">3 habitaciones, 2 baños</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" >
                            <p class= "m-0 sm-text font-weight-bold" id="details_list_fs3">Tiene Terraza</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-6 mt-3">
                    <button type="button" class="btn btn-warning font-weight-bold text-white sm-text">Contactar al anunciante</button>
                </div>
            </div>
    
            <div class="row">
                <div class="col-md-12">
                    <p class="sm-text d-inline text-blue font-weight-bold">Comodidades:</p>
                    <p id="comforts_list_fs3" class="sm-text d-inline break-work">Aasdasdasasdasdasd</p>
                </div>
                <div class="col-md-12">
                    <p class="sm-text d-inline text-blue font-weight-bold">Servicios:</p>
                    <p id="services_list_fs3" class="sm-text d-inline break-work">AsdasdasdasdAsdasda</p>
                </div>
                <div class="col-md-12">
                    <p class="sm-text d-inline text-danger font-weight-bold">Haz click aqui para ver una ubicación exacta</p>
                    <a class=" sm-text font-weight-bold cursor-pointer text-blue" onclick="return onDisplayModalLocation(3)"><u>Ver Ubicación exacta</u></a>
                </div>
            </div>
    
        </div>
    
        <div class="col-md-2 border border-warning">
            
            <div class="row">
                <div class="col-md-12">
                    <strong  class="d-inline sm-text font-weight-bold">País: </strong>
                </div>
                <div class="col-md-12 mt-1">
                    <p id ="country_list_fs3" class="m-0 d-inline sm-text">Venezuela</p>
                </div>
                <div class="col-md-12 mt-1">
                    <strong  class="d-inline sm-text font-weight-bold">Estado: </strong>
                </div>
                <div class="col-md-12 mt-1">
                    <p id ="state_list_fs3" class="m-0 d-inline sm-text">Distrito Capital</p>
                </div>
                <div class="col-md-12 mt-1">
                    <a href="#" ><u id="prop_type_list_fs3" class="font-weight-bold">Apartamento</u></a>
                </div>
            </div>
        </div>
    
        <div class="col-md-2 border border-warning">
            <div class="row">
                <div class="col-md-12">
                    <a class="text-danger font-weight-bold" href="#"><u id="status_list_fs3">Venta</u></a>
                </div>
                <div class="col-md-12">
                    <a class=" font-weight-bold sm-text " href="#"><u>Ver Fotos</u></a>
                </div>
                <div class="col-md-12">
                    <a class=" font-weight-bold sm-text" href="#"><u>Ver Videos</u></a>
                </div>
                <div class="col-md-12">
                    <a class=" font-weight-bold sm-text" onclick="return showDetails(3)" id="dwelling-show-details_list3" href="#"><u>Ver información Completa</u></a>
                </div>
            </div>
        </div>
    </div>

    <!-- fourth seach item -->
    <div class="row position-relative" id="dwelling_list_fs4">
        <div class="list-photo-overlay d-none"></div>
        <div class="col-md-2 border border-warning" >
            <div class="row position-relative select-dwelling">
                <div class="col-md-9">
                    <label class="form-check-label font-weight-bold sm-text">
                        Seleccionar
                    </label>
                </div>
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input " onchange="onSelectDwelling()" value="dwelling4" name="select-dwelling" type="checkbox" id="dwelling-select-list-cb4">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3 mb-0 pb-0">
                    <img id="image-dwelling-list4" class="border border-primary font-weight-bold text-center dwelling-image" src="" alt="">
                </div>
            </div>
        </div>
    
        <div class="col-md-6 border border-warning">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <p class= "font-weight-bold m-0 sm-text" id="price_list_fs4">300.000 USD</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class= "m-0 sm-text font-weight-bold" id="room_bath_list_fs4">3 habitaciones, 2 baños</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" >
                            <p class= "m-0 sm-text font-weight-bold" id="details_list_fs4">Tiene Terraza</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-6 mt-3">
                    <button type="button" class="btn btn-warning font-weight-bold text-white sm-text">Contactar al anunciante</button>
                </div>
            </div>
    
            <div class="row">
                <div class="col-md-12">
                    <p class="sm-text d-inline text-blue font-weight-bold">Comodidades:</p>
                    <p id="comforts_list_fs4" class="sm-text d-inline break-work">Aasdasdasasdasdasd</p>
                </div>
                <div class="col-md-12">
                    <p class="sm-text d-inline text-blue font-weight-bold">Servicios:</p>
                    <p id="services_list_fs4" class="sm-text d-inline break-work">AsdasdasdasdAsdasda</p>
                </div>
                <div class="col-md-12">
                    <p class="sm-text d-inline text-danger font-weight-bold">Haz click aqui para ver una ubicación exacta</p>
                    <a class=" sm-text font-weight-bold cursor-pointer text-blue" onclick="return onDisplayModalLocation(4)"><u>Ver Ubicación exacta</u></a>
                </div>
            </div>
    
        </div>
    
        <div class="col-md-2 border border-warning">
            
            <div class="row">
                <div class="col-md-12">
                    <strong  class="d-inline sm-text font-weight-bold">País: </strong>
                </div>
                <div class="col-md-12 mt-1">
                    <p id ="country_list_fs4" class="m-0 d-inline sm-text">Venezuela</p>
                </div>
                <div class="col-md-12 mt-1">
                    <strong  class="d-inline sm-text font-weight-bold">Estado: </strong>
                </div>
                <div class="col-md-12 mt-1">
                    <p id ="state_list_fs4" class="m-0 d-inline sm-text">Distrito Capital</p>
                </div>
                <div class="col-md-12 mt-1">
                    <a href="#" ><u id="prop_type_list_fs4" class="font-weight-bold">Apartamento</u></a>
                </div>
            </div>
        </div>
    
        <div class="col-md-2 border border-warning">
            <div class="row">
                <div class="col-md-12">
                    <a class="text-danger font-weight-bold" href="#"><u id="status_list_fs4">Venta</u></a>
                </div>
                <div class="col-md-12">
                    <a class=" font-weight-bold sm-text " href="#"><u>Ver Fotos</u></a>
                </div>
                <div class="col-md-12">
                    <a class=" font-weight-bold sm-text" href="#"><u>Ver Videos</u></a>
                </div>
                <div class="col-md-12">
                    <a class=" font-weight-bold sm-text" onclick="return showDetails(4)" id="dwelling-show-details_list4" href="#"><u>Ver información Completa</u></a>
                </div>
            </div>
        </div>
    </div>
    
</div>

