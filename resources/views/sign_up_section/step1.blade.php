@php
$personType = 0;
@endphp
<section class="d-none" id="step-1">
<div class="container justify-content-center">
    {{-- Selector de tipo de usuario --}}
    <div class='row mt-3'>
        <div class='col-sm-3 font-weight-bold'>
            Seleccione el tipo de usuario:
        </div>
        <div class='col-sm-2'>
            <input type="checkbox" class="form-check-input" id="checkbox-natural">
            <label class="form-check-label" for="natural" >Persona natural</label>
        </div>
        <div class='col-sm-2'>
            <input type="checkbox" class="form-check-input" id="checkbox-juridica">
            <label class="form-check-label" for="juridica">Persona juridíca</label>
        </div>
</div>
    {{-- Persona Natural --}}
    @include('sign_up_section/step2_person_type/p_natural')

    {{-- Persona Jurídica --}}
    @include('sign_up_section/step2_person_type/p_juridica')

</section>