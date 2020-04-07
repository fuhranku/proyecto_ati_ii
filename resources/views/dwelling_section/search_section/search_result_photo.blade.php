<!-- particular search -->
<div class="row" id="dwelling-photo-mode">
    <!-- first search item -->
    <div class="col-md-6 border border-warning position-relative" id="dwelling_photo_fs1">
        <div class="list-photo-overlay d-none"></div>
        <div class="row">
            <div class="col-md-6 mt-3">
                <img id="image-dwelling-photo1" class="border border-primary font-weight-bold text-center dwelling-image" src="" alt="">
            </div>

            <div class="col-md-6 mt-3">
                    {{-- <div class="row position-relative select-dwelling">
                        <div class="col-md-9 pl-5">
                            <label class="form-check-label font-weight-bold" for="dwelling-select-cb1">
                                Seleccionar
                            </label>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" onchange="onSelectDwelling()" value="dwelling1" name="select-dwelling" type="checkbox" id="dwelling-select-photo-cb1">
                            </div>
                        </div>
                    </div> --}}
                <div class="row">
                    <div class="col-md-12">
                        <a class="h4 " href="#"><u id="prop_type_photo_fs1">Apartamento</u></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 pr-0">
                        <a class="h4 text-danger" href="#"><u id="status_photo_fs1">Venta</u></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <p class= "font-weight-bold m-0" id="price_photo_fs1">300.000 USD</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class= "m-0" id="room_bath_photo_fs1">3 habitaciones, 2 baños</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                        <p class= "m-0" id="details_photo_fs1">Tiene Terraza</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <u class="d-inline"><strong>País: </strong></u><p id ="country_photo_fs1" class="m-0 d-inline">Venezuela</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <u class="d-inline"><strong>Estado: </strong></u><p id="state_photo_fs1" class="m-0 d-inline">Distrito Capital</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <a class=" font-weight-bold cursor-pointer text-blue dwelling-detail dwelling-comfort" data-id=1 onclick="return onDisplayModalComfort(1)"><u>Ver Comodidades</u></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a class=" font-weight-bold cursor-pointer text-blue dwelling-detail dwelling-services" data-id=1 onclick="return onDisplayModalService(1)"><u>Ver Servicios</u></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a class=" font-weight-bold cursor-pointer text-blue dwelling-detail dwelling-location" data-id=1 onclick="return onDisplayModalLocation(1)"><u>Ver Ubicación exacta</u></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class=" font-weight-bold text-underline cursor-pointer text-blue photo-carousel-thrigger" data-id=1> Ver Fotos </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class=" font-weight-bold text-underline cursor-pointer text-blue video-carousel-thrigger" data-id=1> Ver Videos </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5 mt-3 pl-0 pr-0 ml-n3">
                <button type="button" class="btn btn-warning font-weight-bold text-white sm-text">Contactar al anunciante</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <a href="#" target="_blank" onclick="return showDetails(1)" id="dwelling-show-details1" class="m-0 text-danger h5 font-weight-bold  m-3"><u>Ver información Completa</u></a>
            </div>
        </div>
    </div>
    
    <!-- second search item -->
    <div class="col-md-6 border border-warning position-relative"  id="dwelling_photo_fs2">
        <div class="list-photo-overlay d-none"></div>
        <div class="row">
            <div class="col-md-6 mt-3">
                <img id="image-dwelling-photo2" class="border border-primary font-weight-bold text-center dwelling-image" src="" alt="">
            </div>

            <div class="col-md-6 mt-3">
                {{-- <div class="row  position-relative select-dwelling">
                    <div class="col-md-9 pl-5">
                        <label class="form-check-label font-weight-bold" for="dwelling-select-cb2">
                            Seleccionar
                        </label>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" onchange="onSelectDwelling()" value="dwelling2" name="select-dwelling" type="checkbox" id="dwelling-select-photo-cb2">
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-md-12">
                        <a class="h4 " href="#"><u id="prop_type_photo_fs2">Apartamento</u></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12  pr-0">
                        <a class="h4 text-danger" href="#"><u id="status_photo_fs2">Venta</u></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <p class= "font-weight-bold m-0" id="price_photo_fs2">300.000 USD</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class= "m-0" id="room_bath_photo_fs2">3 habitaciones, 2 baños</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                        <p class= "m-0" id="details_photo_fs2">Tiene Terraza</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <u class="d-inline"><strong>País: </strong></u><p id ="country_photo_fs2" class="m-0 d-inline">Venezuela</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <u class="d-inline"><strong>Estado: </strong></u><p id="state_photo_fs2" class="m-0 d-inline">Distrito Capital</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <a class=" font-weight-bold cursor-pointer text-blue dwelling-detail dwelling-comfort" data-id=2 onclick="return onDisplayModalComfort(2)"><u>Ver Comodidades</u></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a class=" font-weight-bold cursor-pointer text-blue dwelling-detail dwelling-services" data-id=2 onclick="return onDisplayModalService(2)"><u>Ver Servicios</u></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a class=" font-weight-bold cursor-pointer text-blue dwelling-detail dwelling-location" data-id=2 onclick="return onDisplayModalLocation(2)"><u>Ver Ubicación exacta</u></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class=" font-weight-bold text-underline cursor-pointer text-blue photo-carousel-thrigger" data-id=2> Ver Fotos </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class=" font-weight-bold text-underline cursor-pointer text-blue video-carousel-thrigger" data-id=2> Ver Videos </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5 mt-3 pl-0 pr-0 ml-n3">
                <button type="button" class="btn btn-warning font-weight-bold text-white sm-text">Contactar al anunciante</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <a href="#" target="_blank" onclick="return showDetails(2)" id="dwelling-show-details2" class="m-0 text-danger h5 font-weight-bold  m-3"><u>Ver información Completa</u></a>
            </div>
        </div>
    </div>

    <!-- third search item -->
    <div class="col-md-6 border border-warning position-relative" id="dwelling_photo_fs3">
        <div class="list-photo-overlay d-none"></div>
        <div class="row">
            <div class="col-md-6 mt-3">
                <img id="image-dwelling-photo3" class="border border-primary font-weight-bold text-center dwelling-image" src="" alt="">
            </div>

            <div class="col-md-6 mt-3">
                {{-- <div class="row  position-relative select-dwelling">
                    <div class="col-md-9 pl-5">
                        <label class="form-check-label font-weight-bold" for="dwelling-select-cb3">
                            Seleccionar
                        </label>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" onchange="onSelectDwelling()" value="dwelling3" name="select-dwelling" type="checkbox" id="dwelling-select-photo-cb3">
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-md-12">
                        <a class="h4 " href="#"><u id="prop_type_photo_fs3">Apartamento</u></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 pr-0">
                        <a class="h4 text-danger" href="#"><u id="status_photo_fs3">Venta</u></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <p class= "font-weight-bold m-0" id="price_photo_fs3">300.000 USD</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class= "m-0" id="room_bath_photo_fs3">3 habitaciones, 2 baños</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                        <p class= "m-0" id="details_photo_fs3">Tiene Terraza</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <u class="d-inline"><strong>País: </strong></u><p id ="country_photo_fs3" class="m-0 d-inline">Venezuela</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <u class="d-inline"><strong>Estado: </strong></u><p id="state_photo_fs3" class="m-0 d-inline">Distrito Capital</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <a class=" font-weight-bold cursor-pointer text-blue dwelling-detail dwelling-comfort" data-id=3 onclick="return onDisplayModalComfort(3)"><u>Ver Comodidades</u></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a class=" font-weight-bold cursor-pointer text-blue dwelling-detail dwelling-services" data-id=3 onclick="return onDisplayModalService(3)"><u>Ver Servicios</u></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a class=" font-weight-bold cursor-pointer text-blue dwelling-detail dwelling-location" data-id=3 onclick="return onDisplayModalLocation(3)"><u>Ver Ubicación exacta</u></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class=" font-weight-bold text-underline cursor-pointer text-blue photo-carousel-thrigger" data-id=3> Ver Fotos </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class=" font-weight-bold text-underline cursor-pointer text-blue video-carousel-thrigger" data-id=3> Ver Videos </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5 mt-3 pl-0 pr-0 ml-n3">
                <button type="button" class="btn btn-warning font-weight-bold text-white sm-text">Contactar al anunciante</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <a href="#" target="_blank" onclick="return showDetails(3)" id="dwelling-show-details3" class="m-0 text-danger h5 font-weight-bold  m-3"><u>Ver información Completa</u></a>
            </div>
        </div>
    </div>

    <!-- fourth search item -->
    <div class="col-md-6 border border-warning position-relative" id="dwelling_photo_fs4">
        <div class="list-photo-overlay d-none"></div>
        <div class="row ">
            <div class="col-md-6 mt-3">
                <img id="image-dwelling-photo4" class="border border-primary font-weight-bold text-center dwelling-image" src="" alt="">
            </div>

            <div class="col-md-6 mt-3">
                {{-- <div class="row position-relative select-dwelling">
                    <div class="col-md-9 pl-5">
                        <label class="form-check-label font-weight-bold" for="dwelling-select-cb4">
                            Seleccionar
                        </label>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" onchange="onSelectDwelling()" value="dwelling4" name="select-dwelling" type="checkbox" id="dwelling-select-photo-cb4">
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-md-12">
                        <a class="h4 " href="#"><u id="prop_type_photo_fs4">Apartamento</u></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 pr-0">
                        <a class="h4 text-danger" href="#"><u id="status_photo_fs4">Venta</u></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <p class= "font-weight-bold m-0" id="price_photo_fs4">300.000 USD</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class= "m-0" id="room_bath_photo_fs4">3 habitaciones, 2 baños</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                        <p class= "m-0" id="details_photo_fs4">Tiene Terraza</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <u class="d-inline"><strong>País: </strong></u><p id ="country_photo_fs4" class="m-0 d-inline">Venezuela</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <u class="d-inline"><strong>Estado: </strong></u><p id="state_photo_fs4" class="m-0 d-inline">Distrito Capital</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <a class=" font-weight-bold cursor-pointer text-blue dwelling-detail dwelling-comfort" data-id=4 onclick="return onDisplayModalComfort(4)"><u>Ver Comodidades</u></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a class=" font-weight-bold cursor-pointer text-blue dwelling-detail dwelling-services" data-id=4 onclick="return onDisplayModalService(4)"><u>Ver Servicios</u></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a class=" font-weight-bold cursor-pointer text-blue dwelling-detail dwelling-location"  data-id=4 onclick="return onDisplayModalLocation(4)"><u>Ver Ubicación exacta</u></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class=" font-weight-bold text-underline cursor-pointer text-blue photo-carousel-thrigger" data-id=4> Ver Fotos </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class=" font-weight-bold text-underline cursor-pointer text-blue video-carousel-thrigger" data-id=4> Ver Videos </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5 mt-3 pl-0 pr-0 ml-n3">
                <button type="button" class="btn btn-warning font-weight-bold text-white sm-text">Contactar al anunciante</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <a href="#" target="_blank" onclick="return showDetails(4)" id="dwelling-show-details4" class="m-0 text-danger h5 font-weight-bold  m-3"><u>Ver información Completa</u></a>
            </div>
        </div>
    </div>
</div>
