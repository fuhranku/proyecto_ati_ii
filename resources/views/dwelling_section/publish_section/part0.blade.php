{{-- Primera parte: Dropdowns --}}
<div class="row p-2">
    <div class="col-md-2">
        <span class="badge badge-info">Continente</span>
        <select id="country" class="form-control sm-text" onchange=""   >
            @foreach($continents as $continent)
                <option value={{$continent->id}}>{{$continent->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-2">
        <span class="badge badge-info">Pais</span>
        <select id="country" class="form-control  sm-text" onchange=""   >
            @foreach($countries as $country)
                <option value={{$country->id}}>{{$country->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-2">
        <span class="badge badge-info">Estado</span>
        <select id="country" class="form-control sm-text" onchange=""   >
            @foreach($states as $state)
                <option value={{$state->id}}>{{$state->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-2">
        <span class="badge badge-info">Ciudad</span>
        <select id="country" class="form-control sm-text " onchange=""   >
            @foreach($cities as $city)
                <option value={{$city->id}}>{{$city->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-2">
        <span class="badge badge-info">Zona</span>
        <select id="country" class="form-control sm-text " onchange=""   >
            @foreach($zones as $zone)
                <option value={{$zone->id}}>{{$zone->name}}</option>
            @endforeach
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
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="alquiler" checked>
                <label class="form-check-label sm-text" for="exampleRadios1">
                    Alquiler
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ml-3">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="venta">
                <label class="form-check-label sm-text" for="exampleRadios2">
                    Venta
                </label>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 ml-3">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="Alquiler y venta">
                <label class="form-check-label sm-text" for="exampleRadios3">
                    Alquiler y venta
                </label>
            </div>
        </div>
    </div>
</div>

<div class="row p-2">