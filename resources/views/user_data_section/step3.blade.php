<section class="d-none" id="step-3">
    <form id='form-step-3'>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row mt-3">
                    <div class="col-md-5 my-auto">
                        <label class="font-weight-bold"> <span class="ast-required"> *</span>Correo para acceder al portal</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name='email_login' value="{{ !empty($info->email) ? $info->email : ''}}">
                    </div>
                </div>
                @component('components.field_error')
                @slot('grid_size')
                    11
                @endslot
                @slot('error_row_id')
                    error_row_email_login
                @endslot
                @slot('error_ul_id')
                    error_ul_email_login
                @endslot
                @endcomponent
                <div class="row mt-3">
                    <div class="col-md-5 my-auto">
                        <label class="font-weight-bold"> <span class="ast-required"> *</span>Contraseña</label>
                    </div>
                    <div class="col-md-5">
                        <input type="password" class="form-control" name='pw_login' id="change-password">
                    </div>
                    <div class="col-md-1">
                        <input type="checkbox" name="changePassword" id="checkbox-changePassword">
                            
                        ¿Cambiar contraseña?
                    </div>
                </div>
                @component('components.field_error')
                @slot('grid_size')
                    11
                @endslot
                @slot('error_row_id')
                    error_row_pw_login
                @endslot
                @slot('error_ul_id')
                    error_ul_pw_login
                @endslot
                @endcomponent
                <div class="row mt-3">
                    <div class="col-md-12 my-auto">
                        <input type="checkbox" class="form-check-input" id="checkbox-frecuencia" 
                        {{!empty($info->days_freq) ? 'checked' : ''}}>
                        <label class="form-check-label text-blue" for="rrss">
                            Quiero mantenerme informado acerca de los servicios que
                            ofrece la empresa, y otros aspectos de interés
                        </label>               
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>