<div class="container ml-special mt-3 {{$info->person_type == 'nat' ? '' : 'd-none'}}" id="container-p-natural">
    <span class="font-weight-bold">Ingrese los datos solicitados a continuación:</span>
    <div class="row mt-3">
        <div class="col-md-3 my-auto">
            <label class="font-weight-bold"> <span class="ast-required"> *</span>Nombre</label>
        </div>
        <div class="col-md-3">
        <input type="text" class="form-control" name='nombre_pn' value="{{ !empty($info_specific->name) ? $info_specific->name : ''}}">
        </div>
    </div>
    @component('components.field_error')
        @slot('grid_size')
            6
        @endslot
        @slot('error_row_id')
            error_row_nombre_pn
        @endslot
        @slot('error_ul_id')
            error_ul_nombre_pn
        @endslot
    @endcomponent
    <div class="row input-row">
        <div class="col-md-3 my-auto">
            <label class="font-weight-bold "> <span class="ast-required"> *</span>Apellido</label>
        </div>
        <div class="col-md-3">
            <input type="text" class="form-control" name='apellido_pn' value="{{ !empty($info_specific->last_name) ? $info_specific->last_name : ''}}">
        </div>
    </div>
    @component('components.field_error')
        @slot('grid_size')
            6
        @endslot
        @slot('error_row_id')
            error_row_apellido_pn
        @endslot
        @slot('error_ul_id')
            error_ul_apellido_pn
        @endslot
    @endcomponent
    <div class="row input-row">
        <div class="col-md-3 my-auto">
            <label class="font-weight-bold"> <span class="ast-required"> *</span>Cédula/Pasaporte/DNI</label>
        </div>
        <div class="col-md-3">
            <input type="text" class="form-control" name='user_id_pn' value="{{ !empty($info_specific->person_id) ? $info_specific->person_id : ''}}">
        </div>
    </div>
    @component('components.field_error')
        @slot('grid_size')
            6
        @endslot
    @slot('error_row_id')
        error_row_user_id_pn
    @endslot
    @slot('error_ul_id')
        error_ul_user_id_pn
    @endslot
    @endcomponent
    <div class="row input-row">
        <div class="col-md-3 my-auto">
            <label class="font-weight-bold"> <span class="ast-required"> *</span>Correo Electrónico</label>
        </div>
        <div class="col-md-3">
            <input type="text" class="form-control" name='email_pn' value="{{ !empty($info_specific->email) ? $info_specific->email : ''}}">
        </div>
    </div>
    @component('components.field_error')
        @slot('grid_size')
            6
        @endslot
    @slot('error_row_id')
        error_row_email_pn
    @endslot
    @slot('error_ul_id')
        error_ul_email_pn
    @endslot
    @endcomponent
    <div class="row input-row">
        <div class="col-md-3 my-auto">
            <label class="font-weight-bold"> <span class="ast-required"> *</span>País de procedencia</label>
        </div>
        <div class="col-md-3">
            <select class="form-control" id='country_pn'>
                <option value='' label="Seleccione su país" disabled selected value></option>
                @foreach($countries as $country)
                <option value={{$country->id}}>{{$country->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    @component('components.field_error')
        @slot('grid_size')
            6
        @endslot
    @slot('error_row_id')
        error_row_country_pn
    @endslot
    @slot('error_ul_id')
        error_ul_country_pn
    @endslot
    @endcomponent

    <div class="row input-row">
        <div class="col-md-3">
            <label class="font-weight-bold"> <span class="ast-required"> *</span>Teléfono</label>
        </div>
    </div>
    <div class="row ml-5" >
        <div class="text-blue"> Seleccione el o los teléfonos de su preferencia</div>
    </div>
    <div class="row">
        <div class="col-md-3 form-check">
            <input type="checkbox" class="form-check-input" id="mobile-checkbox-natural" name='phone_checkbox_pn' value='mobile'
            {{!empty($info_specific->mobile_number) ? 'checked' : ''}}>
            <label class="form-check-label bg-yellow text-white tlf-checkbox" for="portal-web">Móvil</label>
        </div>
        <div class="col-md-3 form-check">
            <input type="checkbox" class="form-check-input" id="landline-checkbox-natural" name='phone_checkbox_pn' value='landline'
            {{!empty($info_specific->landline_number) ? 'checked' : ''}}>
            <label class="form-check-label bg-yellow text-white tlf-checkbox" for="portal-web">Fijo</label>
        </div>
    </div>
    @component('components.field_error')
        @slot('grid_size')
            6
        @endslot
        @slot('error_row_id')
            error_row_phone_checkbox_pn
        @endslot
        @slot('error_ul_id')
            error_ul_phone_checkbox_pn
        @endslot
    @endcomponent
    <div class="row {{!empty($info_specific->mobile_number) ? '' : 'd-none'}} mt-3" id='input-mobile-natural'>
        <div class="col-sm-3"> 
        <input class="phone-step0 form-control" name="mobile_pn" type="tel" id='mobile-pn' value="{{ !empty($info_specific->mobile_number) ? $info_specific->mobile_number : ''}}">
        </div>
    </div>
    @component('components.field_error')
        @slot('grid_size')
            6
        @endslot
        @slot('error_row_id')
            error_row_mobile_pn
        @endslot
        @slot('error_ul_id')
            error_ul_mobile_pn
        @endslot
    @endcomponent
    <div class="row {{!empty($info_specific->landline_number) ? '' : 'd-none'}} landline-phone mt-3" id='input-landline-natural'>
        <div class="col-sm-3"> 
        <input class="phone-step0 form-control" name="landline_pn" type="tel" id='landline-pn' value="{{ !empty($info_specific->landline_number) ? $info_specific->landline_number : ''}}">
        </div>
        <div class="col-sm-1 font-weight-bold my-auto">
                Ext
        </div>
        <div class="col-sm-3"> 
            <input type="text" class="form-control" style="margin-left: -50px;" placeholder="Opcional" name='landline_ext_pn' value="{{ !empty($info_specific->landline_number_ext) ? $info_specific->landline_number_ext : ''}}">
        </div>
    </div>
    @component('components.field_error')
        @slot('grid_size')
            6
        @endslot
        @slot('error_row_id')
            error_row_landline_pn
        @endslot
        @slot('error_ul_id')
            error_ul_landline_pn
        @endslot
    @endcomponent
    <div class="row" >
        <div class="col-sm-8"> 
            <div class="text-blue text-justify font-weight-bold mt-3"><span class="ast-required"> *</span>
                Por favor, verifique que sus datos sean los correctos, ya que serán utilizados
                para generar su publicación, enviarle sus datos de acceso, inscribirse en un
                adiestramiento, o solicitar cotizaciones
            </div>
        </div>
    </div>
</div>