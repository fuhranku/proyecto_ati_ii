@extends('templates.layout')    

@section('title','Publicar')

@section('content')
<section>
    
    <div class="container">
        {{-- Section header --}}
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 bg-blue text-center">
                <p class="h4 text-white font-weight-bold mt-2">Publicar vivienda</p>
            </div>
            <div class="col-md-1"></div>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <p class="font-weight-bold ml-4 mt-4 text-center">Proporcione los datos especificados a continuación</p>
            </div>
            <div class="col-md-2"></div>
        </div>

        {{-- Content --}}
        {{-- <img class="card-img-top" src="{{url('uploads/images/avatar_default.png')}}"> --}}
        {{-- Dropdowns --}}
        @include('dwelling_section.publish_section.part0')
        {{-- Tipo de inmueble --}}
        @include('dwelling_section.publish_section.part1')
        {{-- Fotos y videos --}}
        @include('dwelling_section.publish_section.part2')
        {{-- Otros detalles --}}
        @include('dwelling_section.publish_section.part3')
        {{-- Precio y moneda --}}
        @include('dwelling_section.publish_section.part4')
        {{-- Datos de contacto --}}
        @include('dwelling_section.publish_section.part5')
        {{-- Días de contacto --}}
        @include('dwelling_section.publish_section.part6')
        
        {{-- Final Buttons --}}
        <div class="row mt-5" id="btns-publish-dwelling">
            <div class="col-sm-4"></div>
            <div class="col-sm-3">
                <div class="text-center">
                    <button type="submit" class="btn btn-yellow" id="publish_btn_dwelling" style="font-weight:bold;color:#ffffff; padding:5px 30px">
                        Publicar vivienda
                    </button>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="text-center">
                    <a class="btn btn-yellow" id="cancel_publish_dwelling" style="font-weight:bold;color:#ffffff; padding:5px 30px" href="{{ url('index') }}">
                        Cancelar
                    </a>
                </div>
            </div>
        </div>
    </div>

    @include('dwelling_section.publish_section.publishedModal')

    <script>
        var post_dwelling = "{{ url('/dwelling/store_dwelling')}}";
    </script>

@endsection