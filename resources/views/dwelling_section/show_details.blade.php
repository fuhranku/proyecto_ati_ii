@extends('templates.layout')    

@section('title','Details')

@section('content')
<section>

    <div class="container">

        <div class="row">
            <div class="col-sm-12 my-auto">
                <div class="mx-auto bg-white pb-3 modal-border" >
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <div class="bg-blue text-white font-weight-bold" id="title-media-modal" style="border-bottom: 1px solid #000">
                            </div>
                        </div>
                    </div>
                    <div class="container p-3">
                        <div class="row">

                            <div class="col-md-4" id='main-photo-modal-container'>
                                <img src="{{url("images/avatar_default.png")}}" alt="">
                            </div>

                            <div class="col-md-4  ">
                                <div class="row">
                                    <p class="font-weight-bold d-inline m-0">Precio: </p>
                                    <p class="d-inline m-0" id="price_show_details"></p>
                                    <p class="d-inline m-0" id="currency_show_details"></p>
                                </div>
                                <div class="row">
                                    <p class="font-weight-bold d-inline m-0">Habitaciones: </p>
                                    <p class="d-inline m-0" id="rooms_show_details"></p>
                                </div>
                                <div class="row">
                                    <p class="font-weight-bold d-inline m-0">Baños: </p>
                                    <p class="d-inline m-0" id="bath_show_details"></p>
                                </div>
                                <div class="row">
                                    <p class="font-weight-bold d-inline m-0">Estacionamientos: </p>
                                    <p class="d-inline m-0" id="parking_show_details"></p>
                                </div>

                                <div class="row">
                                    <p class="font-weight-bold d-inline m-0">Habilitada: </p>
                                    <p class="d-inline m-0" id="enable_show_details"></p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <p class="text-uppercase text-red font-weight-bold text-underline m-0" id="property_type_show_details"></p>
                                <p class="text-uppercase text-blue font-weight-bold text-underline m-0" id="status_show_details"></p>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">

                                <div class="row ">
                                    <div class="col-md-6">
                                        <span class="badge badge-label bg-dark-blue text-white">Datos de Contacto</span>
                                    </div>
                                </div>

                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        <p class="font-weight-bold d-inline">Nombre de contacto: </p>
                                        <p class="d-inline" id="contact_name_show_details"></p>
                                    </div>

                                    <div class="col-md-12">
                                        <p class="font-weight-bold d-inline">Apellido de contacto: </p>
                                        <p class="d-inline" id="contact_lastname_show_details"></p>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <p class="font-weight-bold d-inline">Email de contacto: </p>
                                        <p class="d-inline" id="contact_email_show_details"></p>
                                    </div>

                                    <div class="col-md-12">
                                        <p class="font-weight-bold d-inline">Número de contacto: </p>
                                        <p class="d-inline" id="contact_number_show_details"></p>
                                    </div>

                                    <div class="col-md-12">
                                        <p class="font-weight-bold d-inline">Número de telefono fijo: </p>
                                        <p class="d-inline" id="contact_landline_show_details"></p>
                                    </div>

                                    <div class="col-md-12">
                                        <p class="font-weight-bold d-inline">Extensión número de teléfono fijo: </p>
                                        <p class="d-inline" id="contact_ext_show_details"></p>
                                    </div>

                                    <div class="col-md-12">
                                        <p class="font-weight-bold d-inline">Dias de contacto: </p>
                                        <p class="d-inline" id="contact_days_show_details"></p>
                                    </div>

                                    <div class="col-md-12">
                                        <p class="font-weight-bold d-inline">Hora de contacto: </p>
                                            <p class="d-inline" id="contact_hours_show_details"></p>
                                    </div>
                                </div>

                                <div class="row ">
                                    <div class="col-md-6">
                                        <span class="badge badge-label bg-dark-blue text-white">Detalles extra</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="font-weight-bold d-inline">Detalles extra: </p>
                                        <p class="d-inline" id="details_show_details"></p>
                                    </div>

                                    <div class="col-md-12">
                                        <p class="font-weight-bold d-inline">Detalles de transporte: </p>
                                        <p class="d-inline" id="trasport_details_show_details"></p>
                                    </div>

                                    <div class="col-md-12">
                                        <p class="font-weight-bold d-inline">Detalles de ubicación: </p>
                                        <p class="d-inline" id="location_details_show_details"></p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6"> 
                                <div class="row ">
                                    <div class="col-md-6">
                                        <span class="badge badge-label bg-dark-blue text-white">Ubicación</span>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <p class="font-weight-bold d-inline m-0">Continente: </p>
                                    <p class="d-inline m-0" id="continent_show_details"></p>
                                </div>
                                <div class="row">
                                    <p class="font-weight-bold d-inline m-0">País: </p>
                                    <p class="d-inline m-0" id="country_show_details"></p>
                                </div>
                                <div class="row">
                                    <p class="font-weight-bold d-inline m-0">Estado: </p>
                                    <p class="d-inline m-0" id="state_show_details"></p>
                                </div>
                                <div class="row">
                                    <p class="font-weight-bold d-inline m-0">Ciudad: </p>
                                    <p class="d-inline m-0" id="city_show_details"></p>
                                </div>

                                <div class="row ">
                                    <div class="col-md-6">
                                        <span class="badge badge-label bg-dark-blue text-white">Comodidades y Servicios</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <p class="font-weight-bold d-inline m-0">Comodidades: </p>
                                    <p class="d-inline m-0" id="comforts_show_details"></p>
                                </div>

                                <div class="row">
                                    <p class="font-weight-bold d-inline m-0">Servicios: </p>
                                        <p class="d-inline m-0" id="services_show_details"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row font-weight-bold" style='margin-top:-23px'>
                            <div class="col-md-12 text-center" id="media-subtitle-modal">
                            </div>
                        </div>
                        <div class="modal-media-container pt-1">                        
                            {{-- <div class="row">
                                <div class="col-md-2 border border-dark image-box">
                                </div>
                                <div class="col-md-2 border border-dark image-box">
                                </div>
                                <div class="col-md-2 border border-dark image-box">
                                </div>
                                <div class="col-md-2 border border-dark image-box">
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var dwelling_details = @json($dwelling->dwellings);
        var comfort_details = @json($dwelling->comforts);
        var services_details = @json($dwelling->services);
    </script>

    <script src="{{ asset('js/dwelling/dwelling_details.js') }}"></script>

@endsection