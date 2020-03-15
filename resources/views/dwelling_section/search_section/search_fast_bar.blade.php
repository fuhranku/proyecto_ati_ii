{{-- BUSQUEDA RAPIDA --}}
<div class="search-btn border border-info rounded " id='btn-b-rapida2'>
    <i class="fas fa-caret-down d-inline"></i>
    <p class="font-weight-bold m-0 d-inline">Búsqueda Rápida</p>
</div>

<div class="border border-info p-1" id="busqueda-rapida2">

    <div class="row p-2">
        <div class="col-md-6">
            <span class="badge badge-info">Pais</span>
            <select id="country" class="form-control sm-text" onchange="" id="crt-userType" >
                <option value="0">Venezuela</option>
                <option value="1">Colombia</option>
            </select>
        </div>
        <div class="col-md-6">
            <span class="badge badge-info">Estado</span>
            <select id="country" class="form-control sm-text " onchange="" id="crt-userType" >
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
            <select id="country" class="form-control  sm-text" onchange="" id="crt-userType" >
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