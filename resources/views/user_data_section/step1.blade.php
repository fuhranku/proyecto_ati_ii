@php
$personType = 0;
@endphp
<section class="d-none" id="step-1">
    <form id='form-step-1'>
        @csrf
        {{-- Errors List --}}
        @component('components.field_error')
            @slot('grid_size')
                12
            @endslot
            @slot('error_row_id')
                error_row_person_type
            @endslot
            @slot('error_ul_id')
                error_ul_person_type
            @endslot
        @endcomponent
        {{-- Selector de tipo de usuario --}}
        <div class="container justify-content-center ">
            <div class='row mt-3 d-none'>
                <div class='col-sm-3 font-weight-bold'>
                    Seleccione el tipo de usuario:
                </div>
                <div class='col-sm-2'>
                    <input type="checkbox" class="form-check-input" id="checkbox-natural" name='person_type' value="nat" {{$info->person_type == 'nat' ? 'checked' : ''}} >
                    <label class="form-check-label" for="natural" >Persona natural</label>
                </div>
                <div class='col-sm-2'>
                    <input type="checkbox" class="form-check-input" id="checkbox-juridica" name='person_type' value="jur" {{$info->person_type != 'nat' ? 'checked' : ''}} >
                    <label class="form-check-label" for="juridica">Persona juridíca</label>
                </div>
        </div>
        @if ($info->person_type == 'nat')
        
        {{-- Persona Natural --}}
        @include('user_data_section/step2_person_type/p_natural')
        @else
        
        {{-- Persona Jurídica --}}
        @include('user_data_section/step2_person_type/p_juridica')    
        @endif
    </form>
</section>