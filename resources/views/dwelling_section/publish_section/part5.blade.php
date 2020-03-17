<div class="row">

    <div class="col-md-7 mt-3">

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 bg-warning text-center">
                <p class="h5 text-white font-weight-bold mt-2">Datos de contacto</p>
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="row">
            <div class="col-md 12 border border-primary mt-1 p-3">
                <div class="row mt-3 mr-3 ml-3">
                    <div class="col-md-6 my-auto">
                        <label class="font-weight-bold"> <span class="ast-required"> *</span>Nombre</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control input-section2" id="name-contact-publish-dwelling-input">
                    </div>
                </div>
                @component('components.field_error')
                    @slot('grid_size')
                        12
                    @endslot
                    @slot('error_row_id')
                        error_row_name_contact
                    @endslot
                    @slot('error_ul_id')
                        error_ul_name_contact
                    @endslot
                @endcomponent

                <div class="row mt-3 mr-3 ml-3">
                    <div class="col-md-6 my-auto">
                        <label class="font-weight-bold"> <span class="ast-required"> *</span>Apellido</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control input-section2" id="lastname-contact-publish-dwelling-input">
                    </div>
                </div>
                @component('components.field_error')
                    @slot('grid_size')
                        12
                    @endslot
                    @slot('error_row_id')
                        error_row_lastname_contact
                    @endslot
                    @slot('error_ul_id')
                        error_ul_lastname_contact
                    @endslot
                @endcomponent

                <div class="row mt-3 mr-3 ml-3">
                    <div class="col-md-6">
                        <label class="font-weight-bold"> <span class="ast-required"> *</span>Correo electrónico</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control input-section2" id="email-contact-publish-dwelling-input">
                    </div>
                </div>

                @component('components.field_error')
                    @slot('grid_size')
                        12
                    @endslot
                    @slot('error_row_id')
                        error_row_email_contact
                    @endslot
                    @slot('error_ul_id')
                        error_ul_email_contact
                    @endslot
                @endcomponent
            
                <div class="row m-3" >
                    <div class="col-md-12">
                        <div class="text-blue"> Seleccione el o los teléfonos de su preferencia</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-1"></div>
                    <div class="col-md-5 form-check">
                        <input type="checkbox" class="form-check-input" id="mobile-checkbox-publish-dwelling" name="phone-checkbox-publish-dwelling" value="mobile">
                        <label class="form-check-label bg-yellow text-white tlf-checkbox">Móvil</label>
                    </div>
                    <div class="col-md-5 form-check">
                        <input type="checkbox" class="form-check-input" id="landline-checkbox-publish-dwelling" name="phone-checkbox-publish-dwelling" value="landline">
                        <label class="form-check-label bg-yellow text-white tlf-checkbox">Fijo</label>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                @component('components.field_error')
                    @slot('grid_size')
                        12
                    @endslot
                    @slot('error_row_id')
                        error_row_phone_checkbox
                    @endslot
                    @slot('error_ul_id')
                        error_ul_phone_checkbox
                    @endslot
                @endcomponent

                <div class="row m-3 d-none" id='input-publish-dwelling-mobile'>
                    <div class="col-md-5"> 
                    <input class="phone-step0 form-control" name="mobile_dwelling" type="tel" id='mobile-publish-dwelling'>
                    </div>
                </div>

                @component('components.field_error')
                    @slot('grid_size')
                        12
                    @endslot
                    @slot('error_row_id')
                        error_row_mobile_dwelling
                    @endslot
                    @slot('error_ul_id')
                        error_ul_mobile_dwelling
                    @endslot
                @endcomponent

                <div class="row landline-phone m-3 d-none" id='input-publish-dwelling-landline'>
                    <div class="col-md-5"> 
                    <input class="phone-step0 form-control" name="landline_dwelling" type="tel" id='landline-publish-dwelling'>
                    </div>
                    <div class="col-sm-2 font-weight-bold my-auto">
                            Ext
                    </div>
                    <div class="col-sm-3"> 
                        <input type="text" class="form-control" style="margin-left: -50px;" placeholder="Opcional" name='landline_ext_dwelling'>
                    </div>
                </div>

                @component('components.field_error')
                    @slot('grid_size')
                        12
                    @endslot
                    @slot('error_row_id')
                        error_row_landline_dwelling
                    @endslot
                    @slot('error_ul_id')
                        error_ul_landline_dwelling
                    @endslot
                @endcomponent
            </div>
        </div>
</div>