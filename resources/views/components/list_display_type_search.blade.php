<div class="row position-relative m-0" id={{"dwelling_list_fs".$index}}>
        
    <div class="list-photo-overlay d-none"></div>

    <div class="col-md-1 border border-warning input-list-select-dwelling">
        <input id={{"display-checkbox-edit-list".$index}} onchange="onSelectDwelling()" value="dwelling3" name="select-dwelling" data-id={{$index}} type="checkbox" class="dwelling-select-photo-cb{{$index}} overlay-input-dwelling">
    </div>

    <div class="col-md-1 border border-warning" >
        <div class="row">
            <div class="col-md-12 p-0">
                @include('dwelling_section.search_section.modals.list_search_type_carousel')
                {{-- <img id={{"image-dwelling-list".$index}} class=" font-weight-bold text-center dwelling-image" src="" alt=""> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 md-text bg-dark text-white font-weight-bold d-flex pl-2" style='flex-direction:row'>
                <i class="fas fa-camera my-auto pr-1 mr-1"></i>
                <div class="my-auto d-flex " style='flex-direction:row'>
                    <span class="active-image-number">
                        1
                    </span> 
                    /
                    <span class="total-images">
                        10
                    </span>
                </div>        
            </div>         
        </div>
        <div class="row">
            <a class="col-md-12 text-underline text-blue sm-text pl-1 font-weight-bold" href='#' target="_blank" onclick="return showDetails({{$index}})">Más detalles</a>
        </div>
    </div>

    <div class="col-md-6 border border-warning">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <p class= "font-weight-bold m-0 sm-text" id={{"price_list_fs".$index}}>300.000 USD</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class= "m-0 sm-text" id={{"room_bath_list_fs".$index}}>3 habitaciones, 2 baños</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                        <p class= "m-0 sm-text" id={{"details_list_fs".$index}}>Tiene Terraza</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-3">
                <button type="button" class="btn btn-warning font-weight-bold text-white sm-text contact-announcer-btn" data-id={{$index}}>Contactar al anunciante</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p class="sm-text d-inline text-blue font-weight-bold">Comodidades:</p>
                <p id={{"comforts_list_fs".$index}} class="sm-text d-inline break-work"></p>
            </div>
            <div class="col-md-12">
                <p class="sm-text d-inline text-blue font-weight-bold">Servicios:</p>
                <p id={{"services_list_fs".$index}} class="sm-text d-inline break-work"></p>
            </div>
            <div class="col-md-12">
                <p class="sm-text d-inline text-red font-weight-bold">Haz click aqui para ver una ubicación exacta</p>
                <a class=" sm-text font-weight-bold cursor-pointer text-blue" onclick="return onDisplayModalLocation({{$index}})"><u>Ver ubicación exacta</u></a>
            </div>
        </div>

    </div>

    <div class="col-md-1 border border-warning" style="min-width: 126px;">
        <div class="row">
            <div class="col-md-12 pl-2">
                <strong  class="d-inline sm-text font-weight-bold">País: </strong>
            </div>
            <div class="col-md-12 mt-n2 pl-2">
                <p id ={{"country_list_fs".$index}}}} class="m-0 d-inline sm-text">Venezuela</p>
            </div>
            <div class="col-md-12 mt-1 pl-2">
                <strong  class="d-inline sm-text font-weight-bold">Estado: </strong>
            </div>
            <div class="col-md-12 mt-n2 pl-2">
                <p id ={{"state_list_fs".$index}} class="m-0 d-inline sm-text">Distrito Capital</p>
            </div>
            <div class="col-md-12 mt-1 pl-2">
                <div id={{"prop_type_list_fs".$index}} class=" text-underline font-weight-bold text-uppercase text-blue sm-text">Apartamento</div>
            </div>
        </div>
    </div>

    <div class="col-md-2 border border-warning pl-2" >
        <div class="row">
            <div class="col-md-12 pr-0">
                <div class="text-red font-weight-bold sm-text text-uppercase" id={{"status_list_fs".$index}}>Venta</div>
            </div>
            <div class="col-md-12">
                <div class=" font-weight-bold text-underline cursor-pointer text-blue photo-modal-thrigger sm-text mt-1" data-id={{$index}}> Ver fotos </div>
            </div>
            <div class="col-md-12">
                <div class=" font-weight-bold text-underline cursor-pointer text-blue video-modal-thrigger sm-text mt-3" data-id={{$index}}> Ver videos </div>
            </div>
            <div class="col-md-12" style='line-height: 0.8em;margin-top: 7px;'>
                <a class=" font-weight-bold text-underline cursor-pointer text-blue sm-text mt-3" target="_blank" onclick="return showDetails({{$index}})" id={{"dwelling-show-details_list".$index}} href="#"><u>Ver información completa</u></a>
            </div>
        </div>
    </div>

    <div class="col-md-1 icon-list-dwelling text-center border border-warning">
        <img class="display-icons-edit-list{{$index}} dwelling-icon cursor-pointer d-none disable-icon{{$index}}" data-id={{$index}} src="{{url('/images/disable_publication_icon.png')}}">
        <img class="display-icons-edit-list{{$index}} dwelling-icon cursor-pointer d-none enable-icon{{$index}} z-1000" data-id={{$index}} src="{{url('/images/enable_publication_icon.png')}}">
        <img class="display-icons-edit-list{{$index}} dwelling-icon modify-icon cursor-pointer" data-id={{$index}} src="{{url('/images/edit_icon.png')}}">
        <img class="display-icons-edit-list{{$index}} dwelling-icon delete-icon cursor-pointer" data-id={{$index}} src="{{url('/images/delete_icon.png')}}">
    </div>
</div>