<section class="d-none" id="step-2">
    <form id='form-step-2'>
        @csrf
        @component('components.field_error')
            @slot('grid_size')
                12
            @endslot
            @slot('error_row_id')
                error_row_step02
            @endslot
            @slot('error_ul_id')
                error_ul_step02
            @endslot
        @endcomponent
        <div class="row mt-5">
            <div class="col-md-4 mr-5"></div>
            <div class="col-md-1 form-check ">
                <input class="form-check-input" type="radio" name="lang" value="es" {{$info->lang == 'es' ? 'checked' : ''}}>
                <label class="form-check-label" for="portal-web">Español</label>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-1 form-check">
                <input class="form-check-input" type="radio" name="lang" value="en"  {{$info->lang == 'en' ? 'checked' : ''}}>
                <label class="form-check-label" for="portal-web">Inglés</label>
            </div>
        </div>
    </form>
</section>