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
            <input class="form-check-input" type="radio" value="0" checked>
            <label class="form-check-label sm-text">
                Apartamento
            </label>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 ml-3">
            <input class="form-check-input" type="radio" value="1">
            <label class="form-check-label sm-text">
                Casa o quinta
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
            <ul class="checkbox-dropdown" id='checkbox-dropdown-comfort'>
                <li class="dropdown mt-2">
                    <p data-toggle="dropdown" class="dropdown-toggle border-gray pl-2 tiny-text">Seleccione comodidades</p>
                    <ul class="dropdown-menu" data-flip="false">
                        @foreach ($comforts as $comfort)
                    <li><label class="checkbox sm-text"><input type="checkbox" value={{$comfort->id}} name="comforts">{{$comfort->name}}</label></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    @component('components.field_error')
        @slot('grid_size')
            12
        @endslot
        @slot('error_row_id')
            error_row_checkbox_dropdown_comfort
        @endslot
        @slot('error_ul_id')
            error_ul_checkbox_dropdown_comfort
        @endslot
    @endcomponent
</div>

<div class="col-md-2">
    <div class="row">
        <div class="col-md-12 form-check">
            <ul class="checkbox-dropdown" >
                <li class="dropdown mt-2">
                    <p data-toggle="dropdown" class="dropdown-toggle border-gray pl-2 sm-text">Servicios</p>
                    <ul class="dropdown-menu" id="services-publish-dwelling-dropdown">
                        @foreach ($services as $service)
                            <li><label class="checkbox sm-text"><input type="checkbox" value={{$service->id}} name="services">{{$service->name}}</label></li>
                        @endforeach
                            <li><label class="checkbox sm-text"><input type="checkbox" value="other" name="services" id="service-dwelling-other-input-text">Otro</label></li>
                            <li class='d-none' id="other-li">
                                <div class="row sm-text" >
                                    <div class="col-sm-12">
                                        Especifique
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="dwelling-other-input" name='other-spec'>
                                    </div>
                                </div>
                            </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    @component('components.field_error')
    @slot('grid_size')
        12
    @endslot
    @slot('error_row_id')
        error_row_services_publish_dwelling_dropdown
    @endslot
    @slot('error_ul_id')
        error_ul_services_publish_dwelling_dropdown
    @endslot
@endcomponent
</div>
</div>
