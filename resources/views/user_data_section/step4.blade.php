<section class="d-none" id="step-4">
    <form id='form-step-4'>
    @component('components.field_error')
        @slot('grid_size')
            12
        @endslot
        @slot('error_row_id')
            error_row_frequency_checkbox
        @endslot
        @slot('error_ul_id')
            error_ul_frequency_checkbox
        @endslot
    @endcomponent
    <div class="row mt-3">
        <div class="col-sm-12">       
            <p class="font-weight-bold text-center">
                ¿Con que frecuencia le gustaría mantenerse informado acerca de los servicios que ofrece la empresa?
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 mr-5"></div>
        <div class="col-md-2 form-check mr-3">
            <input class="form-check-input step4_checkbox" type="radio" id="step4_checkbox1" name="frequency_checkbox" value=7
            {{!empty($info->days_freq) && empty($info->interest_services) && $info->days_freq == 7 ? 'checked' : ''}}>
            <label class="form-check-label">1 vez a la semana</label>
        </div>
        <div class="col-md-2 form-check mr-3">
            <input class="form-check-input step4_checkbox" type="radio" id="step4_checkbox2" name="frequency_checkbox" value=14
            {{!empty($info->days_freq) && empty($info->interest_services) && $info->days_freq == 14 ? 'checked' : ''}}>
            <label class="form-check-label">Cada 2 semanas</label>
        </div>
        <div class="col-md-2 form-check mr-3">
            <input class="form-check-input step4_checkbox" type="radio" id="step4_checkbox3" name="frequency_checkbox" value=30
            {{!empty($info->days_freq) && empty($info->interest_services) && $info->days_freq == 30 ? 'checked' : ''}}>
            <label class="form-check-label">1 vez al mes</label>
        </div>
        <div class="col-md-2 form-check ">
            <input class="form-check-input step4_checkbox" type="radio" id="step4_checkbox4" name="frequency_checkbox" value="other"
            {{!empty($info->days_freq) && !empty($info->interest_services) ? 'checked' : ''}}> 
            <label class="form-check-label">Otra</label>
        </div>
    </div>
    {{-- Opciones para 'Otra' --}}
    @include('user_data_section/step4_other_choices')
    </form>
</section>