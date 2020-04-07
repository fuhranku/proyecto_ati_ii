{{-- Primera parte: Dropdowns --}}
<div class="row p-2">
    <div class="col-md-2">
        <div class="row mr-1"> 
            <span class="badge badge-label bg-dark-blue text-white">Continente</span>
            <select id="continent-select" class="form-control sm-text">
                <option class="disabled" value='' label="Continente" disabled value></option>
                @foreach($continents as $continent)
                    @if ($dwelling['continent_id'] == $continent->id)
                        <option value={{$continent->id}} selected>{{$continent->name}}</option>
                    @else
                        <option value={{$continent->id}}>{{$continent->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        @component('components.field_error')
            @slot('grid_size')
                12
            @endslot
            @slot('error_row_id')
                error_row_continent_select
            @endslot
            @slot('error_ul_id')
                error_ul_continent_select
            @endslot
        @endcomponent
    </div>
    <div class="col-md-2">
        <div class="row mr-1">
            <span class="badge badge-label bg-dark-blue text-white">Pais</span>
            <select id="country-select" class="form-control  sm-text">
                <option class="disabled" value='' label="País" disabled value></option>
                @foreach($countries as $country)
                    @if ($dwelling['country_id'] == $country->id)
                        <option value={{$country->id}} selected>{{$country->name}}</option>
                    @else
                        <option value={{$country->id}}>{{$country->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        @component('components.field_error')
            @slot('grid_size')
                12
            @endslot
            @slot('error_row_id')
                error_row_country_select
            @endslot
            @slot('error_ul_id')
                error_ul_country_select
            @endslot
        @endcomponent
    </div>

    <div class="col-md-2">
        <div class='row mr-1'>
            <span class="badge badge-label bg-dark-blue text-white">Estado</span>
            <select id="state-select" class="form-control sm-text">
                <option class="disabled" value='' label="Estado" disabled value></option>
                @foreach($states as $state)
                    @if ($dwelling['state_id'] == $state->id)
                        <option value={{$state->id}} selected>{{$state->name}}</option>
                    @else
                        <option value={{$state->id}}>{{$state->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        @component('components.field_error')
            @slot('grid_size')
                12
            @endslot
            @slot('error_row_id')
                error_row_state_select
            @endslot
            @slot('error_ul_id')
                error_ul_state_select
            @endslot
        @endcomponent
    </div>

    <div class="col-md-2">
        <div class="row mr-1">
            <span class="badge badge-label bg-dark-blue text-white">Ciudad</span>
            <select id="city-select" class="form-control sm-text">
                <option class="disabled" value='' label="Ciudad" disabled value></option>
                @foreach($cities as $city)
                @if ($dwelling['city_id'] == $city->id)
                    <option value={{$city->id}} selected>{{$city->name}}</option>
                @else
                    <option value={{$city->id}}>{{$city->name}}</option>
                @endif
            @endforeach
            </select>
        </div>
        @component('components.field_error')
            @slot('grid_size')
                12
            @endslot
            @slot('error_row_id')
                error_row_city_select
            @endslot
            @slot('error_ul_id')
                error_ul_city_select
            @endslot
        @endcomponent
    </div>

    <div class="col-md-2">
        <div class="row">
            <div class="col-md-12 ">
                <span class="badge badge-label bg-dark-blue text-white">Vivienda en</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ml-3">
                <input class="form-check-input" type="radio" value="0" name="vivienda-en-radio-btn">
                <label class="form-check-label sm-text" >
                    Alquiler
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ml-3">
                <input class="form-check-input" type="radio" value="1" name="vivienda-en-radio-btn">
                <label class="form-check-label sm-text">
                    Venta
                </label>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 ml-3">
                <input class="form-check-input" type="radio" value="2" name="vivienda-en-radio-btn">
                <label class="form-check-label sm-text">
                    Alquiler y venta
                </label>
            </div>
        </div>
    </div>
</div>

<script>
    var countries = @json($countries);
    var states = @json($states);
    var cities = @json($cities);
</script>