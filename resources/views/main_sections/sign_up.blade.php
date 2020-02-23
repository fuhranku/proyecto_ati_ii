@extends('templates.layout')   

@section('title','Index')

@section('content')
<form method="post" action="/sign_up/{{$_step_a}}">
    @csrf
    @include('sign_up_section.panel')
    <section id="content">
        {{-- 1 - Cómo Supo de Nosotros --}}
            @include('sign_up_section.step1')
        {{-- 2 - Registrar Usuario --}}
            @include('sign_up_section.step2')
        {{-- 3 - Idioma del adiestramiento --}}
            @include('sign_up_section.step3')
        {{-- 4 - Datos de inicio de sesión --}}
            @include('sign_up_section.step4')
        {{-- 5 - Frecuencia de información a recibir --}}
            @include('sign_up_section.step5')
        {{-- 6 - Datos de facturación --}}
            @include('sign_up_section.step6')       
        {{-- Botones final --}}
            <div class="row mt-5">
                <div class="col-sm-12">
                    <div class="text-center">
                        <button class="btn  bg-yellow " id="singlebutton" style="font-weight:bold;color:#ffffff; padding:5px 30px">
                            Cancelar
                        </button>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-4"></div>
                <div class="col-sm-2">
                    <div class="text-center">
                        <button type="submit" class="btn  bg-yellow " id="singlebutton" style="font-weight:bold;color:#ffffff; padding:5px 30px">
                            Registrarme
                        </button>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="text-center">
                        <button class="btn  bg-yellow " id="singlebutton" style="font-weight:bold;color:#ffffff; padding:5px 30px">
                            Cancelar
                        </button>
                    </div>
                </div>
            </div>
    </section>
</form>

<script type="text/javascript">
    var step = "{{$step}}";
    var type = "{{$type}}";
</script>

@endsection