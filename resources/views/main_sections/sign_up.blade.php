@extends('templates.layout')   

@section('title','Index')

@section('content')
<form>
    @csrf
    @include('sign_up_section.panel')
    <section id="content">
        {{-- 1 - Cómo Supo de Nosotros --}}
            @include('sign_up_section.step0')
        {{-- 2 - Registrar Usuario --}}
            @include('sign_up_section.step1')
        {{-- 3 - Idioma del adiestramiento --}}
            @include('sign_up_section.step2')
        {{-- 4 - Datos de inicio de sesión --}}
            @include('sign_up_section.step3')
        {{-- 5 - Frecuencia de información a recibir --}}
            @include('sign_up_section.step4')
        {{-- 6 - Datos de facturación --}}
            @include('sign_up_section.step5')  

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
                        <a type="submit" class="btn btn-yellow" id="sign-up-btn" style="font-weight:bold;color:#ffffff; padding:5px 30px">
                            Registrarme
                        </a>
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
    {{-- Modal --}}
        <div class="row h-100 d-none" id="sign-up-modal">
            <div class="col-sm-12 my-auto">
            <div class="w-30 mx-auto text-center bg-white pb-3">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bg-blue text-white p-2">
                            Registro Exitoso
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mt-2">
                        ¿Qué desea hacer a continuación?
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-sm-6 mt-2">
                        <a class="btn btn-yellow text-center" href="#">Iniciar sesión</a>
                    </div>
                    <div class="col-sm-6 mt-2">
                        <a class="btn btn-yellow text-center" href="{{ url('index') }}">Volver al inicio</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
</form>

{{-- <script type="text/javascript">
    var step = "{{$step}}";
    var type = "{{$type}}";
</script> --}}

@endsection