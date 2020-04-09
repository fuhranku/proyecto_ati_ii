@extends('templates.layout')      

@section('title','Inicio')

@section('content')
<section>
    
    <div class="container">

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"><p class="font-weight-bold text-center h4">Opciones de búsqueda</p></div>
            <div class="col-md-4"></div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p class="text-danger d-inline">*</p>
                <p class="text-blue d-inline">1- Haz click en la opción de tu preferencia</p>
            </div>
        </div>

        <div class="row m-3">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <button class="btn bg-yellow text-white" onclick="displaySD()">Buscar vivienda</button>
            </div>

            <div class="col-md-4">
                <button class="btn bg-yellow text-white" onclick="displaySoRD()">Vender o alquilar vivienda</button>
            </div>
            <div class="col-md-2"></div>
        </div>

        @include('index_section.search_dwelling')
        @include('index_section.sell_or_rent_dwelling')

    </div>

    <script>
        var quickSearch_post_url = "{{ url('/dwelling/quick_search')}}";
        var detailedSearch_post_url = "{{ url('/dwelling/detailed_search')}}";
        var disable_post_url = "{{ url('/dwelling/disable_dwelling')}}";
        var enable_post_url = "{{ url('/dwelling/enable_dwelling')}}";
        var delete_post_url = "{{ url('/dwelling/delete_dwelling')}}";

        var countries = @json($countries);
        var states = @json($states);
        var cities = @json($cities);

        var userID = {{ Session::has('info') ? Session::get('info')->id : -1}};
    </script>

    <script src="{{ asset('js/dwelling/dwelling_search.js') }}"></script>
    
    <script>
        displaySD = () =>{
            if($('#search-dwelling').hasClass("d-none")){
                $('#search-dwelling').removeClass("d-none");
            }else{
                $('#search-dwelling').addClass("d-none");
            }
        }

        displaySoRD = () =>{
            if($('#sellrent-dwelling').hasClass("d-none")){
                $('#sellrent-dwelling').removeClass("d-none");
            }else{
                $('#sellrent-dwelling').addClass("d-none");
            }
        }


        displaySBK = () =>{
            if($('#search-key').hasClass("d-none")){
                $('#search-key').removeClass("d-none");
            }else{
                $('#search-key').addClass("d-none");
            }
        }

       
        displayRS = () =>{
            
            if($('#busqueda-rapida').hasClass("d-none")){
                $('#busqueda-rapida').removeClass("d-none");
            }else{
                $('#busqueda-rapida').addClass("d-none");
            }

        }

        displayDS = () =>{

            if($('#busqueda-detallada').hasClass("d-none")){
                $('#busqueda-detallada').removeClass("d-none");
            }else{
                $('#busqueda-detallada').addClass("d-none");
            }
            
        }
        
    </script>
@endsection