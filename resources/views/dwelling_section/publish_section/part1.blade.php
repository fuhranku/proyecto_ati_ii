<!-- tipo de inmueble -->
<div class="col-md-2">
    <div class="row">
        <div class="col-md-12 ">
            <span class="badge badge-info">Tipo de inmueble</span>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 ml-3">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="Apartamento" checked>
            <label class="form-check-label sm-text" for="exampleRadios1">
                Apartamento
            </label>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 ml-3">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="Casa o quinta">
            <label class="form-check-label sm-text" for="exampleRadios2">
                Casa o quinta
            </label>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 ml-3">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="Apartamento o casa">
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
