<div class="row position-relative" id={{"dwelling_list_fs".$index}}>
    <div class="list-photo-overlay d-none"></div>
    <div class="col-md-2 border border-warning" >
        <div class="row">
            <div class="col-md-12 mt-3 mb-0 pb-0">
                <img id={{"image-dwelling-list".$index}} class="border border-primary font-weight-bold text-center dwelling-image" src="" alt="">
            </div>             
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
                        <p class= "m-0 sm-text font-weight-bold" id={{"room_bath_list_fs".$index}}>3 habitaciones, 2 baños</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                        <p class= "m-0 sm-text font-weight-bold" id={{"details_list_fs".$index}}>Tiene Terraza</p>
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
                <p id={{"comforts_list_fs".$index}} class="sm-text d-inline break-work"></p>
            </div>
            <div class="col-md-12">
                <p class="sm-text d-inline text-blue font-weight-bold">Servicios:</p>
                <p id={{"services_list_fs".$index}} class="sm-text d-inline break-work"></p>
            </div>
            <div class="col-md-12">
                <p class="sm-text d-inline text-danger font-weight-bold">Haz click aqui para ver una ubicación exacta</p>
                <a class=" sm-text font-weight-bold cursor-pointer text-blue" onclick="return onDisplayModalLocation({{$index}})"><u>Ver Ubicación exacta</u></a>
            </div>
        </div>

    </div>

    <div class="col-md-2 border border-warning">
        
        <div class="row">
            <div class="col-md-12">
                <strong  class="d-inline sm-text font-weight-bold">País: </strong>
            </div>
            <div class="col-md-12 mt-1">
                <p id ={{"country_list_fs".$index}}}} class="m-0 d-inline sm-text">Venezuela</p>
            </div>
            <div class="col-md-12 mt-1">
                <strong  class="d-inline sm-text font-weight-bold">Estado: </strong>
            </div>
            <div class="col-md-12 mt-1">
                <p id ={{"state_list_fs".$index}} class="m-0 d-inline sm-text">Distrito Capital</p>
            </div>
            <div class="col-md-12 mt-1">
                <a href="#" ><u id={{"prop_type_list_fs".$index}} class="font-weight-bold">Apartamento</u></a>
            </div>
        </div>
    </div>

    <div class="col-md-2 border border-warning" >
        <div class="row">
            <div class="col-md-12 pr-0">
                <a class="text-danger font-weight-bold md-text" href="#"><u id={{"status_list_fs".$index}}>Venta</u></a>
            </div>
            <div class="col-md-12">
                <div class=" font-weight-bold text-underline cursor-pointer text-blue photo-carousel-thrigger sm-text" data-id={{$index}}> Ver Fotos </div>
            </div>
            <div class="col-md-12">
                <div class=" font-weight-bold text-underline cursor-pointer text-blue video-carousel-thrigger sm-text" data-id={{$index}}> Ver Videos </div>
            </div>
            <div class="col-md-12">
                <a class=" font-weight-bold text-underline cursor-pointer text-blue sm-text" target="_blank" onclick="return showDetails({{$index}})" id={{"dwelling-show-details_list".$index}} href="#"><u>Ver información Completa</u></a>
            </div>
        </div>
    </div>
</div>