<section class="d-none" id="step-4">
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
            <input class="form-check-input step4_checkbox" type="radio" name="1vez" id="step4_checkbox1" value="1vez">
            <label class="form-check-label" for="portal-web">1 vez a la semana</label>
        </div>
        <div class="col-md-2 form-check mr-3">
            <input class="form-check-input step4_checkbox" type="radio" name="2veces" id="step4_checkbox2" value="2veces">
            <label class="form-check-label" for="portal-web">Cada 2 semanas</label>
        </div>
        <div class="col-md-2 form-check mr-3">
            <input class="form-check-input step4_checkbox" type="radio" name="1mes" id="step4_checkbox3" value="3veces">
            <label class="form-check-label" for="portal-web">1 vez al mes</label>
        </div>
        <div class="col-md-2 form-check ">
            <input class="form-check-input step4_checkbox" type="radio" name="otra_step4" id="step4_checkbox4" value="otra"> 
            <label class="form-check-label" for="portal-web">Otra</label>
        </div>
    </div>
    {{-- Opciones para 'Otra' --}}
    @include('sign_up_section/step4_other_choices')

  
</section>