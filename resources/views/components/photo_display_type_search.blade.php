<div class="col-md-6 border border-warning position-relative" id={{'dwelling_photo_fs'.$index}}>
    <div class="list-photo-overlay d-none"></div>
    <div class="row">
        <div class="col-md-6 mt-3">
            <img id={{'image-dwelling-photo'.$index}} class="border border-primary font-weight-bold text-center dwelling-image" src="" alt="">
        </div>

        <div class="col-md-6 mt-3">
            @if ($search_type == '0')
                <div class="row  position-relative select-dwelling">
                    <div class="col-md-9 pl-5">
                        <label class="form-check-label font-weight-bold" for="dwelling-select-cb3">
                            Seleccionar
                        </label>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" onchange="onSelectDwelling()" value="dwelling3" name="select-dwelling" type="checkbox" id={{"dwelling-select-photo-cb".$index}}>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="text-uppercase text-underline text-blue font-weight-bold" id={{'prop_type_photo_fs'.$index}}>Apartamento</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 pr-0">
                    <div class="text-uppercase text-underline text-red font-weight-bold" id={{'status_photo_fs'.$index}}>Venta</div>
                </div>
            </div>
            @if ($search_type == '0')
                <div class="row float-right">
                    <img id={{'see-dwelling'.$index}} class="dwelling-icon see-more-icon cursor-pointer" data-id={{$index}} src="{{url('/images/eye_icon.png')}}">
                    <img id={{'edit-dwelling'.$index}} class="dwelling-icon modify-icon cursor-pointer" data-id={{$index}} src="{{url('/images/edit_icon.png')}}">
                    <img id={{'delete-dwelling'.$index}} class="dwelling-icon delete-icon cursor-pointer" data-id={{$index}} src="{{url('/images/delete_icon.png')}}">
                </div>
            @endif
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <p class= "font-weight-bold m-0" id={{'price_photo_fs'.$index}}>300.000 USD</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class= "m-0  pr-0" id={{'room_bath_photo_fs'.$index}}>3 habitaciones, 2 baños</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" >
                    <p class= "m-0  pr-0" id={{'details_photo_fs'.$index}}>Tiene Terraza</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <u class="d-inline"><strong>País</u>: </strong><p id ={{'country_photo_fs'.$index}} class="m-0 d-inline">Venezuela</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <u class="d-inline"><strong>Estado</u>: </strong><p id={{'state_photo_fs'.$index}} class="m-0 d-inline">Distrito Capital</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7 mt-3">
            <div class="row">
                <div class="col-md-12">
                    <a class=" font-weight-bold cursor-pointer text-blue dwelling-detail dwelling-comfort" data-id={{$index}} onclick="return onDisplayModalComfort({{$index}})">&bull; <u>Ver Comodidades</u></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a class=" font-weight-bold cursor-pointer text-blue dwelling-detail dwelling-services" data-id={{$index}} onclick="return onDisplayModalService({{$index}})">&bull; <u>Ver Servicios</u></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a class=" font-weight-bold cursor-pointer text-blue dwelling-detail dwelling-location" data-id={{$index}} onclick="return onDisplayModalLocation({{$index}})">&bull; <u>Ver Ubicación exacta</u></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class=" font-weight-bold cursor-pointer text-blue photo-modal-thrigger" data-id={{$index}}>&bull; <u>Ver Fotos</u> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class=" font-weight-bold cursor-pointer text-blue video-modal-thrigger" data-id={{$index}}>&bull; <u>Ver Videos</u> </div>
                </div>
            </div>
        </div>

        <div class="col-md-5 mt-3 pl-0 pr-0 ml-n3">
            <button type="button" class="btn btn-warning font-weight-bold text-white sm-text">Contactar al anunciante</button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <a href="#" target="_blank" onclick="return showDetails({{$index}})" id={{"dwelling-show-details".$index}} class="m-0 text-red h5 font-weight-bold  m-3"><u>Ver información Completa</u></a>
        </div>
    </div>
</div>