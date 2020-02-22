@extends('templates.layout')   

@section('title','Index')

@section('content')
    @include('sign_up_section.panel')
    <section id="content">

@switch($step)
    {{-- 1 - Cómo Supo de Nosotros --}}
    @case(1)
        @include('sign_up_section.step1')
    @break
    {{-- 2 - Registrar Usuario --}}
    @case(2)
        @include('sign_up_section.step2')
    @break
    {{-- 3 - Idioma del adiestramiento --}}
    @case(3)
        @include('sign_up_section.step3')
    @break
    {{-- 4 - Datos de inicio de sesión --}}
    @case(4)
        @include('sign_up_section.step4')
    @break
    {{-- 5 - Frecuencia de información a recibir --}}
    @case(5)
        @include('sign_up_section.step5')
    @break
    {{-- 6 - Datos de facturación --}}
    @case(6)
        @include('sign_up_section.step6')
    @break        
@endswitch

<div class="row mt-5">
    <div class="col-sm-12">
        <div class="text-center">
            <button class="btn  bg-yellow " id="singlebutton" style="font-weight:bold;color:#ffffff; padding:5px 30px">
                Cancelar
            </button>
        </div>
    </div>
</div>
</section>
<script type="text/javascript">
    var step = "{{$step}}";
    var type = "{{$type}}";
</script>
@endsection