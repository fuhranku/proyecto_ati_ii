@extends('templates.layout')   

@section('title','Index')

@section('content')
    @include('user_data_section.panel')
    <section id="content">
        {{-- {{ $info->id}} --}}
        {{-- 1 - Cómo Supo de Nosotros --}}
            @include('user_data_section.step0')
        {{-- 2 - Registrar Usuario --}}
            @include('user_data_section.step1')
        {{-- 3 - Idioma del adiestramiento --}}
            @include('user_data_section.step2')
        {{-- 4 - Datos de inicio de sesión --}}
            @include('user_data_section.step3')
        {{-- 5 - Frecuencia de información a recibir --}}
            @include('user_data_section.step4')
        {{-- 6 - Datos de facturación --}}
            @include('user_data_section.step5')  

        {{-- Botones final --}}
            <div class="row mt-5" id="btns-step04">
                <div class="col-sm-12">
                    <div class="text-center">
                    <a class="btn btn-yellow " id="singlebutton" style="font-weight:bold;color:#ffffff; padding:5px 30px" href="{{ url('index') }}">
                            Cancelar
                    </a>
                    </div>
                </div>
            </div>
            <div class="row mt-5 d-none" id="btns-step5">
                <div class="col-sm-4"></div>
                <div class="col-sm-2">
                    <div class="text-center">
                        <button type="submit" class="btn btn-yellow" id="update-btn" style="font-weight:bold;color:#ffffff; padding:5px 30px" form='form-step-5'>
                            Actualizar
                        </button>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="text-center">
                        <a class="btn btn-yellow" id="sign-up-cancel-btn" style="font-weight:bold;color:#ffffff; padding:5px 30px" href="{{ url('index') }}">
                            Cancelar
                        </a>
                    </div>
                </div>
            </div>
    </section>
    @include('user_data_section.user_data_modal')

<script type="text/javascript">
    // var form_post_url = "{{ url('/sign_up')}}";
    var form_post_url = "{{ url('/user_data')}}";

    var retrieve_cities_url = "{{ url('/getCities')}}";
    $(document).ready(function() {
        console.log('holaaaadasa');
        
        console.log('hola fasdas');
        var mobile_pj_up, landline_pj_up;
    
        var phone_step4_input = document.querySelector("#phone-step4");
        
            
        var mobile_pj_input_up = document.querySelector("#mobile-pj-up");
        var landline_pj_input_up = document.querySelector("#landline-pj-up");
        
        // Initialize legal mobile number input
        mobile_pj_up = window.intlTelInput(mobile_pj_input_up,{
            utilsScript: utilsScript,
            onlyCountries: ['es','ve'],
            separateDialCode:true,
            initialCountry:""
        });
        // Initialize legal number input
        landline_pj_up = window.intlTelInput(landline_pj_input_up,{
            utilsScript: utilsScript,
            onlyCountries: ['es','ve'],
            separateDialCode:true,
            initialCountry:""
        });// Initialize natural mobile number input
    })
</script>

@endsection