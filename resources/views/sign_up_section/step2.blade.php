<section class="d-none" id="step-2">
    <form id='form-step-0'>
        @csrf
        @component('components.general_error')
            @slot('error_id')
                errors-row-step2
            @endslot
        @endcomponent
        <div class="row mt-5">
            <div class="col-md-4 mr-5"></div>
            <div class="col-md-1 form-check ">
                <input class="form-check-input" type="radio" name="lang" value="es">
                <label class="form-check-label" for="portal-web">Español</label>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-1 form-check">
                <input class="form-check-input" type="radio" name="lang" value="en">
                <label class="form-check-label" for="portal-web">Inglés</label>
            </div>
        </div>
    </form>
</section>